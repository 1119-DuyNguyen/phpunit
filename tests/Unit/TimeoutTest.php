<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TimeoutTest extends TestCase
{
    public function testTimeoutSuccess(): void
    {
        $tStart = microtime(true);
        // Đặt các câu lệnh trong đây
        $tDiff = microtime(true) - $tStart;
        $this->assertLessThan(0.01, $tDiff, "Test execution time must be less than 0.01 seconds.");
    }
    public function testTimeoutFail(): void
    {
        $tStart = microtime(true);
        sleep(1);
        // Đặt các câu lệnh trong đây
        $tDiff = microtime(true) - $tStart;
        $this->assertLessThan(0.01, $tDiff, "Test execution time must be less than 0.01 seconds.");
    }
}
