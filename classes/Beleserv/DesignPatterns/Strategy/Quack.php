<?php

namespace Beleserv\DesignPatterns\Strategy;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return 'Quack!';
    }
}
