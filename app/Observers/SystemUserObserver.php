<?php

namespace App\Observers;

use App\Events\SystemUserSetPasswordEmailEvent;
use App\Models\PasswordReset;
use App\Models\SystemUser;

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
        $this->passwordReset->create([
            'email' => $systemUser->email,
            'token' => $this->passwordReset->generateToken(),
        ]);

        event(new SystemUserSetPasswordEmailEvent($systemUser->email));
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
