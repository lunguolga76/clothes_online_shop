<?php

namespace App\Models;

interface LoggableInterface
{
    public function toArray(): array;

    public function toString(): string;
}