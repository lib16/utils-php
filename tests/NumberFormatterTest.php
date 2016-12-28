<?php

namespace Lib16\Utils\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\NumberFormatter;
use Lib16\Utils\Enums\Unit;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{
	public function provider(): array
	{
		return [
			[2, null, "2"],
			[2.34567, null, "2.3457"],
			[null, null, null],
			[0, null, "0"],
			[-0.00000001, null, "0"],
			[2, Unit::EM(), "2em"],
			[2.34567, Unit::EM(), "2.3457em"],
			[null, Unit::EM(), null],
			[0, Unit::EM(), "0"],
			[-0.00000001, null, "0"]
		];
	}

	/**
	 * @dataProvider provider
	 */
	public function test($value, $unit, $expected)
	{
		$numberFormatter = new NumberFormatter(4);
		$this->assertEquals($expected, $numberFormatter->format($value, $unit));
	}
}