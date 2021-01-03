<?php

namespace App\Notifications;

use App\Models\Invoice;
use App\Models\Ticket;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class AddNewInvoiceMsg extends Notification
{

    use Queueable;
protected $ticket;
protected $codeticket;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket ,$codeticket )
    {
        $this->ticket=$ticket;
       $this->codeticket=$codeticket;
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
        $url = url('/invoice/showinviose');

        return (new MailMessage)
                  ->subject('New Invoice')
                    ->greeting('مرحباا!'.$this->ticket->name )
                    ->line(' تم اضافه الفاتورة ..!'.$this->ticket->id .' وكود رقم '.$this->codeticket)
                    ->action('عرض الفاتوره' , $url)
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
