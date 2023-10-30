<?php

class Solution
{

    /*
     * Leetcode Problem :Longest Substring Without Repeating Characters
     * Difficulty : Medium
     * Link : https://leetcode.com/problems/longest-substring-without-repeating-characters/
     * */
    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s)
    {
        $start = 0;
        $maxLength = 0;
        $charSet = [];

        for ($end = 0; $end < strlen($s); $end++) {
            while (isset($charSet[$s[$end]])) {
                unset($charSet[$s[$start]]);
                $start++;
            }

            $charSet[$s[$end]] = true;

            $maxLength = max($maxLength, $end - $start + 1);
        }

        return $maxLength;
    }
}
