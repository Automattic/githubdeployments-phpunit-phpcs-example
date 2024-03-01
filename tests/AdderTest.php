<?php

use PHPUnit\Framework\TestCase;

require_once "./adder.php";
final class AdderTest extends TestCase
{
	public function test_add()
	{
		$result = \Adder\add(1, 2 );

		$this->assertSame(2, $result);
	}
}
