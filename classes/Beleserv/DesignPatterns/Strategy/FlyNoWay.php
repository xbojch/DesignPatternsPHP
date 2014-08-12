<?php

namespace Beleserv\DesignPatterns\Strategy;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return 'Fly, no way!';
    }
}
