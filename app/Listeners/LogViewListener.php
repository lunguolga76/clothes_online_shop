<?php

namespace App\Listeners;

use App\Events\LogView;
use App\Models\Blog\Article;
use App\Models\LoggableInterface;
use App\Models\Manufacturer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Psr\Log\LoggerInterface;

class LogViewListener
{
    private LoggerInterface $logger;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(
//        LoggerInterface $logger
    )
    {
//        $this->logger = $logger;

    }

    /**
     * Handle the event.
     *
     * @param LogView $event
     * @param $loggable
     * @return void
     */
    public function handle(LogView $event, $loggable)
    {
//        $this->logger =info($loggable->toString(),
//            $loggable->toArray(),
//        );



    }
}
