<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageRecived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Mensaje de sitio web de Hammex";

    public $msg;

    public function __construct($msg)
    {
        $this->msg = $msg;
    }


    public function build()
    {
        return $this->view('emails.message-recived');
    }
}
