<?php

declare(strict_types=1);

it('has home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

it('has wrong page', function () {
    $response = $this->get('/app');

    $response->assertStatus(404);
});

it('should be happy', function () {
    $response = $this->get('/api/happiness/happy');

    $response->assertStatus(200);
    expect($response->getContent())->toBeJson()
        ->and($response->getContent())->json()->happy->toBe(true);
});

it('should be sad', function () {
    $response = $this->get('/api/happiness/sad');

    $response->assertStatus(200);
    expect($response->getContent())->toBeJson()
        ->and($response->getContent())->json()->happy->toBe(false);
});
