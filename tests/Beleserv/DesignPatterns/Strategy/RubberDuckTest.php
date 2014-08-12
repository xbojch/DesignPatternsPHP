<?php

use Beleserv\DesignPatterns\Strategy;

class RubberDuckTest extends PHPUnit_Framework_TestCase
{

    private $duck;
    
    /**
     * @before
     */
    public function setupDuck()
    {
        $this->duck = new Strategy\RubberDuck();
    }

    /**
     * @test
     */
    public function shouldNotFlyWhenRequired()
    {
        $expected = 'Fly, no way!';
        $this->assertEquals($expected, $this->duck->performFly());
    }
    
    /**
     * @test
     */
    public function shouldSqueakWhenRequired()
    {
        $expected = 'Squeak!';
        $this->assertEquals($expected, $this->duck->performQuack());
    }
    
    /**
     * @test
     */
    public function shouldFlyWhenGivenWings()
    {
        $expected = 'Flying with wings!';
        $this->duck->setFlyBehavior(new Strategy\FlyWithWings());
        $this->assertEquals($expected, $this->duck->performFly());
    }
    
    /**
     * @test
     */
    public function shouldQuackWhenGivenLife()
    {
        $expected = 'Quack!';
        $this->duck->setQuackBehavior(new Strategy\Quack());
        $this->assertEquals($expected, $this->duck->performQuack());
    }
}
