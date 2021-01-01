<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class SendMassageReplay extends Notification
{

    use Queueable;
protected $ticket;
protected $user;

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
        return ['mail','database'];
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
                    ->subject('تم الرد علي التذكره ')
                    ->greeting('مرحبا ..اهلابك !')
                    ->line(' هناك رد جديد من قبل الاداره  !'.$this->ticket->id)
                    ->action('View Tickit' , $url)
                    ->line('يرجي الرد من خلال الموقع وليس الاميل بالضغط علي الرابط!')
                    ->greeting('اداره الموقع !')  ;
    }
    // public function toDatabase($notifiable)
    // {  $url = url('/tickets/'.$this->ticket->id);
    //     return [
    //         'title'  =>'New Ticket',
    //         'body'   =>' هناك تذكره جديده برقم  !'.$this->ticket->id,
    //        'action'  =>'View Tickit' , $url,
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
