<?php
namespace App\Mailers;

use App\Models\Ticket;
use Illuminate\Contracts\Mail\Mailer;

class AppMailer {
    protected $mailer; 
    protected $fromAddress = 'a796eafef2-dfdb1c@inbox.mailtrap.io';
    protected $fromName = 'Support Ticket';
    protected $to;
    protected $subject;
    protected $view;
    protected $data = [];

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendTicketInformation( Ticket $ticket)
    {
        $this->to = $ticket->email;
        $this->subject = "[Ticket ID: $ticket->ticket_id] $ticket->subject";
        $this->view = 'emails.ticket_info';
        $this->data = compact('ticket');
dd($this->data);
        return $this->deliver();
    }

    public function deliver()
    {
        $this->mailer->send($this->view, $this->data, function($message) {
            $message->from($this->fromAddress, $this->fromName)
                    ->to($this->to)->subject($this->subject);
        });
    }
}