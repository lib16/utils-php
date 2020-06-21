<?php
namespace Lib16\Utils\Enums;

class Weekday extends Enum
{
    protected $shortLowercase;

    protected $numeric;

    protected $iso8601;

    protected function __construct(
        string $value,
        string $shortLowercase,
        int $numeric,
        int $iso8601
    ) {
        parent::__construct($value);
        $this->shortLowercase = $shortLowercase;
        $this->numeric = $numeric;
        $this->iso8601 = $iso8601;
    }

    public static function MON(): self
    {
        return new static('Monday', 'mon', 1, 1);
    }

    public static function TUE(): self
    {
        return new static('Tuesday', 'tue', 2, 2);
    }

    public static function WED(): self
    {
        return new static('Wednesday', 'wed', 3, 3);
    }

    public static function THU(): self
    {
        return new static('Thursday', 'thu', 4, 4);
    }

    public static function FRI(): self
    {
        return new static('Friday', 'fri', 5, 5);
    }

    public static function SAT(): self
    {
        return new static('Saturday', 'sat', 6, 6);
    }

    public static function SUN(): self
    {
        return new static('Sunday', 'sun', 0, 7);
    }

    public function key(): string
    {
        return $this->shortLowercase;
    }

    public function numeric(): int
    {
        return $this->numeric;
    }

    public function iso(): int
    {
        return $this->iso8601;
    }

    public static function byNumber(int $number): self
    {
        return [
            self::SUN(),
            self::MON(),
            self::TUE(),
            self::WED(),
            self::THU(),
            self::FRI(),
            self::SAT(),
            self::SUN()
        ][(($number % 7) + 7) % 7];
    }

    public static function byNumbers(int ...$numbers): array
    {
        $weekdays = [];
        foreach ($numbers as $number) {
            $weekdays[] = self::byNumber($number);
        }
        return $weekdays;
    }
}