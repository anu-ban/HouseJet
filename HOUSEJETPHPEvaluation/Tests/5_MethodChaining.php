<?php

interface CalcInterface {
    public function setValue(int $v);
    public function getValue(): int;
    public function add(int $v);
    public function subtract(int $v);
}

class Calculator implements CalcInterface {
    private $value = 0; 

    public function setValue(int $v) {
        $this->value = $v;
        return $this; // Return the object for method chaining
    }

    public function getValue(): int {
        return $this->value;
    }

    public function add(int $v) {
        $this->value += $v;
        return $this; // Return the object for method chaining
    }

    public function subtract(int $v) {
        $this->value -= $v;
        return $this; // Return the object for method chaining
    }
}
$calc = new Calculator();
assert($calc->setValue(10)->add(2)->subtract(3)->getValue() === 9);

$calc = new Calculator();
assert($calc->add(10)->add(10)->add(10)->subtract(5)->getValue() === 25);
