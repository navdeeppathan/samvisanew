<?php

namespace App\Mail;

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ApplicationSuccessMail extends Mailable
{
    public $application;
    public $type;

    public function __construct($application,$type)
    {
        $this->application = $application;
        $this->type = $type;
    }

    public function build()
    {
        return $this->subject('Your ' . ucfirst($this->type) . ' Visa Application Submitted Successfully')
                    ->view('emails.application_success');
    }
}
