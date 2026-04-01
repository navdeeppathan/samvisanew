<?php

namespace App\Mail;

namespace App\Mail;

use Illuminate\Mail\Mailable;

class AdminNewApplicationMail extends Mailable
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
        return $this->subject('New ' . ucfirst($this->type) . ' Visa Application Received')
                    ->view('emails.admin_new_application');
    }
}