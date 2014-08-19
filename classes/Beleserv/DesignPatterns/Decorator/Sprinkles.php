<?php

namespace Beleserv\DesignPatterns\Decorator;

class Sprinkles extends CondimentDecorator {
    
    private $dessert;
    
    public function __construct(Dessert $dessert) {
        $this->dessert = $dessert;
    }
    
    public function getDescription() {
        return $this->dessert->getDescription() . ", Sprinkles";
    }
    
    public function cost() {
        return 0.10 + $this->dessert->cost();
    }
}
