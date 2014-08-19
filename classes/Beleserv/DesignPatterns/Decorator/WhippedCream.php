<?php

namespace Beleserv\DesignPatterns\Decorator;

class WhippedCream extends CondimentDecorator {
    
    private $dessert;
    
    public function __construct(Dessert $dessert) {
        $this->dessert = $dessert;
    }
    
    public function getDescription() {
        return $this->dessert->getDescription() . ", Whipped Cream";
    }
    
    public function cost() {
        return 0.20 + $this->dessert->cost();
    }
}
