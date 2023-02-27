<?php

declare(strict_types=1);

namespace App\Testing\Domain\Event;

use App\Shared\Domain\Event\EventInterface;


class TestingSessionCompletedEvent implements EventInterface
{
    public function __construct(public readonly string $testingSessionId)
    {
    }
}