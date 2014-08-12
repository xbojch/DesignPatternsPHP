<?php

namespace Beleserv\DesignPatterns\Strategy;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        return 'Squeak!';
    }
}
