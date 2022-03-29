<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable {

    public $name;
    public $email;
    public $msg;

    public function __construct(array $attributes) {
        $this->name = $attributes['name'];
        $this->email = $attributes['email'];
        $this->msg = $attributes['msg'];
    }

    public function build() {
        return $this->view('mail.contact');
    }
}
