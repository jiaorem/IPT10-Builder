<?php

namespace RefactoringGuru\Builder\Conceptual;

abstract class House{
    private $door;
    private $window;
    private $wall;
    private $roof;
    private $floor;
    private $foundation;
}
//
interface HouseBuilder
{
    public function buildDoors(): void;

    public function buildWindows(): void;

    public function buildWalls(): void;

    public function buildRoof(): void;

    public function buildFlooring(): void;

    public function buildFoundation(): void;

    public function getResult(): void;
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
class HouseWithGarage
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

//
class HouseWithSwimmingPool
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

//
class HouseWithFancyStatues
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

/**
 * The Director is only responsible for executing the building steps in a
 * particular sequence. It is helpful when producing products according to a
 * specific order or configuration. Strictly speaking, the Director class is
 * optional, since the client can control builders directly.
 */
class Director
{
    /**
     * @var Builder
     */
    private $builder;
    private $type;

    /**
     * The Director works with any builder instance that the client code passes
     * to it. This way, the client code may alter the final type of the newly
     * assembled product.
     */
    public function setHouseBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * The Director can construct several product variations using the same
     * building steps.
     */
    public function makeHouse($type)
    {
        return $this->builder->type;
    }

    public function makeHouseWithGarden()
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarden();
        $this->builder->getResult();
    }

    public function makeHouseWithGarage()
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarage();
        $this->builder->getResult();
    }

    public function makeHouseWithSwimmingPool()
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildSwimmingPool();
        $this->builder->getResult();
    }

    public function makeHouseWithFancyStatues()
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildFancyStatues();
        $this->builder->getResult();
    }
}

function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    // Remember, the Builder pattern can be used without a Director class.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);