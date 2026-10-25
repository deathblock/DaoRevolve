<?php
/**
 * Tests for DaoRevolve
 */

use PHPUnit\Framework\TestCase;
use Daorevolve\Daorevolve;

class DaorevolveTest extends TestCase {
    private Daorevolve $instance;

    protected function setUp(): void {
        $this->instance = new Daorevolve(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daorevolve::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
