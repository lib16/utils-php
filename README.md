#`lib16/utils-php`

Some utility classes for lib16.

## Installation with Composer

Add the following to your project's `composer.json` file:
```json
"require": {
    "lib16/utils": "~1.0"
}
```

Run `composer update`

Include Composer's `autoload.php`:
```php
require_once 'vendor/autoload.php';
```

## Enums

### CSS Units
```php
<?php
require_once './vendor/autoload.php';

use Lib16\Utils\Enums\CSS\{LengthUnit, AngleUnit, TimeUnit, FrequencyUnit};

print 1 . LengthUnit::EM() . ' ';
print 2 . LengthUnit::EX() . ' ';
print 2 . LengthUnit::CH() . ' ';
print 6 . LengthUnit::REM() . "\n";

print 50 . LengthUnit::VW() . ' ';
print 50 . LengthUnit::VH() . ' ';
print 50 . LengthUnit::VMIN() . ' ';
print 50 . LengthUnit::VMAX() . "\n";

print 2.54 . LengthUnit::CM() . ' ';
print 25.4 . LengthUnit::MM() . ' ';
print 101.6 . LengthUnit::Q() . ' ';
print 1 . LengthUnit::IN() . ' ';
print 6 . LengthUnit::PC() . ' ';
print 72 . LengthUnit::PT() . ' ';
print 96 . LengthUnit::PX() . "\n";

print 150 . LengthUnit::PERCENT() . ' ';
print 1.5 . LengthUnit::NONE() . "\n";

print 90 . AngleUnit::DEG() . ' ';
print 100 . AngleUnit::GRAD() . ' ';
print 1.57 . AngleUnit::RAD() . ' ';
print 0.25 . AngleUnit::TURN() . "\n";

print 0.5 . TimeUnit::S() . ' ';
print 500 . TimeUnit::MS() . "\n";

print 1 . FrequencyUnit::KHZ() . ' ';
print 1000 . FrequencyUnit::HZ();
```

the generated output:

```html
1em 2ex 2ch 6rem
50vw 50vh 50vmin 50vmax
2.54cm 25.4mm 101.6Q 1in 6pc 72pt 96px
150% 1.5
90deg 100grad 1.57rad 0.25turn
0.5s 500ms
1kHz 1000Hz
```


### CSS Media Types
```php
<?php
require_once './vendor/autoload.php';

use Lib16\Utils\Enums\CSS\Media;

print Media::ALL() . ' ';
print Media::BRAILLE() . ' ';
print Media::EMBOSSED() . ' ';
print Media::HANDHELD() . ' ';
print Media::PRINT() . ' ';
print Media::PROJECTION() . ' ';
print Media::SCREEN() . ' ';
print Media::SPEECH() . ' ';
print Media::TTY() . ' ';
print Media::TV();

```

the generated output:

```html
all braille embossed handheld print projection screen speech tty tv
```


### MIME Types
```php
<?php
require_once './vendor/autoload.php';

use Lib16\Utils\Enums\Mime\{ImageType, IconType, VideoType, AudioType, StyleType};

print (ImageType::GIF())->getFilenameExtension() . ': ';
print ImageType::GIF() . "\n";
print (ImageType::JPG())->getFilenameExtension() . ': ';
print ImageType::JPG() . "\n";
print (ImageType::PNG())->getFilenameExtension() . ': ';
print ImageType::PNG() . "\n";
print (ImageType::SVG())->getFilenameExtension() . ': ';
print ImageType::SVG() . "\n\n";

print (IconType::GIF())->getFilenameExtension() . ': ';
print IconType::GIF() . "\n";
print (IconType::ICO())->getFilenameExtension() . ': ';
print IconType::ICO() . "\n";
print (IconType::PNG())->getFilenameExtension() . ': ';
print IconType::PNG() . "\n";
print (IconType::SVG())->getFilenameExtension() . ': ';
print IconType::SVG() . "\n\n";

print (VideoType::MP4())->getFilenameExtension() . ': ';
print VideoType::MP4() . "\n";
print (VideoType::OGV())->getFilenameExtension() . ': ';
print VideoType::OGV() . "\n";
print (VideoType::WEBM())->getFilenameExtension() . ': ';
print VideoType::WEBM() . "\n\n";

print (AudioType::AAC())->getFilenameExtension() . ': ';
print AudioType::AAC() . "\n";
print (AudioType::MP3())->getFilenameExtension() . ': ';
print AudioType::MP3() . "\n";
print (AudioType::OGG())->getFilenameExtension() . ': ';
print AudioType::OGG() . "\n";
print (AudioType::WAV())->getFilenameExtension() . ': ';
print AudioType::WAV() . "\n\n";

print (StyleType::CSS())->getFilenameExtension() . ': ';
print StyleType::CSS() . "\n";
print (StyleType::XSL())->getFilenameExtension() . ': ';
print StyleType::XSL();

```

the generated output:

```html
gif: image/gif
jpg: image/jpeg
png: image/png
svg: image/svg+xml

gif: image/gif
ico: image/vnd.microsoft.icon
png: image/png
svg: image/svg+xml

mp4: video/mp4; codecs=avc1.42E01E,mp4a.40.2
ogv: video/ogg; codecs=theora,vorbis
webm: video/webm; codecs=vp8,vorbis

aac: audio/mp4; codecs=mp4a.40.2
mp3: audio/mpeg
ogg: audio/ogg; codecs=vorbis
wav: audio/wav

css: text/css
xsl: text/xsl
```
