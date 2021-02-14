<?php
namespace Lib16\Utils\Tests\Enums;

use PHPUnit\Framework\TestCase;
use Lib16\Utils\Enums\Weekday as W;

class WeekdayTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function test(
        string $method,
        string $expected,
        string $expectedKey,
        int $expectedNumeric,
        int $expectedIso
    ) {
        $this->assertEquals(
            $expected,
            call_user_func([W::class, $method])->__toString()
        );
        $this->assertEquals(
            $expectedKey,
            call_user_func([W::class, $method])->key()
        );
        $this->assertEquals(
            $expectedNumeric,
            call_user_func([W::class, $method])->numeric()
        );
        $this->assertEquals(
            $expectedIso,
            call_user_func([W::class, $method])->iso()
        );
    }

    public function provider(): array
    {
        return [
            ['MON', 'Monday', 'mon', 1, 1],
            ['TUE', 'Tuesday', 'tue', 2, 2],
            ['WED', 'Wednesday', 'wed', 3, 3],
            ['THU', 'Thursday', 'thu', 4, 4],
            ['FRI', 'Friday', 'fri', 5, 5],
            ['SAT', 'Saturday', 'sat', 6, 6],
            ['SUN', 'Sunday', 'sun', 0, 7]
        ];
    }

    public function testByNumbers()
    {
        $this->assertEquals(
            [
                W::SUN(),
                W::MON(),
                W::TUE(),
                W::WED(),
                W::THU(),
                W::FRI(),
                W::SAT(),
                W::SUN(),
                W::MON(),
                W::SAT(),
                W::FRI(),
                W::FRI()
            ],
            W::byNumbers(0, 1, 2, 3, 4, 5, 6, 7, 8, -1, -2, -30)
        );
    }

}