<?php
$letters = ['A', 'B', 'C',];
// $results_list = [];
// $result = "";
// $credits = 0;

while ($o_counter <= 20 || $credits = 500) {
    // $o_counter++;
    $roll_array = [];

    for ($i_counter = 1; $i_counter <= 3; $i_counter++) {
        // $roll_array = [];
        $random_key = array_rand($letters);
        $random_letters = $letters[$random_key];
        $result = $random_letters;
        echo $result;
        // array_push($roll_array, $result . $i_counter);
        // echo $roll_array;
    };
    echo "<br>The roll is: $result";
    


    // $results_list[] = $result . $i_counter;


    $credits = match ($results) {
        'AAA', 'BBB', 'CCC' => 100,
        'AAB', 'ABA', 'BAA', 'ABB', 'BBA', 'BAB', 'BCC', 'CBC', 'CCB', 'ACC', 'CAC', 'CCA' => 50,
        'Any Other Combination' => 0
    };
    echo $credits;
}

// foreach ($results as $key) {
//     echo $result . "<br>";
// }



?>

