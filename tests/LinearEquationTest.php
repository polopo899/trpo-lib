<?php

use PHPUnit\Framework\TestCase;
use feofanov\LinearEquation;
use feofanov\FeofanovException;

class LinearEquationTest extends TestCase {
    public function testLinearEquation() {
        $test = new LinearEquation();

        $this->assertEquals([-3], $test->LinearEquation(5, 15));
        $this->assertEquals([17], $test->LinearEquation(10, -170));

        // a = 0
        $this->expectException(FeofanovException::class);
        $test->LinearEquation(0, 2);
    }
}