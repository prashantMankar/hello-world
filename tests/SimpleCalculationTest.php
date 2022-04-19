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
}
