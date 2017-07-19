<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message_text;

    /**
     * Create a new message instance.
     *
     * @param $name
     * @param $email
     * @param $message_text
     */
    public function __construct($name, $email, $message_text)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message_text = $message_text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view(
            'emails.contact_me'
        );
    }
}
