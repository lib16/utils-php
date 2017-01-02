<?php

namespace Lib16\Utils\Enums\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\Enums\CSS\{LengthUnit, TimeUnit, AngleUnit, FrequencyUnit, Media};
use Lib16\Utils\Enums\Mime\{AudioType, IconType, ImageType, VideoType, StyleType};
use PHPUnit\Framework\TestCase;

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
			[Media::BRAILLE(), 'braille'],
			[Media::EMBOSSED(), 'embossed'],
			[Media::HANDHELD(), 'handheld'],
			[Media::PRINT(), 'print'],
			[Media::PROJECTION(), 'projection'],
			[Media::SCREEN(), 'screen'],
			[Media::SPEECH(), 'speech'],
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
