<?php

namespace App\Observers;

use App\Jobs\EmailGuardianUserQueueJob;
use App\Jobs\EmailQueueJob;
use App\Models\GuardianUser;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Log;

class GuardianUserObserver
{
    private PasswordReset $passwordReset;

    public function __construct(PasswordReset $passwordReset)
    {
        $this->passwordReset = $passwordReset;
    }

    /**
     * Handle the GuardianUser "created" event.
     *
     * @param GuardianUser $guardianUser
     * @return void
     */
    public function created(GuardianUser $guardianUser)
    {
        $token = $this->passwordReset->generateToken();
        $email = $guardianUser->email;

        $this->passwordReset->create([
            'email' => $email,
            'token' => $token,
        ]);

        dispatch(new EmailGuardianUserQueueJob($email, $token));
    }

    /**
     * Handle the GuardianUser "updated" event.
     *
     * @param GuardianUser $guardianUser
     * @return void
     */
    public function updated(GuardianUser $guardianUser)
    {
        //
    }

    /**
     * Handle the GuardianUser "deleted" event.
     *
     * @param GuardianUser $guardianUser
     * @return void
     */
    public function deleted(GuardianUser $guardianUser)
    {
        //
    }

    /**
     * Handle the GuardianUser "restored" event.
     *
     * @param GuardianUser $guardianUser
     * @return void
     */
    public function restored(GuardianUser $guardianUser)
    {
        //
    }

    /**
     * Handle the GuardianUser "force deleted" event.
     *
     * @param GuardianUser $guardianUser
     * @return void
     */
    public function forceDeleted(GuardianUser $guardianUser)
    {
        //
    }
}
