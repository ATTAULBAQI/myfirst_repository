<?php

echo '<h3>TASK 1<h3/>';

$numbers = array(1, 2, 3, 4, 5);

// Using a loop to calculate the sum
$sum = 0;
foreach ($numbers as $number) {
    $sum += $number;
}

echo "Sum using loop: $sum\n";


echo '<br>';
echo '<br>';

//built in method//

$sumBuiltIn = array_sum($numbers);

echo "Sum using built-in method: $sumBuiltIn\n";


echo '<h3>TASK 2<h3/>';

echo '<br>';


//reverseing array by loop method //

$reversedArray = array();
$length = count($numbers);

for ($i = $length - 1; $i >= 0; $i--) {
    $reversedArray[] = $numbers[$i];
}

echo "Reversed array using loop: ";
print_r($reversedArray);


echo '<br>';
echo '<br>';



// Using PHP's built-in method array_reverse
$reversedBuiltIn = array_reverse($numbers);

echo "Reversed array using built-in method: ";
print_r($reversedBuiltIn);



echo '<br>';
echo '<br>';

echo '<h3>TASK 3<h3/>';


//making table//

echo "<table border='1'>";
// Loop for each row
foreach ($numbers as $rowNumber) {
    echo "<tr>";
    // Loop for each column
    foreach ($numbers as $colNumber) {
        echo "<td>$rowNumber * $colNumber = " . ($rowNumber * $colNumber) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo '<br>';
echo '<br>';
echo '<h3>TASK 4<h3/>';



$numbers = array(1, 2, 3, 4, 5);


$max = $numbers[0];

foreach ($numbers as $value) {
    if ($value > $max) {
        $max = $value;
    }
}


echo "The largest number in the array is: " . $max;

//by built in method //
echo '<br>';
echo 'by built in method:';

$numbers = array(1, 2, 3, 4, 5);

$max = max($numbers);

echo "The largest number in the array is: " . $max;



echo '<br>';
echo '<br>';
echo '<h3>TASK 5<h3/>';



$numbers = array(1, 2, 3, 4, 5);

$min = min($numbers);
echo "The smalest number in the array is: " . $min;



echo '<br>';
echo '<br>';
echo '<h3>TASK 6<h3/>';



// Index where you want to add the new element
$index = 2;


$newElement = 10;

array_splice($numbers, $index, 0, $newElement);

print_r($numbers);


echo '<br>';
echo '<br>';
echo '<h3>TASK 7<h3/>';

$numbers = array(1, 2, 10, 3, 4, 5);

$indexToDelete = 10;

unset($numbers[$indexToDelete]);

$numbers = array_values($numbers);

print_r($numbers);


echo '<br>';
echo '<br>';
echo '<h3>TASK 8<h3/>';



$students = array("hamad", "asad", "Chawal", "Dawood", "ahmad");
echo "Using for loop:\n";
$studentCount = count($students);
for ($i = 0; $i < $studentCount; $i++) {
    echo "Student " . ($i + 1) . ": " . $students[$i] . "\n";
}
echo '<br>';
echo '<br>';
echo ' by usning for each loop';
echo '<br>';
echo '<br>';

echo "\nUsing foreach loop:\n";
foreach ($students as $key => $name) {
    echo "Student " . ($key + 1) . ": " . $name . "\n";
}




echo '<br>';
echo '<br>';
echo '<h3>TASK 9<h3/>';


$students = array(
    "hamad" => 20,
 "asad" => 30,
 "Chawal" => 40, 
"Dawood" => 45,
 "ahmad" => 55);

 echo "\nUsing foreach loop:\n";
foreach ($students as $name => $age) {
    echo "Student: " . $name . ", Age: " . $age . "\n" .'<br>';
}





?>