<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Contracts\DoSomethingInterface;
use App\DTO\HappinessDTO;
use Illuminate\Http\JsonResponse;

class SomethingController extends Controller
{
    public function index(int $value, DoSomethingInterface $service): JsonResponse
    {
        return response()->json([
            'status' => $service->makeMeHappy(HappinessDTO::create($value)),
        ]);
    }
}
