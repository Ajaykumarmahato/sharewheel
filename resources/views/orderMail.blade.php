

    @component('mail::panel')
    Dear, <br>
    <b>{{$order_info->first_name}}  {{$order_info->last_name}}</b> your booking is confirmed for 
    <b>{{$order_info->vehicle_title}}</b>.
@endcomponent

@component('mail::table')
| Booking Summary       | 
| ----------------------|

            Vehcle Name  =>    {{$order_info->vehicle_title}}
            Unit Amount  =>    Rs. {{$order_info->price_per_hour}}
            Tax Amount   =>    Rs. {{$tax_amount}}
            Total Amount =>    Rs. {{$order_info->total_price}}

@endcomponent

    Thank you, {{ config('app.name') }} 

@component('mail::button', ['url' => 'http://localhost:8000', 'color'=>'green'])
Continue Surfing
@endcomponent


