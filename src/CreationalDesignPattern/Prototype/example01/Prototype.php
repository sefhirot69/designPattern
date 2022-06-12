<?php

namespace Sefhirot69\DesignPattern\CreationalDesignPattern\Prototype\example01;

interface Prototype
{
    public function clone() : Prototype;
}