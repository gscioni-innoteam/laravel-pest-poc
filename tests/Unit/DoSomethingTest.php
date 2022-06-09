<?php

declare(strict_types=1);

use App\DTO\HappinessDTO;
use App\Services\DoSomethingService;

test('should be happy', function () {
    $service = new DoSomethingService();

    expect($service->makeMeHappy(HappinessDTO::create(7)))->toBe('happy');
});

test('should be not happy', function () {
    $service = new DoSomethingService();

    expect($service->makeMeHappy(HappinessDTO::create(3)))->toBe('sad');
});
