<?php

$input_file = "input.txt";
$file_contents = file($input_file);
$left_input = [];
$right_input = [];
$similarity_score = 0;

foreach ($file_contents as $line) {
    $line_exploded = explode("   ", $line);
    array_push($left_input, $line_exploded[0]);
    array_push($right_input, $line_exploded[1]);
}

foreach ($left_input as $i) {
    $similarity_score += $i * find_occurrences($i, $right_input);
}

// little helper function to find the number of
// occurrences of $value in an array $arr
function find_occurrences($value, array $arr)
{
    $occurrences = 0;

    foreach ($arr as $a) {
        if ($value == $a) {
            $occurrences++;
        }
    }

    return $occurrences;
}

echo $similarity_score;
