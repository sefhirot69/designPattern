<?php

namespace Sefhirot69\Tests\CreationalDesignPattern\FactoryMethod\example01;

use Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01\RoadLogistics;
use PHPUnit\Framework\TestCase;

class RoadLogisticsTest extends TestCase
{
    /** @test */
    public function itShouldCreateRoadLogistic(): void
    {
        $roadLogistic = new RoadLogistics();
        self::assertSame('Entrega por tierra de una caja',$roadLogistic->creatorTransport()->deliver());
    }


}
