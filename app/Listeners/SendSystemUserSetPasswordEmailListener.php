<?php

namespace App\Listeners;

use App\Mail\SetPasswordEmail;
use App\Models\SystemUser;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendSystemUserSetPasswordEmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     * @return void
     */
    public function handle($systemUserEmail)
    {
        Mail::to($systemUserEmail)->send(new SetPasswordEmail());
    }
}
