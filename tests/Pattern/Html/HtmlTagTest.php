<?php

use Decorator\Pattern\Html\Bold;
use Decorator\Pen;
use PHPUnit\Framework\TestCase;

class HtmlTagTest extends TestCase
{
    private Bold $decorator;

    public function setUp() : void
    {
        $this->decorator = new Bold(new Pen);
    }

    public function testHtmlTag()
    {
        $this->assertEquals('<strong>'.PenTest::SOMETHING_TO_WRITE.'</strong>', $this->decorator->write(PenTest::SOMETHING_TO_WRITE));
    }
}