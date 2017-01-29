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

	public function formatArray(array $numbers, string $delimiter = null, Unit $unit = null)
	{
		$formatted = [];
		foreach (array_filter($numbers, 'strlen') as $number) {
			$formatted[] = $this->format($number, $unit);
		}
		return is_null($delimiter) ? $formatted : implode($delimiter, $formatted);
	}
}