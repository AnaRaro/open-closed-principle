<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\FrenchBulldog;
use App\Entity\SiberianCat;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/animals', name: 'listOfAnimals', methods: ['GET'])]
final class indexController
{
    public function __invoke(): Response
    {
        $dog = new FrenchBulldog();
        $cat = new SiberianCat();

        return new Response($dog->loadAnimal().$cat->loadAnimal());
    }
}