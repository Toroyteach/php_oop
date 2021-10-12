<?php

class ExampleAssertionsTest extends \PHPUnit\Framework\TestCase
{

    public function testThatStringsMatch()
    {
        $string1 = 'this is a string';
        $string2 = 'this is a string';

        $this->assertSame($string1, $string2);
    }

}

?>