<?php

// assignment 3
$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

echo "The Average marks = " . $average . "<br>";
echo "The Percentage    = " . $percentage . "<br>";
echo "The Grade         = '" . $grade . "<br>";


// assignment 4

$birthDate = "17-10-1999";

$currentDate = date("d-m-Y");

$age = date_diff(date_create($birthDate), date_create($currentDate));

echo "Current age is ".$age->format("%y");

echo "<br>";

// assignment 2

//rectangle

$length = 14;  
$width = 12;  
echo "area of rectangle is $length * $width= " . ($length * $width) . "<br />";


// Square
function areaSquare($side)
{
	$area = $side * $side;
	return $area;
}
$side = 4;
echo "Square=".(areaSquare($side));


    
?>