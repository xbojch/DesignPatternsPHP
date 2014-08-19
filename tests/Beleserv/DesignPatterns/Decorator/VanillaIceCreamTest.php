<?php

use Beleserv\DesignPatterns\Decorator;

class VanillaIceCreamTest extends PHPUnit_Framework_TestCase {
    
    private $vanillaIceCream;
    
    /**
     * @before
     */
    public function setupVanillaIceCream() {
        $this->vanillaIceCream = new Decorator\VanillaIceCream(); 
    }
    
    /**
     * @test
     */
    public function shouldDefineADescription() {
        $this->assertEquals("Vanilla Ice Cream", $this->vanillaIceCream->getDescription());
    }
    
    /**
     * @test
     */
    public function shouldDefineAPrice() {
        $this->assertEquals(1.90, $this->vanillaIceCream->cost());
    }
    
    /**
     * @test
     */
    public function shouldEnableMultiDecoration() {
        $this->vanillaIceCream = new Decorator\WhippedCream($this->vanillaIceCream);
        $this->assertEquals("Vanilla Ice Cream, Whipped Cream", $this->vanillaIceCream->getDescription());
        $this->assertEquals(2.10, $this->vanillaIceCream->cost());
        
        $this->vanillaIceCream = new Decorator\Sprinkles($this->vanillaIceCream);
        $this->assertEquals("Vanilla Ice Cream, Whipped Cream, Sprinkles", $this->vanillaIceCream->getDescription());
        $this->assertEquals(2.20, $this->vanillaIceCream->cost());
        
        $this->vanillaIceCream = new Decorator\ChocoLeafs($this->vanillaIceCream);
        $this->assertEquals("Vanilla Ice Cream, Whipped Cream, Sprinkles, Choco Leafs", $this->vanillaIceCream->getDescription());
        $this->assertEquals(2.50, $this->vanillaIceCream->cost());
    }
    
    /**
     * @test
     */
    public function shouldEnableDoubleDecoration() {
        $this->vanillaIceCream = new Decorator\ChocoLeafs($this->vanillaIceCream);
        $this->vanillaIceCream = new Decorator\ChocoLeafs($this->vanillaIceCream);
        
        $this->assertEquals("Vanilla Ice Cream, Choco Leafs, Choco Leafs", $this->vanillaIceCream->getDescription());
        $this->assertEquals(2.50, $this->vanillaIceCream->cost());
    }
}
