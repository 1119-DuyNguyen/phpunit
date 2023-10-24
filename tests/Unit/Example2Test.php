<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Example2Test extends TestCase
{
    protected $value1 = 0, $value2 = 0;
    protected function setUp(): void
    {
        $this->value1 = 3;
        $this->value2 = 3;
    }

    /**
     * A basic test example.
     */
    public function test_that_result_is_six(): void
    {
        $result = $this->value1 + $this->value2;
        $this->assertEquals(6, $result);
    }
}
