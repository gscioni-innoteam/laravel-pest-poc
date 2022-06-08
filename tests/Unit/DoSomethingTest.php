<?php

declare(strict_types=1);

use App\DTO\HappinessDTO;
use App\Services\DoSomethingService;

test('should be happy', function () {
    $service = new DoSomethingService();

    expect($service->makeMeHappy(HappinessDTO::create('happy')))->toBeTrue();
});

test('should be not happy', function () {
    $service = new DoSomethingService();

    expect($service->makeMeHappy(HappinessDTO::create('sad')))->toBeFalse();
});
