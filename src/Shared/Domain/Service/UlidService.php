<?php

declare(strict_types=1);

namespace App\Shared\Damain\Service;

use Symfony\Component\Uid\Ulid;

class UlidService
{
    public static function generate(): string{
        return Ulid::generate();
    }

    /**
     * Undocumented function
     *
     * @param string $ulid
     * @return boolean
     */
    public static function isValid(string $ulid): bool
    {
        return Ulid::isValid($ulid);
    }
}
