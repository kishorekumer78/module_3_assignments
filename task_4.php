<?php
function calculateAverageGrades($studentGrades)
{
    foreach ($studentGrades as $student => $grades) {
        $totalGrades = array_sum($grades);
        $averageGrade = $totalGrades / count($grades);

        echo "Average grade for student $student: $averageGrade" . PHP_EOL;
    }
}


$studentGrades = [
    'Student 1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student 2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student 3' => ['Math' => 75, 'English' => 80, 'Science' => 85],
];

calculateAverageGrades($studentGrades);
