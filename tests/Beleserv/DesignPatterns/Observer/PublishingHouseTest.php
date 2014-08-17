<?php

use Beleserv\DesignPatterns\Observer;

class PublishingHouseTest extends PHPUnit_Framework_TestCase
{

    private $publishingHouse;
    private $newsTitle;
    private $newsBody;

    /**
     * @before
     */
    public function setupPublishingHouse()
    {
        $this->publishingHouse = new Observer\PublishingHouse();
        $this->newsTitle = "News Title";
        $this->newsBody = "News Body";
    }
    
    /**
     * @test
     */
    public function shouldRegisterObserver() {
        $familyOfFive = new Observer\FamilyOfFive();
        $this->publishingHouse->registerObserver($familyOfFive);
        $this->assertEquals(1,count($this->publishingHouse->listObservers()));
    }
    
    /**
     * @test
     */
    public function shouldRemoveObserver() {
        $familyOfFive = new Observer\FamilyOfFive();
        $this->publishingHouse->registerObserver($familyOfFive);
        $this->assertEquals(1,count($this->publishingHouse->listObservers()));
        
        $this->publishingHouse->removeObserver($familyOfFive);
        $this->assertEquals(0,count($this->publishingHouse->listObservers()));
    }
    
    /**
     * @test
     */
    public function shouldNotifyObservers() {
        $familyOfFive = new Observer\FamilyOfFive();
        $localCafe = new Observer\LocalCafe();
        $convenienceStore = new Observer\ConvenienceStore();
        $this->publishingHouse->registerObserver($familyOfFive);
        $this->publishingHouse->registerObserver($localCafe);
        $this->publishingHouse->registerObserver($convenienceStore);
        $this->publishingHouse->setNews($this->newsTitle, $this->newsBody);

        $this->assertEquals($this->newsTitle . ' ' . $this->newsBody, $familyOfFive->display());
        $this->assertEquals($this->newsTitle . ' - ' . $this->newsBody, $localCafe->display());
        $this->assertEquals($this->newsTitle . ' *** ' . $this->newsBody, $convenienceStore->display());
    }
}
