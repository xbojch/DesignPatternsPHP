<?php

namespace Beleserv\DesignPatterns\Strategy;

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        return 'Flying with wings!';
    }
}
