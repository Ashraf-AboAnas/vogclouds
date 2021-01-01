<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class NewNotificationReplay extends Notification
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
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */


    public function toDatabase($notifiable)
    {  $url = url('/ticket/addreplytoticket/'.$this->ticket->id);
        return [
            'title'  =>'تم ااضافة رد  جديد',
            'body'   =>' للتذكره رقم'.$this->ticket->id,
           'action'  => $url,
        ];
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
