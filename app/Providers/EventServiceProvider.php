<?php

namespace App\Providers;

use App\Events\NewTextInExample;
use App\Events\LogView;
use App\Listeners\NewTextInExampleLoggingListener;
use App\Listeners\LogViewListener;
use App\Models\LoggableInterface;
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
        NewTextInExample::class=>[
            NewTextInExampleLoggingListener::class,
        ],
       LoggableInterface::class=>[
            LogViewListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
