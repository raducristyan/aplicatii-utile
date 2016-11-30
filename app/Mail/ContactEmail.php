<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactEmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $address;
    protected $subject;
    protected $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($address, $subject, $body)
    {
        $this->address = $address;
        $this->subject = $subject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->address)
                    ->subject($this->subject)
                    ->view('contact.email')
                    ->with(['body' => $this->body]);
    }
}
