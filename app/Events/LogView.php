<?php

namespace App\Events;


use App\Models\LoggableInterface;



class LogView
{
    public LoggableInterface $loggable;

    /**
     * Create a new event instance.
     *
     * @return void
     *
     */
    public function __construct(LoggableInterface $loggable)
    {
        $this->loggable=$loggable;

    }



}
