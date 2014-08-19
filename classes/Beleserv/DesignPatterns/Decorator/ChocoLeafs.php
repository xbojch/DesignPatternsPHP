<?php

namespace Beleserv\DesignPatterns\Decorator;

class ChocoLeafs extends CondimentDecorator {
    
    private $dessert;

    public function __construct(Dessert $dessert) {
        $this->dessert = $dessert;
    }
    
    public function getDescription() {
        return $this->dessert->getDescription() . ", Choco Leafs";
    }
    
    public function cost() {
        return 0.30 + $this->dessert->cost();
    }
}
