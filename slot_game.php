<?php
$letters_array = ["A", "B", "C"];
$spins = 0;
$credits = 0;
$total_credits = 0;
while ($spins < 10 && $total_credits <= 500) {
    static $total_credits = 0;
    $spins++;
    $results_array = [];
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
    $total_credits += $credits;
    echo $three_letters . " ---> " . "$" . $credits . "<br>";
}
echo ("<br>GAME OVER. Total winnings is " . $total_credits);
?>