<?php

use Decorator\Pattern\UpperCase;
use Decorator\Pen;
use PHPUnit\Framework\TestCase;

class UpperCaseTest extends TestCase
{
    private UpperCase $decorator;

    public function setUp() : void
    {
        $this->decorator = new UpperCase(new Pen);
    }

    public function testUpperCased()
    {
        $this->assertEquals(strtoupper(PenTest::SOMETHING_TO_WRITE), $this->decorator->write(PenTest::SOMETHING_TO_WRITE));
    }
}