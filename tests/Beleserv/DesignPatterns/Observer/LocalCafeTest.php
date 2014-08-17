<?php

use Beleserv\DesignPatterns\Observer;

class LocalCafeTest extends PHPUnit_Framework_TestCase {
    
    private $localCafe;
    private $newsTitle;
    private $newsBody;
    
    /**
     * @before
     */
    public function setupLocalCafe() {
        $this->localCafe = new Observer\LocalCafe();
        $this->newsTitle = "News Title";
        $this->newsBody = "News Body";
    }
    
    /**
     * @test
     */
    public function shouldUpdate() {
        $this->localCafe->update($this->newsTitle, $this->newsBody);
        $this->assertEquals($this->newsTitle . ' - '  . $this->newsBody, $this->localCafe->display());
    }
}
