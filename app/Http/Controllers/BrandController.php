<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\brands;

class BrandController extends Controller
{
    //Brands
    public function managerBrands(){
        $brands=brands::orderBy('brand')->get();
        return view('manager.manager-brands', compact('brands'));
    }

    public function createNewbrand(){
        return view('manager.create-brand');
    }
    public function storeNewbrand(){
        //validation for fields
        request()->validate([
            'brand_name' =>['required', 'max:30'],
            'brand_description' => ['max:250'],
            'brand_image' => ['required'],
        ]);

        // fetching the request data from create form
        $brand = new brands();
        $brand->brand=request('brand_name');
        $brand->brand_description=request('brand_description');
        $prefix_img_name['random'] = Str::random(3);
        
         //getting brand image1 name  storing in db and storing the file in folder
        if(request()->hasFile('brand_image')){
            $brand_image = $prefix_img_name['random'] .'_'. request()->file('brand_image')->getClientOriginalName(); 
            request()->file('brand_image')->storeAs('public/brand_images', '/'.$brand_image, '');
            $brand->brand_image=$brand_image;
        }
        else{
            $brand->brand_image='brand.jpg';
        }
        //Validating URL
        $link=request('brand_link');
        if($link !=""){
            request()->validate([
                'brand_link' =>['url'],  
            ]);
            $brand->brand_link=request('brand_link');
        }
        $brand->save();
        return redirect('/manager-brands')->with('success', 'New Brand Added!');
    }
    public function deleteBrand(brands $brand){
        $brand->delete();
        return redirect('/manager-brands')->with('deleted', 'Brand Removed!');
    }

}
