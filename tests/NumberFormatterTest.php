<?php
namespace Lib16\Utils\Tests;

require_once 'vendor/autoload.php';

use Lib16\Utils\NumberFormatter;
use Lib16\Utils\Enums\CSS\ {
    LengthUnit,
    TimeUnit
};
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{

    public function formatProvider(): array
    {
        return [
            [2, null, '2'],
            [2.34567, null, '2.3457'],
            [null, null, null],
            [0, null, '0'],
            [- 0.00000001, null, '0'],
            [2, LengthUnit::EM(), '2em'],
            [2.34567, LengthUnit::EM(), '2.3457em'],
            [null, LengthUnit::EM(), null],
            [0, LengthUnit::EM(), '0'],
            [0, TimeUnit::MS(), '0ms'],
            [- 0.00000001, TimeUnit::S(), '0s']
        ];
    }

    /**
     *
     * @dataProvider formatProvider
     */
    public function testFormat($value, $unit, $expected)
    {
        $numberFormatter = new NumberFormatter(4);
        $this->assertEquals($expected, $numberFormatter->format($value, $unit));
    }

    public function testFormatArray()
    {
        $expected = '2px 2.3457px 0 0';
        $array = [2, 2.34567, 0, - 0.00000001, null];
        $numberFormatter = new NumberFormatter(4);
        $this->assertEquals($expected, $numberFormatter->formatArray($array, ' ', LengthUnit::PX()));
        $this->assertEquals($expected, implode(' ', $numberFormatter->formatArray($array, null, LengthUnit::PX())));
    }
}