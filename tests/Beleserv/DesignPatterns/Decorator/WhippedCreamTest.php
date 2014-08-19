<?php

use Beleserv\DesignPatterns\Decorator;

class WhippedCreamTest extends PHPUnit_Framework_TestCase {
    
    private $vanillaIceCream;
    
    /**
     * @before
     */
    public function setupVanillaIceCream() {
        $this->vanillaIceCream = new Decorator\VanillaIceCream();
        $this->vanillaIceCream = new Decorator\WhippedCream($this->vanillaIceCream);
    }
    
    /**
     * @test
     */
    public function shouldDecorateDessertDescription() {
        $this->assertEquals("Vanilla Ice Cream, Whipped Cream", $this->vanillaIceCream->getDescription());
    }
    
    /**
     * @test
     */
    public function shouldDecorateDessertPrice() {
        $this->assertEquals(2.10, $this->vanillaIceCream->cost());
    }
}
