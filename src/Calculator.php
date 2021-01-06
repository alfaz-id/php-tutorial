<?php

class Calculator{
    private int $number1;
    private int $number2;

    function __construct(int $number1,int $number2)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    function doPlus():string{
        return $this->number1 + $this->number2;
    }
}
