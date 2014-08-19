<?php

use Beleserv\DesignPatterns\Decorator;

class SprinklesTest extends PHPUnit_Framework_TestCase {
    
    private $cheeseCake;
    
    /**
     * @before
     */
    public function setupCheeseCake() {
        $this->cheeseCake = new Decorator\CheeseCake();
        $this->cheeseCake = new Decorator\Sprinkles($this->cheeseCake);
    }
    
    /**
     * @test
     */
    public function shouldDecorateDessertDescription() {
        $this->assertEquals("Cheese Cake, Sprinkles", $this->cheeseCake->getDescription());
    }
    
    /**
     * @test
     */
    public function shouldDecorateDessertPrice() {
        $this->assertEquals(2.25, $this->cheeseCake->cost());
    }
}
