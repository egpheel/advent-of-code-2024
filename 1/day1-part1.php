<?php

$input_file = "input.txt";
$file_contents = file($input_file);
$left_input = [];
$right_input = [];
$total_distance = 0;

foreach ($file_contents as $line) {
    $line_exploded = explode("   ", $line);
    array_push($left_input, $line_exploded[0]);
    array_push($right_input, $line_exploded[1]);
}

sort($left_input);
sort($right_input);

for ($i = 0; $i < count($file_contents); $i++) {
    $distance = abs($left_input[$i] - $right_input[$i]);
    $total_distance += $distance;
}

echo $total_distance;
