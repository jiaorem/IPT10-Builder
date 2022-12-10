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

    echo "Build A House With Garden";
    $director->makeHouseWithGarden();
    $builder->getResult()->listParts();

    echo "Build A House With Garage";
    $director->makeHouseWithGarage();
    $builder->getResult()->listParts();

    echo "Build A House With SwimmingPool";
    $director->makeHouseWithSwimmingPool();
    $builder->getResult()->listParts();

    echo "Build A House With FancyStatues";
    $director->makeHouseWithFancyStatues();
    $builder->getResult()->listParts();

    // Remember, the Builder pattern can be used without a Director class.
    echo "Custom build:\n";
    $builder->buildWindows();
    $builder->buildWalls();
    $builder->buildRoof();
    $builder->buildFlooring();
    $builder->buildFoundation();
    $builder->getResult()->listParts();
}

$director = new Director();
clientCode($director);