<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01;

final class Ship implements Transport
{

    public function deliver(): string
    {
        return 'Entraga por mar de un contenedor';
    }
}