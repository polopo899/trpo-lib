<?php

use PHPUnit\Framework\TestCase;
use feofanov\MyLog;

class MyLogTest extends TestCase {
    public function testLog() {
        $this->expectOutputString("Polopo polopov");
        MyLog::log("Polopo polopov");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}