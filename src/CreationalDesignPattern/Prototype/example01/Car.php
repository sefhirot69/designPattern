<?php

declare(strict_types=1);

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\Prototype\example01;

final class Car implements Prototype
{

    private int $numWheel;

    /**
     * @param int $numWheel
     */
    private function __construct(int $numWheel)
    {
        $this->numWheel = $numWheel;
    }

    public static function create(int $numWheel): self
    {
        return new self($numWheel);
    }

    /**
     * @return int
     */
    public function getNumWheel(): int
    {
        return $this->numWheel;
    }


    public function clone(): Prototype
    {
        return new Car($this->getNumWheel());
    }
}