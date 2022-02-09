<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\brands;
use App\categories;
use App\Notifications\UserRegistrationNotification;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Arr;
use Carbon\Carbon;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function showRegister()
    {
        return view('auth.register');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'min:3', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'dob' => ['required', 'before:-18 years'],
            'country_name' => ['required', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'contact_number' => ['required', 'regex:/[0-9]{10}/'],
            'liscence_number' => 'required', ['string', 'max:40', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'dob'  => Carbon::parse($data['dob'])->format('Y-m-d'),
            'country_name'  => $data['country_name'],
            'address' => $data['address'],
            'email' => $data['email'],
            'contact_number' => $data['contact_number'],
            'liscence_number' => $data['liscence_number'],
            'password' => Hash::make($data['password']),

        ]);
        //username
        $username = $user->id . '-' . request('first_name') . '.' . request('last_name');
        $user->update(['username' => $username]);

        //getting profile image name  storing in db and storing the file in folder
        if (request()->hasFile('profile_image')) {
            $profile_image = $user->id . '_' . request()->file('profile_image')->getClientOriginalName();
            request()->file('profile_image')->storeAs('public/user_profile_images', '/' . $profile_image, '');
            $user->update(['profile_image' => $profile_image]);
        } else {
            $user->update(['profile_image' => 'avatar.jpg']);
        }

        //getting liscence image name  storing in db and storing the file in folder
        if (request()->hasFile('liscence_image')) {
            $liscence_image = $user->id . '_' . request()->file('liscence_image')->getClientOriginalName();
            request()->file('liscence_image')->storeAs('public/user_liscence_images', '/' . $liscence_image, '');
            $user->update(['liscence_image' => $liscence_image]);
        } else {
            $user->update(['liscence_image' => 'liscence.jpg']);
        }

        return $user;
    }

    // Email Verification for Registration

    public function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);
        if ($validator->passes()) {
            $user = $this->create($input)->toArray();
            $user['link'] = Str::random(12);

            DB::table('users_activation')->insert(['id_user' => $user['id'], 'token' => $user['link']]);
            Mail::send('mail.activation', $user, function ($message) use ($user) {
                $message->to($user['email']);
                $message->subject('sharewheel.com - Activation code');
            });
            $usersAdmins = User::where('role', 'administrator')->get();
            foreach ($usersAdmins as $usersAdmin) {
                User::findOrFail($usersAdmin['id'])->notify(new UserRegistrationNotification($user['id']));
            }
            return redirect()->to('/login')->with('Success', 'An activation code is sent, Please check your email to activate your account!');
        }
        return back()->withErrors($validator);
    }
    public function userActivation($token)
    {
        $check = DB::table('users_activation')->where('token', $token)->first();
        if (!is_null($check)) {

            $user = User::find($check->id_user);
            if ($user->is_activated == 1) {
                return redirect()->to('/login')->with('Success', 'User is already Activated!');
            }
            $user->update(['is_activated' => 1]);
            DB::table('users_activation')->where('token', $token)->delete();
            return redirect()->to('/login')->with('Success', 'Registered Successfully! User is activated!');
        }
        return redirect()->to('/login')->with('Warning', 'Your Token is invalid! Please recheck the link sent in your email!');
    }
    // End of Email Verification
}
