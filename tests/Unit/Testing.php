<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class BeforeDataProvider extends TestCase
{
    

    public function testAddEqualZero(): void
    {
        $this->assertSame(0, 0 + 0);
    }
    public function testAddEqualTwo(): void
    {
        $this->assertSame(2, 1+1);
    }
    public function testAddEqualThree(): void
    {
        $this->assertSame(3, 1+1);
    }

}
