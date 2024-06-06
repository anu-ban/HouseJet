<?php

/**
 * Reverses a given string.
 *
 * This function uses PHP's built-in `strrev` function to efficiently reverse the input string.
 *
 * @param string $text The string to be reversed.
 * @return string The reversed string.
 */
function reverseString(string $text): string {
    return strrev($text); 
}

/**
 * Replaces the nth word in a phrase with a given replacement word.
 *
 * @param string $phrase The phrase to modify.
 * @param int $n The position (starting from 1) of the word to replace.
 * @param string $replacementWord The word to replace the nth word with.
 * @return string The modified phrase with the replaced word.
 * @throws InvalidArgumentException If the specified word position is invalid.
 */
function replaceNthWord(string $phrase, int $n, string $replacementWord): string {
    $words = explode(" ", $phrase); 

    if ($n < 1 || $n > count($words)) {
        throw new InvalidArgumentException("Invalid word position.");
    }

    $words[$n - 1] = $replacementWord; 

    return implode(" ", $words); 
}

/**
 * Removes all numbers (digits 0-9) from a given string.
 *
 * This function uses regular expressions to efficiently match and remove numeric characters from the string.
 *
 * @param string $text The string to remove numbers from.
 * @return string The string with all numbers removed.
 */
function removeNumbers(string $text): string {
    return preg_replace('/\d/', '', $text); 
}

/**
 * Checks if a given email address is in a valid format.
 *
 * This function uses PHP's built-in `filter_var` function with the `FILTER_VALIDATE_EMAIL` filter
 * to validate email addresses according to common standards.
 *
 * @param string $email The email address to validate.
 * @return bool True if the email format is valid, false otherwise.
 */
function isValidEmailFormat(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false; 
}
assert(reverseString('abcdefg') === 'gfedcba');
assert(replaceNthWord('The Quick Brown Fox', 3, 'Red') === 'The Quick Red Fox');
assert(removeNumbers('I have 1 apple and 2 grapes') === 'I have  apple and  grapes');
assert(isValidEmailFormat('brandon@housejet.com'));
assert(!isValidEmailFormat('brandon@gmail'));
