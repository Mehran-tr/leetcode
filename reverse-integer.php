<?php
/**
 * @param Integer $x
 * @return Integer
 */
function reverse($x) {
    $INT_MAX = 2147483647; // 2^31 - 1
    $INT_MIN = -2147483648; // -2^31

    $rev = 0;
    while ($x != 0) {
        $pop = $x % 10;
        $x = intval($x / 10);

        // Check for overflow
        if ($rev > $INT_MAX/10 || ($rev == $INT_MAX / 10 && $pop > 7)) return 0;
        if ($rev < $INT_MIN/10 || ($rev == $INT_MIN / 10 && $pop < -8)) return 0;

        $rev = $rev * 10 + $pop;
    }
    return $rev;
}

// Test cases
echo reverse(123) . "\n"; // Output: 321
echo reverse(-123) . "\n"; // Output: -321
echo reverse(120) . "\n"; // Output: 21
