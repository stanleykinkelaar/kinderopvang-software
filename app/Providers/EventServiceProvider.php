<?php

namespace App\Providers;

use App\Events\SystemUserSetPasswordEmailEvent;
use App\Listeners\SendSystemUserSetPasswordEmailListener;
use App\Models\SystemUser;
use App\Observers\SystemUserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

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

        SystemUserSetPasswordEmailEvent::class => [
            SendSystemUserSetPasswordEmailListener::class,
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
    }
}
