<?php

namespace Beleserv\DesignPatterns\Observer;

class ConvenienceStore implements NewsSubscriber, Observer {
    
    private $newsTitle;
    private $newsBody;
    
    public function update($newsTitle, $newsBody) {
        $this->newsTitle = $newsTitle;
        $this->newsBody = $newsBody;
    }
    
    public function display() {
        if(empty($this->newsTitle) === false && empty($this->newsBody) === false ) {
            return $this->newsTitle . ' *** ' . $this->newsBody;
        } else {
            throw(new \Exception('No news to show!'));
        }
    }
}
