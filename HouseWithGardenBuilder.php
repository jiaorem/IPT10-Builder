<?php

namespace RefactoringGuru\Builder\Conceptual;

//
class HouseWithGarden
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

//
class HouseWithGardenBuilder implements HouseBuilder
{
    private $houseWithGarden;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->houseWithGarden = new HouseWithGarden();
    } 

    public function buildDoors(): void
    {
        $this->houseWithGarden->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithGarden->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithGarden->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithGarden->parts[] = "Roof";
    }
    
    public function buildFlooring(): void
    {
        $this->houseWithGarden->parts[] = "Floor";
    }

    public function buildFoundation(): void
    {
        $this->houseWithGarden->parts[] = "Foundation";
    }

    public function buildGarden(): void
    {
        $this->houseWithGarden->parts[] = "Garden";
    }

    public function getResult(): HouseWithGarden
    {
        $result = $this->houseWithGarden;
        $this->reset();

        return $result;
    }
}