<?php

// day 2 part 1

$input_file = "input.txt";
$file_contents = file($input_file);
$safe_count = 0;

foreach ($file_contents as $line) {
    $line_split = explode(" ", $line);
    $control_array = [];
    $count = 0;

    for ($i = 1; $i < count($line_split); $i++) {
        if ($line_split[$i] > $line_split[$i - 1] && $line_split[$i] - $line_split[$i - 1] <= 3) {
            $count++;
        } else {
            break;
        }
    }

    for ($i = 1; $i < count($line_split); $i++) {
        if ($line_split[$i] < $line_split[$i - 1] && $line_split[$i - 1] - $line_split[$i] <= 3) {
            $count++;
        } else {
            break;
        }
    }

    if ($count == count($line_split) - 1) {
        $safe_count++;
    }
}

echo $safe_count;
