<?php

declare(strict_types=1);

namespace App\Entity;

final class FrenchBulldog extends AbstractAnimal
{
    protected function animalDescription(): string
    {
        return 'French Bulldog';
    }

    protected function animalPhoto(): string
    {
        return 'images/frenchbulldog.jpg';
    }

    public function loadAnimal(): string
    {
        return 'Papaia - '. parent::loadAnimal();
    }
}