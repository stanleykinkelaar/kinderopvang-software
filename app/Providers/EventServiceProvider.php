<?php

namespace App\Providers;

use App\Models\GuardianUser;
use App\Models\SystemUser;
use App\Observers\GuardianUserObserver;
use App\Observers\SystemUserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        SystemUser::observe(SystemUserObserver::class);
        GuardianUser::observe(GuardianUserObserver::class);
    }
}
