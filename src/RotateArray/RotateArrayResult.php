<?php
require "../../vendor/autoload.php";

use problems\RotateArray\RotateArray;

$solution = new RotateArray();
$nums = [-1,-100,3,99];
$solution->rotate2($nums, 2);
echo "<pre>";
print_r($nums);