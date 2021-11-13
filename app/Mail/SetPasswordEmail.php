<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SetPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this->from('no-reply@kinderopvangsoftware.test')
            ->subject('Maak nu je wachtwoord aan!!!!')
            ->markdown('emails.system_users.set_pasword');
    }
}
