<?php

use PHPUnit\Framework\TestCase;
use feofanov\QuadraticEquation;
use feofanov\FeofanovException;

class QuadraticEquationTest extends TestCase {
    public function testSolve() {
        $test = new QuadraticEquation();

        $this->assertEquals([3, 7], $test->solve(1, -10, 21));
        $this->assertEquals([-3, 1], $test->solve(1, 2, -3));

        // a = 0
        $this->assertEquals([3], $test->solve(0, 5, -15));

        // D = 0
        $this->assertEquals([-3], $test->solve(1, 6, 9));

        // D < 0
        $this->expectException(FeofanovException::class);
        $test->solve(1, 2, 17);
    }
}