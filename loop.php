<?php
function printNumbersWithDashes() {
    
    for ($i = 1; $i <= 10; $i++) {
      
        if ($i < 10) {
            echo $i . "-";
        } else {
          
            echo $i;
        }
    }
}

printNumbersWithDashes(); 

echo "<br>";
$total = 0;

for ($i = 0; $i <= 30; $i++) {
    $total += $i;
}
echo "The total sum of integers between 0 and 30 is: " . $total;
echo "<br>";

echo "<br>";

function generatePattern() {
  
    $alphabet = 'A';

    
    for ($i = 1; $i <= 5; $i++) {
        
        for ($j = 1; $j <= 5; $j++) {
           
            if ($j <= (5 - $i)) {
                echo "A ";
            } else {
                echo $alphabet . " ";
            }
        }
       
        echo "<br>";
        
     
        $alphabet++;
    }
}

generatePattern();


echo "<br>";
function  generatePattern2(){
    $number=1;
    for ($i=1; $i <=5 ; $i++) { 
        for ($j=1; $j <=5 ; $j++) { 
            if($j<=(5-$i)){
                echo '1';
            }
            else{
                echo $number ." ";
            }
            
        }
        echo "<br>";
            $number++;
    }
} 
generatePattern2();
echo "<br>";

function generatePattern3() {
  
    $alphabet = '1';

    
    for ($i = 1; $i <= 5; $i++) {
        
        for ($j = 1; $j <= 5; $j++) {
           
            if ($j == $i) {
                echo $alphabet;
            } else {
                echo '0' . " ";
            }
        }
       
        echo "<br>";
        
     
        $alphabet++;
    }
}
generatePattern3();
echo "<br>";

function calculateFactorial($number) {
  
    $factorial = 1;

   
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i; 
    }

    return $factorial;
}

$input = 5;
echo "Factorial of $input is: " . calculateFactorial($input);
echo "<br>";

function generateFibonacci($terms) {
    $num1 = 0;
    $num2 = 1;

 
    echo $num1 . " " . $num2 . " ";

   
    for ($i = 3; $i <= $terms; $i++) {
        $nextNum = $num1 + $num2;
        echo $nextNum . " ";

     
        $num1 = $num2;
        $num2 = $nextNum;
    }
}


$input = 10;
echo "Fibonacci sequence of $input terms: ";
generateFibonacci($input);


echo "<br>";

function countCharacterC($text) {
    
    $textLowerCase = strtolower($text);

   
    $count = substr_count($textLowerCase, 'c');

    return $count;
}


$text = "Orange Coding Academy";
echo "The number of 'c' characters in the text is: " . countCharacterC($text);

echo "<br>";

echo "<table border='1' cellpadding='3px' cellspacing='0px'>";


$rows = 5;
$cols = 5;

for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
   
    for ($j = 1; $j <= $cols; $j++) {
       
        echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
echo "<br>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz".' ';
    } elseif ($i % 3 == 0) {
        echo "Fizz".' ';
    } elseif ($i % 5 == 0) {
        echo "Buzz".' ';
    } else {
        echo $i .' ';
    }
}


echo "<br>";

function floydTriangle($n) {
    $num = 1; 


    for ($i = 1; $i <= $n; $i++) {
     
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " ";
            $num++; 
        }
        echo "<br>"; 
    }
}

$lines = 5;
floydTriangle($lines);








echo "<br>";
echo "<br>";
echo "<br>";
?>
