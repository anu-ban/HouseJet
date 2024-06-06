<?php

/**
 * Adds two integers and returns their sum.
 * 
 * @param int $a The first integer to add.
 * @param int $b The second integer to add.
 * @return int The sum of the two integers.
 */
function add(int $a, int $b): int {
    return $a + $b; 
}

/**
 * Multiplies two integers and returns their product.
 * 
 * @param int $a The first integer to multiply.
 * @param int $b The second integer to multiply.
 * @return int The product of the two integers.
 */
function multiply(int $a, int $b): int {
    return $a * $b;
}

/**
 * Divides one integer (numerator) by another (denominator) and returns the result.
 *
 * This function includes a check for division by zero and throws a `DivisionByZeroError`
 * if the denominator is zero.
 *
 * @param int $numerator The integer to be divided.
 * @param int $denominator The integer to divide by.
 * @return float|int The result of the division (float if the result is not a whole number).
 * @throws DivisionByZeroError If the denominator is zero.
 */
function divide(int $numerator, int $denominator) {
    if ($denominator == 0) {
        throw new DivisionByZeroError("Cannot divide by zero");
    }
    return $numerator / $denominator; 
}
// basic assertions
assert(add(1,2) === 3);
assert(add(11, -5) === 6);

assert(multiply(1,4) === 4);
assert(multiply(8,3) === 24);

assert(divide(8,2) === 4);
assert(divide(1,2) === 0.5);
