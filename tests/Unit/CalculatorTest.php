<?php
use PHPUnit\Framework\TestCase;
use Src\Calculator;

class CalculatorTest extends TestCase {
    public function testAddition() {
        $calculator = new Calculator();
        $result = $calculator->calculate(5, 3, "add");
        $this->assertEquals(8, $result);
    }

    public function testSubtraction() {
        $calculator = new Calculator();
        $result = $calculator->calculate(10, 4, "subtract");
        $this->assertEquals(6, $result);
    }

    public function testMultiplication() {
        $calculator = new Calculator();
        $result = $calculator->calculate(6, 2, "multiply");
        $this->assertEquals(12, $result);
    }

    public function testDivision() {
        $calculator = new Calculator();
        $result = $calculator->calculate(8, 2, "divide");
        $this->assertEquals(4, $result);
    }

    public function testDivisionByZero() {
        $calculator = new Calculator();
        $result = $calculator->calculate(5, 0, "divide");
        $this->assertEquals("Division by zero is not allowed", $result);
    }

    public function testInvalidOperator() {
        $calculator = new Calculator();
        $result = $calculator->calculate(5, 3, "invalid");
        $this->assertEquals("Invalid operator", $result);
    }
}
