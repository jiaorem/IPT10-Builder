<?php

namespace RefactoringGuru\Builder\Conceptual;

//
class HouseWithSwimmingPool
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}


class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $houseWithSwimmingPool;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->houseWithSwimmingPool = new HouseWithSwimmingPool();
    }

    public function buildDoors(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Doors";
    }

    public function buildWindows(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Windows";
    }

    public function buildWalls(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Walls";
    }

    public function buildRoof(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Roof";
    }
    
    public function buildFlooring(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Floor";
    }

    public function buildFoundation(): void
    {
        $this->houseWithSwimmingPool->parts[] = "Foundation";
    }

    public function buildSwimmingPool(): void
    {
        $this->houseWithSwimmingPool->parts[] = "SwimmingPool";
    }

    public function getResult(): HouseWithSwimmingPool
    {
        $result = $this->houseWithSwimmingPool;
        $this->reset();

        return $result;
    }
}
