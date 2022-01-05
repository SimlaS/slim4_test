<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class SamplTest extends TestCase {
    public function testTrueAssertToTrue() 
    {
        $test = 'dupeczka';
        $this->assertEquals('dupczka', $test);
        
    }

}