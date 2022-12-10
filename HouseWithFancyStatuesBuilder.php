<?php

namespace RefactoringGuru\Builder\Conceptual;

//
class HouseWithFancyStatues
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

//
class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $houseWithFancyStatues;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->houseWithFancyStatues = new HouseWithFancyStatues();
    }

    public function buildDoors(): void
    {
        $this->houseWithFancyStatues->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithFancyStatues->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithFancyStatues->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithFancyStatues->parts[] = "Roof";
    }
    
    public function buildFlooring(): void
    {
        $this->houseWithFancyStatues->parts[] = "Floor";
    }

    public function buildFoundation(): void
    {
        $this->houseWithFancyStatues->parts[] = "Foundation";
    }

    public function buildFancyStatues(): void
    {
        $this->houseWithFancyStatues->parts[] = "FancyStatues";
    }

    public function getResult(): HouseWithFancyStatues
    {
        $result = $this->houseWithFancyStatues;
        $this->reset();

        return $result;
    }
}
