<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01;

final class Truck implements Transport
{

    public function deliver(): string
    {
        return 'Entrega por tierra de una caja';
    }
}