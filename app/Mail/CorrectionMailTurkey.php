<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CorrectionMailTurkey extends Mailable
{
    use Queueable, SerializesModels;

    public $application, $fields, $messageText;

    public function __construct($application, $fields, $messageText)
    {
        $this->application = $application;
        $this->fields = $fields;
        $this->messageText = $messageText;
    }

    public function build()
    {
        return $this->subject('Update Your Turkey Visa Application')
            ->view('emails.correctionturkey');
    }
}
