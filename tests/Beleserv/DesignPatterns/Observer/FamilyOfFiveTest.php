<?php

use Beleserv\DesignPatterns\Observer;

class  FamilyOfFiveTest extends PHPUnit_Framework_TestCase {
    
    private $familyOfFive;
    private $newsTitle;
    private $newsBody;
    
    /**
     * @before
     */
    public function setupFamilyOfFive() {
        $this->familyOfFive = new Observer\FamilyOfFive();
        $this->newsTitle = "News Title";
        $this->newsBody = "News Body";
    }
    
    /**
     * @test
     */
    public function shouldUpdate() {
        $this->familyOfFive->update($this->newsTitle, $this->newsBody);
        $this->assertEquals($this->newsTitle . ' ' . $this->newsBody, $this->familyOfFive->display());
    }
}
