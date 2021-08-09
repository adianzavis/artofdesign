<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable {

    public String $name;
    public String $email;
    public String $message;

    public function __construct() {
        //
    }

    public function build() {
        return $this->view('mail.contact');
    }
}
