<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class UserSideCorporateform extends Mailable
{
    use Queueable, SerializesModels;

 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Welcome to Punjab Angels Network')
            ->view('emails.userCorporateThankyou'); // Create this view in the next step
    }
}
