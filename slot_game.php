<?php

$letters_array = ["A", "B", "C"];

    $results_array = [];
    $credits = 0;
    for ($i = 1; $i <= 3; $i++) {
        $random_key = array_rand($letters_array);
        $random_letters = $letters_array[$random_key];
        $results_array[] .= $random_letters;
    }
    $three_letters = $results_array[0] . $results_array[1] . $results_array[2];

    $credits = match ($three_letters) {
        'AAA', 'BBB', 'CCC' => 100,
        'AAB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB', 'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA' => 50,
        default => 0
    };
    echo $three_letters . " ---> " . "$" . $credits;

    ?>