<?php

use PHPUnit\Framework\TestCase;

final class StringTest extends TestCase {
  public function testCanBeUsedAsString(): void {
    $this->assertEquals('testString', 'testString');
  }
}