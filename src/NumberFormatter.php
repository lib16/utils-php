<?php

namespace Lib16\Utils;

class NumberFormatter
{
	private $maximumFractionDigits;
	
	public function __construct(int $maximumFractionDigits)
	{
		$this->maximumFractionDigits = $maximumFractionDigits;
	}

	public function format($number)
	{
		if (!is_null($number)) {
			$string = strval(round($number, $this->maximumFractionDigits));
			if ($string == "-0") {
				$string = "0";
			}
			return $string;
		}
		return null;
	}
}