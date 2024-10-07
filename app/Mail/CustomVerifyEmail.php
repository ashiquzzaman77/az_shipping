<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomVerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $activationCode;

    public function __construct($activationCode)
    {
        $this->activationCode = $activationCode;
    }

    public function build()
    {
        return $this->view('mail.verify-email')
                    ->with([
                        'url' => url("/verify/{$this->activationCode}"),
                    ]);
    }
}
