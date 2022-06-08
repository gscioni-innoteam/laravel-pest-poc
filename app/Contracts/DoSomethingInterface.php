<?php

declare(strict_types=1);

namespace App\Contracts;

use App\DTO\HappinessDTO;

interface DoSomethingInterface
{
    public function makeMeHappy(HappinessDTO $dto): bool;
}
