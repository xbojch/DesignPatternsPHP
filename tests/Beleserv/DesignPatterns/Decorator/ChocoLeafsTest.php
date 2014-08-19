<?php

use Beleserv\DesignPatterns\Decorator;

class ChocoLeafsTest extends PHPUnit_Framework_TestCase {
    
    private $vanillaIceCream;
    
    /**
     * @before
     */
    public function setupVanillaIceCream() {
        $this->vanillaIceCream = new Decorator\VanillaIceCream();
        $this->vanillaIceCream = new Decorator\ChocoLeafs($this->vanillaIceCream);
    }

    /**
     * @test
     */
    public function shouldDecorateDessertDescription() {
        $this->assertEquals("Vanilla Ice Cream, Choco Leafs", $this->vanillaIceCream->getDescription());
    }
    
    /**
     * @test
     */
    public function shouldDecorateDessertPrice() {
        $this->assertEquals(2.20, $this->vanillaIceCream->cost());
    }
}
