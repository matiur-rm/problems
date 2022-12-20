<?php

namespace problems\RotateArray;

/**
 * Description of RotateArray
 *
 * @author Matiur
 */
class RotateArray {

    function rotate(&$nums, $k) {
        $last_element = [];
        for ($i = 1; $i <= $k; $i++) {
            $last_element = array_pop($nums);
            array_unshift($nums, $last_element);
        }
    }

    function rotate2(&$nums, $k) {
        $a = [];
        $nums_length = sizeof($nums);
        for ($i = 0; $i < $nums_length; $i++) {
            $a[($i + $k) % $nums_length] = $nums[$i];
        }
        for ($i = 0; $i < $nums_length; $i++) {
            $nums[$i] = $a[$i];
        }
    }

}
