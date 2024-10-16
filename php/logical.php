<?php
function isLeapYear($year) {
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        return "This year is a leap year.";
    } else {
        return "This year is not a leap year.";
    }
}
echo "<br>";

$year = 2013;
echo isLeapYear($year);
echo "<br>";

function checkSeason($temperature) {
    if ($temperature < 20) {
        return "It is winter.";
    } else {
        return "It is summertime!";
    }
}


$temperature = 27;
echo checkSeason($temperature);
echo "<br>";
function sumOrTriple($firstInteger, $secondInteger) {
    if ($firstInteger === $secondInteger) {
        return ($firstInteger + $secondInteger) * 3;
    }
    return $firstInteger + $secondInteger;
}

$firstInteger = 2;
$secondInteger = 2;
echo sumOrTriple($firstInteger, $secondInteger);
echo "<br>";
function checkSum($firstInteger, $secondInteger) {
    if ($firstInteger + $secondInteger === 30) {
        return $firstInteger + $secondInteger;
    }
    return false;
}


$firstInteger = 10;
$secondInteger = 10;
echo checkSum($firstInteger, $secondInteger);

function isMultipleOfThree($number) {
    return $number % 3 === 0 ? "true" : "false";
}


$number = 20;
echo isMultipleOfThree($number);
echo "<br>";
function isInRange($number) {
    return ($number >= 20 && $number <= 50) ? "true" : "false";
}


$number = 50;
echo isInRange($number);
echo "<br>";

function largestOfThree($numbers) {
    return max($numbers);
}


$numbers = [1, 5, 9];
echo largestOfThree($numbers);
echo "<br>";
function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}


$units = 300;
echo calculateElectricityBill($units);



function calculateElectricityBilll($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
};

$units = 300;
echo calculateElectricityBilll($units);
echo "<br>";
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case 'addition':
            return $num1 + $num2;
        case 'subtraction':
            return $num1 - $num2;
        case 'multiplication':
            return $num1 * $num2;
        case 'division':
            return $num2 != 0 ? $num1 / $num2 : 'Cannot divide by zero';
        default:
            return 'Invalid operation';
    }
}

$num1 = 10;
$num2 = 5;
$operation = 'addition'; 
echo calculator($num1, $num2, $operation);
echo "<br>";
function checkVotingEligibility($age) {
    return $age >= 18 ? "is eligible to vote" : "is not eligible to vote";
}


$age = 15;
echo checkVotingEligibility($age);
echo "<br>";


function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}


$number = -60;
echo checkNumber($number);
echo "<br>";
function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);
    
    if ($average < 60) {
        return 'F';
    } elseif ($average < 70) {
        return 'D';
    } elseif ($average < 80) {
        return 'C';
    } elseif ($average < 90) {
        return 'B';
    } else {
        return 'A';
    }
}


$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
echo calculateGrade($scores);

echo "<br>";