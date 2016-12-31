<?php

namespace Lib16\Utils\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\NumberFormatter;
use Lib16\Utils\Enums\CSS\{LengthUnit, TimeUnit};
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
			[2, LengthUnit::EM(), "2em"],
			[2.34567, LengthUnit::EM(), "2.3457em"],
			[null, LengthUnit::EM(), null],
			[0, LengthUnit::EM(), "0"],
			[0, TimeUnit::MS(), "0ms"],
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