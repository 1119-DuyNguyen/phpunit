<?php

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider as AttributesDataProvider;
use PHPUnit\Framework\TestCase;

class DataProvider extends TestCase
{
    
    public static function additionProvider(): array
    {
        return [
            [0, 0, 0],
            [1, 1, 2],
            [1, 1, 3],
        ];
    }

    #[AttributesDataProvider('additionProvider')]
    public function testAdd(int $a, int $b, int $expected): void
    {
        $this->assertSame($expected, $a + $b);
    }

}
