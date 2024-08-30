<?php

class Vehicle
{
    public function __construct(private string $problemType) {}

    public function problem(): string
    {
        return $this->problemType;
    }
}

class Car extends Vehicle {}

class Mercedes extends Car {}

class Mechanic
{
    public function fix(Mercedes $car): string
    {
        return 'Mechanic is fixing ' . get_class($car) . ' ' . $car->problem();
    }
}

$mechanic = new Mechanic();
$car = new Car('Gear Box');

echo $mechanic->fix($car) . PHP_EOL;
