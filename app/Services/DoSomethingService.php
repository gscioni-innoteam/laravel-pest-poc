<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\DoSomethingInterface;
use App\DTO\HappinessDTO;

class DoSomethingService implements DoSomethingInterface
{
    public function makeMeHappy(HappinessDTO $dto): bool
    {
        return match ($dto->getHappinessValue()) {
            'happy' => true,
            default => false
        };
    }
}
