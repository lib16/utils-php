<?php

namespace Lib16\Utils\Enums\Mime;

class VideoType extends MimeType
{
	const MP4 = "video/mp4; codecs=avc1.42E01E,mp4a.40.2";
	const OGV = "video/ogg; codecs=theora,vorbis";
	const WEBM = "video/webm; codecs=vp8,vorbis";
}