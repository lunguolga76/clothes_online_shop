<?php

namespace App\Events;

class NewTextInExample
{
    public string $text;

    public function __construct(string $text)
    {
        $this->text=$text;
    }

}
