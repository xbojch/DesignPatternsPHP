<?php

namespace Beleserv\DesignPatterns\Observer;

class PublishingHouse implements Subject {
    
    private $registeredObservers;
    private $newsTitle;
    private $newsBody;

    public function __construct() {
        $this->registeredObservers = array();
    }
    
    public function registerObserver(Observer $o) {
        array_push($this->registeredObservers, $o);
    }
    
    public function listObservers() {
        return $this->registeredObservers; 
    }
    
    public function removeObserver(Observer $o) {
        $key = array_search($o, $this->registeredObservers, true);
        array_splice($this->registeredObservers, $key, 1);
    }
    
    public function setNews($newsTitle, $newsBody) {
        $this->newsTitle = $newsTitle;
        $this->newsBody = $newsBody;
        $this->setChanged();
    }
    
    private function setChanged() {
        $this->notifyObservers();
    }
    
    public function notifyObservers() {
        foreach($this->registeredObservers as $observer) {
            $observer->update($this->newsTitle, $this->newsBody);
        }
    }
}
