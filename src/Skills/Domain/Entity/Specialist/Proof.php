<?php

namespace App\Skills\Domain\Entity\Specialist;

use App\Shared\Domain\Service\UlidService;

/**
 * Proof of skill confirmation.
 */
class Proof
{
    private string $id;

    private string $testId;

    public function __construct(string $testId)
    {
        $this->id = UlidService::generate();
        $this->testId = $testId;
    }

    public function getTestId(): string
    {
        return $this->testId;
    }
}
