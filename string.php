<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $index => $string) {
    // Count the number of vowels in the string
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";

    // Add a new line after each output except the last one
    if ($index < count($strings) - 1) {
        echo "\n";
    }
}

?>
