<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class TcFailTest extends TestCase
{
    public function test_fail(): void
    {
        $this->assertTrue(false);
    }
}
