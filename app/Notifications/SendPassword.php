<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class SendPassword extends Notification
{

    use Queueable;
protected $ticket;
protected $password;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket )
    {
        $this->ticket=$ticket;
       // $this->password=$password;


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
      // $url = url('/findteckit/'.$this->ticket->id);

        return (new MailMessage)
                    ->subject('متابعة التذكرة')
                    ->greeting('مرحبا تم ارسال بيانات الدخول للموقع!')
                   // ->line(' يمكنك الدخول الي الموقع لمتابعة التذكره  !'.$this->ticket->id)
                    ->line('اسم المستخدم '.$this->ticket->email)
                    ->line('كلمة المرور '.$this->ticket->password)
                   // ->action('View Tickit' , $url)
                  //  ->line('يرجي متابعة الطلب  وشكرا!')
                    ->greeting('اداره الموقع !')  ;
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
