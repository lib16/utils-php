<?php

namespace Lib16\Utils\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
	public function provider(): array
	{
		return [
			[2, "2"],
			[2.34567, "2.3457"],
			[null, null],
			[-0.00000001, "0"]
		];
	}

	/**
	 * @dataProvider provider
	 */
	public function test($value, $expected)
	{
		$numberFormatter = new NumberFormatter(4);
		$this->assertEquals($numberFormatter->format($value), $expected);
	}
}
