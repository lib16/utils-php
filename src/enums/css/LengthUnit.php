<?php

namespace Lib16\Utils\Enums\CSS;

use MyCLabs\Enum\Enum;

class LengthUnit extends Enum implements Unit
{
	const EM = 'em';
	const EX = 'ex';
	const CH = 'ch';
	const REM = 'rem';
	const VW = 'vw';
	const VH = 'vh';
	const VMIN = 'vmin';
	const VMAX = 'vmax';

	const CM = 'cm';
	const MM = 'mm';
	const Q = 'Q';
	const IN = 'in';
	const PC = 'pc';
	const PT = 'pt';
	const PX = 'px';

	const PERCENT = '%';
	const NONE = '';
}