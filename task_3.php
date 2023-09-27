<?php
function sortGradesDescending($gradesArray)
{

    arsort($gradesArray);


    print_r($gradesArray);
}


$grades = array(85, 92, 78, 88, 95);


sortGradesDescending($grades);
