<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\FactoryMethod\example01;

abstract class Logistics
{
    abstract public function creatorTransport(): Transport;
}