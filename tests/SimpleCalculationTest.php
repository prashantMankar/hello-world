<?php

namespace Prashantm\HelloWorld\Tests;

use PHPUnit\Framework\TestCase;
use Prashantm\HelloWorld\SimpleCalculation;

class SimpleCalculationTest extends TestCase
{
    public function testInvalidArgument()
    {
        $start = 'string';
        $end = 2;
        $this->expectException(\InvalidArgumentException::class);
        $cal = new SimpleCalculation($start, $end);
    }

    public function testAddition()
    {
        $start = 10;
        $end = 10;
        $cal = new SimpleCalculation($start, $end);

        $this->assertEquals(20, $cal->addition());
    }
}
