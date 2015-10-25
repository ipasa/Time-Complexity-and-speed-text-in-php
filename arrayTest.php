<?php
$fruits = [
    "apple",
    "mango",
    "jackfruit",
    "strawberry",
    "dorian",
    "lichi",
    "tomato", //yes, tomato is a fruit.
    "fig",
    "custard-apple",
    "wax-apple",
    "pomegranate",
    "snake-fruit",
    "dragon-fruit"
];

$cycles = 10**6;


// -------------------------------
// ---------- in_array() ---------
// -------------------------------
$t1 = microtime(true);

for($i=0; $i < $cycles; $i++) {
    if (in_array("tomato", $fruits)) {
        "Yes Tomato.";
    } else {
        "No Tomato.";
    }
}

$t_a = microtime(true) - $t1;


// -------------------------------
// ----------- isset() -----------
// -------------------------------
$t2 = microtime(true);

$flipped_fruits = array_flip($fruits);

for($i=0; $i < $cycles; $i++) {
    if (isset($flipped_fruits["tomato"])) {
        "Yes Tomato.";
    } else {
        "No Tomato.";
    }
}

$t_b = microtime(true) - $t2;

// -------------------------------
// ---------- Conclusions --------
// -------------------------------
echo "in_array(): $t_a seconds. \n";
echo "isset():    $t_b seconds. \n";
echo "--------------------------\n";
echo "Factor: ".round($t_a/$t_b)."x";
