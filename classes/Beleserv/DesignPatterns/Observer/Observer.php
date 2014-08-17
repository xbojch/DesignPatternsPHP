<?php

namespace Beleserv\DesignPatterns\Observer;

interface Observer {
    public function update($newsTitle, $newsBody);
}
