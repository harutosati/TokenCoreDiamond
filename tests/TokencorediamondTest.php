<?php
/**
 * Tests for TokenCoreDiamond
 */

use PHPUnit\Framework\TestCase;
use Tokencorediamond\Tokencorediamond;

class TokencorediamondTest extends TestCase {
    private Tokencorediamond $instance;

    protected function setUp(): void {
        $this->instance = new Tokencorediamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokencorediamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
