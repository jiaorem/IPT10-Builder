<?php

namespace RefactoringGuru\Builder\Conceptual;

//
class HouseWithGarage
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

//
class HouseWithGarageBuilder implements HouseBuilder
{
    private $houseWithGarage;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->houseWithGarage = new HouseWithGarage();
    }

    public function buildDoors(): void
    {
        $this->houseWithGarage->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithGarage->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithGarage->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithGarage->parts[] = "Roof";
    }
    
    public function buildFlooring(): void
    {
        $this->houseWithGarage->parts[] = "Floor";
    }

    public function buildFoundation(): void
    {
        $this->houseWithGarage->parts[] = "Foundation";
    }

    public function buildGarage(): void
    {
        $this->houseWithGarage->parts[] = "Garage";
    }

    public function getResult(): HouseWithGarage
    {
        $result = $this->houseWithGarage;
        $this->reset();

        return $result;
    }
}

//