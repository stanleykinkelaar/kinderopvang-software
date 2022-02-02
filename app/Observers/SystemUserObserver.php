<?php

namespace App\Observers;

use App\Events\SystemUserSetPasswordEmailEvent;
use App\Jobs\EmailQueueJob;
use App\Mail\SetPasswordEmail;
use App\Models\PasswordReset;
use App\Models\SystemUser;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SystemUserObserver
{
    private PasswordReset $passwordReset;

    public function __construct(PasswordReset $passwordReset)
    {
        $this->passwordReset = $passwordReset;
    }

    /**
     * Handle the SystemUser "created" event.
     *
     * @param SystemUser $systemUser
     * @return void
     */
    public function created(SystemUser $systemUser)
    {
        $token = $this->passwordReset->generateToken();
        $email = $systemUser->email;

        $this->passwordReset->create([
            'email' => $email,
            'token' => $token,
        ]);

        dispatch(new EmailQueueJob($email, $token));
    }

    /**
     * Handle the SystemUser "updated" event.
     *
     * @param SystemUser $systemUser
     * @return void
     */
    public function updated(SystemUser $systemUser)
    {
        //
    }

    /**
     * Handle the SystemUser "deleted" event.
     *
     * @param SystemUser $systemUser
     * @return void
     */
    public function deleted(SystemUser $systemUser)
    {
        //
    }

    /**
     * Handle the SystemUser "restored" event.
     *
     * @param SystemUser $systemUser
     * @return void
     */
    public function restored(SystemUser $systemUser)
    {
        //
    }

    /**
     * Handle the SystemUser "force deleted" event.
     *
     * @param SystemUser $systemUser
     * @return void
     */
    public function forceDeleted(SystemUser $systemUser)
    {
        //
    }
}
