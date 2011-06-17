<?php

use Decorator\Pattern\LowerCase;
use Decorator\Pen;
use PHPUnit\Framework\TestCase;

class LowerCaseTest extends TestCase
{
    private LowerCase $decorator;

    public function setUp() : void
    {
        $this->decorator = new LowerCase(new Pen);
    }

    public function testUpperCased()
    {
        $this->assertEquals(strtolower(PenTest::SOMETHING_TO_WRITE), $this->decorator->write(strtoupper(PenTest::SOMETHING_TO_WRITE)));
    }
}