<?php
require __DIR__ . '/../vendor/autoload.php';

$pen = new Decorator\Pattern\UpperCase(
          new Decorator\Pattern\Html\Bold(
            new Decorator\Pattern\Html\Italic(
              new Decorator\Pen())));

echo $pen->write("hello"); /* <B><I>HELLO</I></B> */