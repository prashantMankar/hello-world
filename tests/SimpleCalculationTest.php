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
        $this->expectExceptionMessage('Invalid Integer');
        $cal = new SimpleCalculation($start, $end);
    }

    public function testAddition()
    {
        $start = 10;
        $end = 10;
        $cal = new SimpleCalculation($start, $end);
        $response = $cal->addition();
        $this->assertEquals(20, $response);
        $this->assertSame(20, $response);
    }

    private function prepareInput()
    {
        return 10;
    }
}
