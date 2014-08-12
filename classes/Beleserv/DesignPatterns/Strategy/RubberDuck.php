<?php

namespace Beleserv\DesignPatterns\Strategy;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->setFlyBehavior(new FlyNoWay());
        $this->setQuackBehavior(new Squeak());
    }
}
