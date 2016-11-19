<?php

namespace Lib16\Utils\Enums;

use MyCLabs\Enum\Enum;

class MimeType extends Enum
{
	public function getFilenameExtension(): string
	{
		return strtolower($this->getKey());
	}
}