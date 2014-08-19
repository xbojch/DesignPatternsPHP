<?php

use Beleserv\DesignPatterns\Decorator;

class CheeseCakeTest extends PHPUnit_Framework_TestCase {
    
    private $cheeseCake;
    
    /**
     * @before
     */
    public function setupCheeseCake() {
        $this->cheeseCake = new Decorator\CheeseCake();
    }
    
    /**
     * @test
     */
    public function shouldDefineADescription() {
        $this->assertEquals("Cheese Cake", $this->cheeseCake->getDescription());
    }
    
    /**
     * @test
     */
    public function shouldDefineAPrice() {
        $this->assertEquals(2.15, $this->cheeseCake->cost());
    }
    
    /**
     * @test
     */
    public function shouldEnableMultiDecoration() {
        $this->cheeseCake = new Decorator\ChocoLeafs($this->cheeseCake);
        $this->assertEquals("Cheese Cake, Choco Leafs", $this->cheeseCake->getDescription());
        $this->assertEquals(2.45, $this->cheeseCake->cost());
        
        $this->cheeseCake = new Decorator\WhippedCream($this->cheeseCake);
        $this->assertEquals("Cheese Cake, Choco Leafs, Whipped Cream", $this->cheeseCake->getDescription());
        $this->assertEquals(2.65, $this->cheeseCake->cost());
        
        $this->cheeseCake = new Decorator\Sprinkles($this->cheeseCake);
        $this->assertEquals("Cheese Cake, Choco Leafs, Whipped Cream, Sprinkles", $this->cheeseCake->getDescription());
        $this->assertEquals(2.75, $this->cheeseCake->cost());
    }
    
    /**
     * @test
     */
    public function shouldEnableDoubleDecoration() {
        $this->cheeseCake = new Decorator\Sprinkles($this->cheeseCake);
        $this->cheeseCake = new Decorator\Sprinkles($this->cheeseCake);
        
        $this->assertEquals("Cheese Cake, Sprinkles, Sprinkles", $this->cheeseCake->getDescription());
        $this->assertEquals(2.35, $this->cheeseCake->cost());
    }
}
