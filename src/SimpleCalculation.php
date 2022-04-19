<?php
namespace Prashantm\HelloWorld;

class SimpleCalculation
{
    private int $number1;
    private int $number2;

    public function __construct($number1, $number2)
    {
        if (!is_int($number1) || !is_int($number2)) {
            throw new \InvalidArgumentException('Invalid Integer');
        }

        $this->number1 = $number1;
        $this->number2 = $number2;

    }

    /**
     * @return int
     */
    public function addition(): int
    {
        return ($this->number1 + $this->number2);
    }
}
