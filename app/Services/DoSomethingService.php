<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\DoSomethingInterface;
use App\DTO\HappinessDTO;

class DoSomethingService implements DoSomethingInterface
{
    public function makeMeHappy(HappinessDTO $dto): string
    {
        return match ($dto->getHappinessValue()) {
            1,2,3,4,5 => 'sad',
            default => 'happy'
        };
    }
}
