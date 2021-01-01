<?php

namespace App\Notifications;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class PendingTicket extends Notification
{

    use Queueable;
protected $ticket;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( Ticket $ticket )
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
      $url = url('login');

        return (new MailMessage)
                    ->subject('متابعة التذكرة')
                    ->greeting('اداره الموقع !')
                  //  ->line('يمكنك الدخول واستكمال الاجراءات من الموقع ')
                    ->line('تم تحويل طلبك والان قيد المتابعه يمكنك الدخول الي حسابك للمتابعة')
                    // ->line('كلمة المرور : '.$this->password)
                     ->action('للدخول للموقع اضغط هنا' , $url);


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
