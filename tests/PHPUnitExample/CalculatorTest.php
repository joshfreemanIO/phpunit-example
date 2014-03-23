<?php

class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $calculator = new PHPUnitExample\Calculator;

        $result = $calculator->add(3, 4);

        $this->assertEquals(7, $result);
    }
}
