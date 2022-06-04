<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01;

final class RoadLogistics extends Logistics
{

    public function creatorTransport(): Transport
    {
        return new Truck();
    }
}