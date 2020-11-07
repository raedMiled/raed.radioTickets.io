<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DealTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $deal;
    public $random;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($deal , $random)
    {
        $this->deal = $deal;
        $this->random = $random;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.dealTicket')
        ->subject('Your ticket for '. $this->deal->name);
    }
}
