<?php
/**
 * Tests for nodeSurge
 */

use PHPUnit\Framework\TestCase;
use Nodesurge\Nodesurge;

class NodesurgeTest extends TestCase {
    private Nodesurge $instance;

    protected function setUp(): void {
        $this->instance = new Nodesurge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodesurge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
