<?php

namespace App\Notifications;

use App\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class OrderCancelNotification extends Notification
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
        $order_info = Order::join('vehicles', 'orders.vehicle_id', 'vehicles.id')
            ->where('orders.order_id', $this->order_id)
            ->first();
        $user = Auth::user();

        if ($order_info['payment_mode'] == 'ESEWA') {
            $message = 'You will be refunded with your full payment soon.';
        } else {
            $message = "";
        }

        return (new MailMessage)
            ->subject('[Sharewheel] Reservation Cancellation')
            ->line($user['first_name'] . ' ' . $user['last_name'] . ',')
            ->line('Your reservation for ' . $order_info['vehicle_title'] . ' [' . $order_info['order_id'] . '] ' . 'on ' . $order_info['created_at']->format('Y-M-d') . ' is cancelled.')
            ->line($message)
            ->action('Search for other vehicles', url('http://localhost:8000'))
            ->line('Keep using Sharewheel!');
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
