<?php

namespace Beleserv\DesignPatterns\Strategy;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;
    
    public function performFly()
    {
        return $this->flyBehavior->fly();
    }
    
    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }
    
    public function setFlyBehavior(FlyBehavior $fb)
    {
        $this->flyBehavior = $fb;
    }
    
    public function setQuackBehavior(QuackBehavior $qb)
    {
        $this->quackBehavior = $qb;
    }
}
