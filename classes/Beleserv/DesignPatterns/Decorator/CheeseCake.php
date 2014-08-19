<?php

namespace Beleserv\DesignPatterns\Decorator;

class CheeseCake extends Dessert {
    
    public function __construct() {
        $this->description = "Cheese Cake";
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function cost() {
        return 2.15;
    }
}
