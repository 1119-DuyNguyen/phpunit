<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExceptionTest extends TestCase
{
    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
    }
}
