<?php

declare(strict_types=1);

namespace App\Entity;

abstract class AbstractAnimal implements Animal
{
    abstract protected function animalDescription();

    abstract protected function animalPhoto();

    public function loadAnimal(): string
    {
        return $this->animalDescription() . '<br><img width="500px" src="'.$this->animalPhoto().'">' . '<br><br>';
    }
}