<?php

namespace App\Mail;

use App\Models\PasswordReset;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class SetPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->from('no-reply@kinderopvangsoftware.test')
            ->subject('Maak nu je account compleet!')
            ->markdown('emails.system_users.set_pasword')
            ->withToken($this->token);
    }
}
