<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class AddNewticket extends Notification
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
       $url = url('/findteckit/'.$this->ticket->id);

        return (new MailMessage)
                    ->subject('New Ticket')
                    ->greeting('Hello!'.$notifiable->name)
                    ->line(' هناك تذكره جديده برقم  !'.$this->ticket->id.'    '.$this->ticket->subject )
                    ->action('View Tickit' , $url)
                    ->line('يرجي متابعة الطلب  وشكرا!')
                    ->greeting('اداره الموقع !')  ;
    }
    public function toDatabase($notifiable)
    {  $url = url('/ticket/New/'.$this->ticket->id);//.$this->ticket->id
        return [
            'title'  =>'تذكره جديدة',
            'body'   =>'  رقم'.$this->ticket->id,
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
