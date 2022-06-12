<?php

namespace Sefhirot69\Tests\CreationalDesignPattern\Prototype\example01;

use Sefhirot69\DesignPattern\CreationalDesignPattern\Prototype\example01\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /** @test */
    public function itShouldCloneCar(): void
    {
        $car = Car::create(4);

        $carClone = $car->clone();

        self::assertEquals($car, $carClone);
        self::assertSame($car->getNumWheel(), $carClone->getNumWheel());
    }

}
