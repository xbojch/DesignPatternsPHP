<?php

use Beleserv\DesignPatterns\Strategy;

class NormalDuckTest extends PHPUnit_Framework_TestCase
{

    private $duck;
    
    /**
     * @before
     */
    public function setupDuck()
    {
        $this->duck = new Strategy\NormalDuck();
    }

    /**
     * @test
     */
    public function shouldFlyWhenRequired()
    {
        $expected = 'Flying with wings!';
        $this->assertEquals($expected, $this->duck->performFly());
    }
    
    /**
     * @test
     */
    public function shouldQuackWhenRequired()
    {
        $expected = 'Quack!';
        $this->assertEquals($expected, $this->duck->performQuack());
    }
}
