<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

class PresencialBuilder implements BuilderDisciplina
{
    /**
     * @var Parts\Truck
     */
    private $presencial;

    public function addDoors()
    {
        $this->presencial->setPart('rightDoor', new Parts\Door());
        $this->presencial->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->presencial->setPart('truckEngine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->presencial->setPart('wheel1', new Parts\Wheel());
        $this->presencial->setPart('wheel2', new Parts\Wheel());
        $this->presencial->setPart('wheel3', new Parts\Wheel());
        $this->presencial->setPart('wheel4', new Parts\Wheel());
        $this->presencial->setPart('wheel5', new Parts\Wheel());
        $this->presencial->setPart('wheel6', new Parts\Wheel());
    }

    public function criarDisciplina()
    {
        $this->presencial = new Parts\Disciplina();
    }

    public function getVehicle(): Disciplina
    {
        return $this->truck;
    }
}
