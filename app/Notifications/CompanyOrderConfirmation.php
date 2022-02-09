<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Order;
use App\User;
use App\vehicles;
class CompanyOrderConfirmation extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($order_id)
    {
        $this->order_id = $order_id;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
       $order_info = Order::join('vehicles as v', 'orders.vehicle_id', 'v.id')
        ->join('users as u', 'orders.user_id', 'u.id')
        ->where('orders.order_id', $this->order_id)
        ->select('orders.*','u.first_name','u.last_name','u.id', 'v.vehicle_title','v.id')
        ->first();
        $tax_amount = $order_info['total_price'] - $order_info['price_per_hour'];
        return (new MailMessage)
                    ->subject('[Sharewheel] New Booking')
                    ->markdown('companyOrderMail',['order_info' => $order_info, 'tax_amount'=>$tax_amount]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
