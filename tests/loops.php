<?php 

$test_array_1 = [1,2,3,4,5,6];

//6 items, index 0 to 5;

//first item
$test_array_1[0]; // return 1
$test_array_1[count($test_array_1)-1];


for( $counter = 0; count($test_array_1) >= $counter ; $counter++ ){

    echo $test_array_1[$counter];

}