<?php

namespace Lib16\Utils;

use Lib16\Utils\Enums\CSS\{Unit, LengthUnit};

class NumberFormatter
{
	private $maximumFractionDigits;

	public function __construct(int $maximumFractionDigits)
	{
		$this->maximumFractionDigits = $maximumFractionDigits;
	}

	public function format($number, Unit $unit = null)
	{
		if (!is_null($number)) {
			$string = strval(round($number, $this->maximumFractionDigits));
			if ($string == "-0") {
				$string = "0";
			}
			if (!is_null($unit) && ($string != "0" || !$unit instanceof LengthUnit)) {
				$string .= $unit;
			}
			return $string;
		}
		return null;
	}
}