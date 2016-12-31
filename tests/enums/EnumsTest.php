<?php

namespace Lib16\Utils\Enums\Tests;

//require_once 'vendor/autoload.php';
require_once 'vendor/myclabs/php-enum/src/Enum.php';
require_once 'src/enums/css/Unit.php';
require_once 'src/enums/css/LengthUnit.php';
require_once 'src/enums/css/TimeUnit.php';
require_once 'src/enums/mime/MimeType.php';
require_once 'src/enums/mime/AudioType.php';
require_once 'src/enums/mime/IconType.php';
require_once 'src/enums/mime/ImageType.php';
require_once 'src/enums/mime/VideoType.php';


use Lib16\Utils\Enums\Media;
use Lib16\Utils\Enums\CSS\LengthUnit;
use Lib16\Utils\Enums\Mime\{AudioType, IconType, ImageType, VideoType};
use PHPUnit\Framework\TestCase;
use Lib16\Utils\Enums\CSS\TimeUnit;
use Lib16\Utils\Enums\CSS\AngleUnit;
use Lib16\Utils\Enums\CSS\FrequencyUnit;
use Lib16\Utils\Enums\Mime\StyleType;

class EnumsTest extends TestCase
{
	public function provider(): array
	{
		return [
			[LengthUnit::CM(), 'cm'],
			[LengthUnit::EM(), 'em'],
			[LengthUnit::EX(), 'ex'],
			[LengthUnit::IN(), 'in'],
			[LengthUnit::MM(), 'mm'],
			[LengthUnit::NONE(), ''],
			[LengthUnit::PERCENT(), '%'],
			[LengthUnit::PX(), 'px'],
			[LengthUnit::REM(), 'rem'],
			[LengthUnit::VH(), 'vh'],
			[LengthUnit::VW(), 'vw'],
			[AngleUnit::DEG(), 'deg'],
			[AngleUnit::GRAD(), 'grad'],
			[AngleUnit::RAD(), 'rad'],
			[AngleUnit::TURN(), 'turn'],
			[TimeUnit::MS(), 'ms'],
			[TimeUnit::S(), 's'],
			[FrequencyUnit::HZ(), 'Hz'],
			[FrequencyUnit::KHZ(), 'kHz'],
			[ImageType::GIF(), 'image/gif'],
			[ImageType::PNG(), 'image/png'],
			[ImageType::JPG(), 'image/jpeg'],
			[ImageType::SVG(), 'image/svg+xml'],
			[IconType::ICO(), 'image/vnd.microsoft.icon'],
			[IconType::GIF(), 'image/gif'],
			[IconType::PNG(), 'image/png'],
			[IconType::SVG(), 'image/svg+xml'],
			[AudioType::AAC(), 'audio/mp4; codecs=mp4a.40.2'],
			[AudioType::MP3(), 'audio/mpeg'],
			[AudioType::OGG(), 'audio/ogg; codecs=vorbis'],
			[AudioType::WAV(), 'audio/wav'],
			[VideoType::MP4(), 'video/mp4; codecs=avc1.42E01E,mp4a.40.2'],
			[VideoType::OGV(), 'video/ogg; codecs=theora,vorbis'],
			[VideoType::WEBM(), 'video/webm; codecs=vp8,vorbis'],
			[StyleType::CSS(), 'text/css'],
			[StyleType::XSL(), 'text/xsl'],
			[(new ImageType(ImageType::JPG))->getFilenameExtension(), 'jpg'],
			[(ImageType::JPG())->getFilenameExtension(), 'jpg'],
			[Media::ALL(), 'all'],
			[Media::AURAL(), 'aural'],
			[Media::BRAILLE(), 'braille'],
			[Media::HANDHELD(), 'handheld'],
			[Media::PROJECTION(), 'projection'],
			[Media::PRINT(), 'print'],
			[Media::SCREEN(), 'screen'],
			[Media::TTY(), 'tty'],
			[Media::TV(), 'tv'],
		];
	}

	/**
	 * @dataProvider provider
	 */
	public function test(string $actual, string $expected)
	{
		$this->assertEquals($expected, $actual);
	}
}
