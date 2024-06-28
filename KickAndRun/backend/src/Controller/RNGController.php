<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class RNGController
{
    #[Route("/api/dice", name: "throw_dice")]
    public function throwDice(): JsonResponse
    {
        $randomNumber = random_int(1, 6);

        return new JsonResponse($randomNumber);
    }
}
