<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use practicals\new_practical;

class newTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    public function test_Mul(): void
    {
        $this->assertEquals(new_practical::mul(2,3),6);
    }
}
