<?php

namespace Sefhirot69\Tests\CreationalDesignPattern\FactoryMethod\example01;

use Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01\SeaLogistics;
use PHPUnit\Framework\TestCase;

class SeaLogisticsTest extends TestCase
{

    /** @test */
    public function itShouldCreatorTransport(): void
    {
        $seaLogistic = new SeaLogistics();
        self::assertSame('Entraga por mar de un contenedor', $seaLogistic->creatorTransport()->deliver());
    }
}
