<?php

namespace Beleserv\DesignPatterns\Strategy;

class NormalDuck extends Duck {
    
    public function __construct()
    {
        $this->setFlyBehavior(new FlyWithWings());
        $this->setQuackBehavior(new Quack());
    }
}
