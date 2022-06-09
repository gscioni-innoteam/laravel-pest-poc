<?php

declare(strict_types=1);

namespace App\DTO;

class HappinessDTO
{
    private function __construct(
        private int $happinessValue
    ) {
    }

    public static function create(int $happinessValue): self
    {
        return new self($happinessValue);
    }

    public function getHappinessValue(): int
    {
        return $this->happinessValue;
    }
}
