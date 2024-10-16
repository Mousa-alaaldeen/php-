<?php

echo strtoupper('I am a full stack developer at orange coding academy') . '<br />' ;

echo strtolower('I am a full stack developer at orange coding academy' .'<br />');
echo ucfirst('full stack ' .'<br />');
echo ucwords("hello world".'<br />');
echo  date("Y.m.d") . "<br>";
echo  date("l") . "<br>";

$sentence = "I am a full stack developer at orange coding academy";
$word = "Orange";

if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}
$url= 'www.orange.com/index.php' ;
$wodUel= 'info' ;
if(stripos($url,$wodUel)!== false){
    echo "Word Found";
}
else{
    echo "Word not Found!";
}

$sentence2 = 'info@orange.com' ;
$word2 =  'com';

if (stripos($sentence, $word) !== false) {
    echo "Word Found!";
} else {
    echo "Word Not Found!";
}

function generateRandomPassword($length = 10) {
   
    $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    
  
    $charactersLength = strlen($characters);
    
   
    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {
      
        $index = mt_rand(0, $charactersLength - 1);
      
        $randomPassword .= $characters[$index];
    }
    
    return $randomPassword;
}
echo "<br>";
echo generateRandomPassword(12); 
echo "<br>";
$sentence = 'That new trainee is so genius.';
$oldWord = 'That';
$newWord = 'Our';
echo str_replace($sentence,$oldWord,$newWord);
echo "<br>";
function findFirstDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));

    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference at position $i: '{$str1[$i]}' vs '{$str2[$i]}'";
        }
    }

    if (strlen($str1) !== strlen($str2)) {
        return "First difference at position $length: End of string.";
    }

    return "No differences found.";
}

$str1 = 'dragonball';
$str2 = 'dragonboll';
$result = findFirstDifference($str1, $str2);
echo $result; 
echo "<br>";
$d=array('red','green','blue');
echo var_dump($d);
echo "<br>";
function nextLetter($inputLetter) {
    $asciiValue = ord($inputLetter);
    
    if ($inputLetter >= 'a' && $inputLetter <= 'z') {
     
        $nextLetter = ($inputLetter === 'z') ? 'a' : chr($asciiValue + 1);
    }
   
    elseif ($inputLetter >= 'A' && $inputLetter <= 'Z') {
       
        $nextLetter = ($inputLetter === 'Z') ? 'A' : chr($asciiValue + 1);
    } else {
     
        return "Invalid input, please enter an alphabet letter.";
    }
    
  
    return $nextLetter;
}


$input1 = 'a';
$input2 = 'z';

echo "Next letter after '$input1' is: " . nextLetter($input1) . "\n"; 
echo "Next letter after '$input2' is: " . nextLetter($input2) . "\n"; 

function insertStringAtPosition($originalString, $insertString, $position) {
   
    $start = substr($originalString, 0, $position);
  
    $end = substr($originalString, $position);
 
    return $start . $insertString . $end;
}

$originalString = 'The brown fox';
$insertString = ' quick';
$position = 3;

echo insertStringAtPosition($originalString, $insertString, $position); 



echo "<br>";

function removeZeroes($f){
$result=str_replace(0,'',$f);
return $result;
}
$f=0000657022.24;
echo removeZeroes($f);
echo "<br>";

function removeTrailingDashes($string) {
  
    return rtrim($string, '-');
}

$originalString = 'The quick brown fox jumps over the lazy dog---';

echo removeTrailingDashes($originalString);
echo "<br>";

function removeSpecialCharacters($string) {
    
    $cleanString = preg_replace('/[^0-9\s]/', ' ', $string);
    
 
    return preg_replace('/\s+/', ' ', $cleanString);
}

$originalString = '\"\1+2/3*2:2-3/4*3';

echo removeSpecialCharacters($originalString); 


echo "<br>";

function getFirstFiveWords($string) {
    $words = explode(' ', $string);
    $firstFiveWords = array_slice($words, 0, 5);
    return implode(' ', $firstFiveWords);
}

$originalString = 'The quick brown fox jumps over the lazy dog';

echo getFirstFiveWords($originalString);
echo "<br>";

function getFirstFiveWords($string) {
    $words = explode(' ', $string);
    $firstFiveWords = array_slice($words, 0, 5);
    return implode(' ', $firstFiveWords);
}

$originalString = 'The quick brown fox jumps over the lazy dog';

echo getFirstFiveWords($originalString);

echo "<br>";
function printAlphabet() {
  
    for ($i = 97; $i <= 122; $i++) {
       
        echo chr($i) . ' ';
    }
}

printAlphabet();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>
