<?php

namespace CodeDistortion\TestRepo\Tests\Unit;

use CodeDistortion\TestRepo\Tests\PHPUnitTestCase;

/**
 * @phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
 */
class SomeUnitTest extends PHPUnitTestCase
{
    /**
     * Test something.
     *
     * @test
     *
     * @return void
     */
    public function test_something(): void {
        self::assertTrue(true);
    }
}
