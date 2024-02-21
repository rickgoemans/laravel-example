<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /** @inheritdoc */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /** @inheritdoc */
    public function boot(): void
    {
        //
    }

    /** @inheritdoc */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
