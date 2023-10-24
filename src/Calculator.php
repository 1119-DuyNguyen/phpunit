<?php

namespace Src;

class Calculator
{
    public function calculate($num1, $num2, $operator) {
        switch ($operator) {
            case "add":
                return $num1 + $num2;
            case "subtract":
                return $num1 - $num2;
            case "multiply":
                return $num1 * $num2;
            case "divide":
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Division by zero is not allowed";
                }
            default:
                return "Invalid operator";
        }
    }
}
