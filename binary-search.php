<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search(array $nums, int $target): int {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $mid = $low + floor(($high - $low) / 2);
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return -1;
    }
}