<?php

namespace Beleserv\DesignPatterns\Decorator;

class VanillaIceCream extends Dessert {
    
    public function __construct() {
        $this->description = "Vanilla Ice Cream";
    }
    
    public function getDescription() {
        return $this->description;
    }
    
    public function cost() {
        return 1.90;
    }
}
