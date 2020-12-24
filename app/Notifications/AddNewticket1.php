<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class AddNewticket1 extends Notification
{

    use Queueable;
protected $ticket;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket )
    {
        $this->ticket=$ticket;
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
       $url = url('/tickets/'.$this->ticket->id);

        return (new MailMessage)
                  ->subject('New Ticket')
                    ->greeting('مرحباا!'.$this->ticket->name)
                    ->line(' تم اضافه التذكرةرقم ..!'.$this->ticket->id .'   وكود رقم  '.$this->ticket->ticket_id  )
                    ->action('عرض التذكره' , $url)
                    ->line('شكرا لك علي استخدام موقعنا !');
    }
    // public function toDatabase($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }

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
