<?php

declare(strict_types=1);

namespace App\Entity;

class AnimalAbstract
{
    public function loadAnimal()
    {
        return $this->animalDescription() . '<br><img width="500px" src="'.$this->animalPhoto().'">' . '<br><br>';
    }
}