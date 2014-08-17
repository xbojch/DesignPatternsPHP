<?php

namespace Beleserv\DesignPatterns\Observer;

interface Subject {
    public function registerObserver(Observer $o);
    public function removeObserver(Observer $o);
    public function listObservers();
    public function notifyObservers();
}
