<?php
function removeEvenNumbers($numbersArray)
{
    $resultArray = [];

    foreach ($numbersArray as $number) {
        if ($number % 2 != 0) {
            array_push($resultArray, $number);
        }
    }

    print_r($resultArray);
}

// arr 1-10
$numbers = range(1, 10);


removeEvenNumbers($numbers);
