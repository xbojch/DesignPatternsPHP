<?php

namespace Beleserv\DesignPatterns\Decorator;

abstract class Dessert {
    protected $description = "Unknown Dessert";
    
    public abstract function getDescription();   
    public abstract function cost();
}
