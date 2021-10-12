<?php

namespace App\Listeners;

use App\Events\NewTextInExample;
use Psr\Log\LoggerInterface;

class NewTextInExampleLoggingListener
{
    private LoggerInterface $logger;

    /**
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public  function handle(NewTextInExample $event):void
{
 $this->logger->$event;
}
}
