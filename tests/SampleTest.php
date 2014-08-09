<?php

class SampleTest extends PHPUnit_Framework_TestCase
{
	public function testSimpleAddition()
	{
		$startVar = 1;
		$endVar = $startVar + 3;
		$this->assertEquals(4, $endVar);
	}
}