<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01;

final class SeaLogistics extends Logistics
{

    public function creatorTransport(): Transport
    {
        return new Ship();
    }
}