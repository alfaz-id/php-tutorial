<?php
use PHPUnit\Framework\TestCase;

require_once '../src/Calculator.php';

class CalculatorTest extends TestCase{
    /** @test */
    public function doPlusTest():void{
        $cal = new Calculator(10,50);
        $result = $cal->doPlus();
        $this->assertEquals(60,$result);
    }
}
