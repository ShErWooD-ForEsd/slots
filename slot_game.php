<?php
$letters = ['A', 'B', 'C'];
$results_list = [];
$result = "";
$credits = "";

while ($o_counter <= 10 || $credits = 500) {
    // $o_counter++;

    for ($i_counter = 1; $i_counter <= 3; $i_counter++) {
        $random_key = array_rand($letters);
        $random_letters = $letters[$random_key];
        $result = $random_letters;
        echo $result;
    };


    // $results_list[] = $result . $i_counter;


    $credits = match($results) {
        'AAA', 'BBB', 'CCC' => 100,
        'AAB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB', 'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA' => 50,
        'Any Other Combination' => 0
    }; echo $credits;
}

    // foreach ($results_a as $key) {
    //     echo $item . "<br>";
    // }



















?>