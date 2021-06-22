<?php

declare(strict_types=1);

namespace App\Entity;

final class FrenchBulldog extends AnimalAbstract implements AnimalInterface
{
    public function animalDescription(): string
    {
        return 'French Bulldog';
    }

    public function animalPhoto(): string
    {
        return 'images/frenchbulldog.jpg';
    }

    public function loadAnimal()
    {
        return 'Papaia - '. $this->animalDescription() . '<br><img width="500px" src="'.$this->animalPhoto().'">' . '<br><br>';
    }
}