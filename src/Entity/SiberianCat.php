<?php

declare(strict_types=1);

namespace App\Entity;

final class SiberianCat extends AbstractAnimal
{
    public function animalDescription(): string
    {
        return 'Siberian Cat';
    }

    public function animalPhoto(): string
    {
        return 'images/siberiancat.jpg';
    }
}