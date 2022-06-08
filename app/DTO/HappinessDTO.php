<?php

declare(strict_types=1);

namespace App\DTO;

class HappinessDTO
{
    private function __construct(
        private string $happinessValue
    ) {
    }

    public static function create(string $happinessValue): self
    {
        return new self($happinessValue);
    }

    public function getHappinessValue(): string
    {
        return $this->happinessValue;
    }
}
