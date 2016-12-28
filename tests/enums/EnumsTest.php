<?php

namespace Lib16\Utils\Enums\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\Enums\{Unit, AudioType, IconType, ImageType, VideoType, Media};
use PHPUnit\Framework\TestCase;

class EnumsTest extends TestCase
{
	public function provider(): array
	{
		return [
			[Unit::CM(), 'cm'],
			[Unit::EM(), 'em'],
			[Unit::EX(), 'ex'],
			[Unit::IN(), 'in'],
			[Unit::MM(), 'mm'],
			[Unit::NONE(), ''],
			[Unit::PERCENT(), '%'],
			[Unit::PX(), 'px'],
			[Unit::REM(), 'rem'],
			[Unit::VH(), 'vh'],
			[Unit::VW(), 'vw'],
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
			[(new ImageType(ImageType::PNG))->getFilenameExtension(), 'png'],
			[(ImageType::PNG())->getFilenameExtension(), 'png'],
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
