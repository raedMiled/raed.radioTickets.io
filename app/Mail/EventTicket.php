<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $event;
    public $random;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event , $random)
    {
        $this->event = $event;
        $this->random = $random;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.eventTicket')
                    ->subject('Your ticket for '. $this->event->name)
                
        ;
    }
}
