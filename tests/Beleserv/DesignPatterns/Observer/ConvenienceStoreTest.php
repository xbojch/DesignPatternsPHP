<?php

use Beleserv\DesignPatterns\Observer;

class ConvenienceStoreTest extends PHPUnit_Framework_TestCase {
    
    private $convenienceStore;
    private $newsTitle;
    private $newsBody;
    
    /**
     * @before
     */
    public function setupConvenienceStore() {
        $this->convenienceStore = new Observer\ConvenienceStore();
        $this->newsTitle = "News Title";
        $this->newsBody = "News Body";
    }
    
    /**
     * @test
     */
    public function shouldUpdate() {
        $this->convenienceStore->update($this->newsTitle, $this->newsBody);
        $this->assertEquals($this->newsTitle . ' *** ' . $this->newsBody, $this->convenienceStore->display());
    }
}
