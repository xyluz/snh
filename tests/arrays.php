<?php

//For ARRAYS

$array_example = []; //an empty array

$array_example_2 = ["mike"];

$array_example_3 = ["mike",3,"orange",true];

// Index - position of an element(item) in the array
// position 0 

print $array_example_3[0]; // prints mike
print $array_example_3[3]; // prints true

print count($array_example_3); // prints 4

$imaginery_array = []; // Fetch the last item in the imagenery array

print $array_example_3[count($array_example_3) - 1]; //true

print $array_example_3[0]; // 


// If an array as 4 elements, then the highest index would be 3,


$array_example_4 = array();

$array_example_4[0] = "Seyi";
$array_example_4[1] = "Onifade";
$array_example_4[2] = "xyluz";

print $array_example_4; // [ "Seyi" , "Onifade" , "xyluz"]


