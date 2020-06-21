<?php
namespace Lib16\Utils\Enums;

class Enum
{
    protected $value;

    protected function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}