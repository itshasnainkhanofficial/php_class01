<?php

// Create simple string
$string = "kamran";
$string2 = 'Hello, I am Ali';
echo $string . '<br>';
echo $string2 . '<br>';

// no need for concatination in double quotation

echo 'I am ' .  $string . ' and i am a student <br>';
echo "I am $string and i am a student <br>";


// String concatenation
echo "Hello " . " World" . '<br>'; // Multiple concatenation

// String functions

$string = "    Hello World      ";
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
$foruc = "hellow world";
echo "9 - " . ucfirst($foruc) . '<br>';
$forlc = "Hellow World";
echo "10 - " . lcfirst($forlc) . '<br>';
$forwords = "              hello world           ";
echo "11 - " . ucwords($forwords) . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>'; // Change into world case sensetive
echo "13 - " . stripos($string, 'world') . '<br>'; //case insensitive 
echo "14.1 - " . substr($string, 8) . '<br>';
echo "14.2 - " . substr($string, 4, 2) . '<br>'; // upto defined characters
echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>'; // case insensitive

$invoiceNumber = 100;
$invoiceNumber2 = 123456;
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_repeat('Hello', 2) . '<br>';


// Multiline text and line breaks
$longText = "
  Hello, my name is Nihal
  I am 20,
  I love programming
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Bilal</b>
  I am <b>27</b>,
  I love my php
";
echo "1 - " . $longText . '<br>'; // html ignoring white spaces
echo "2 - " . nl2br($longText) . '<br>'; //new line to br , create br when find br
echo "3 - " . htmlentities($longText) . '<br>'; // if i want tags
echo "4 - " . nl2br(htmlentities($longText)) . '<br>'; // now combine both of the two
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>';
echo "5.2 - " . html_entity_decode("&lt;b&gt;Bilal&lt;/b&gt;") . '<br>';
echo "6 - " . htmlspecialchars("I teach at <b>tech zone<b>") . '<br>';
echo "6.2 - " . "I teach at <b>tech zone<b>"; // see difference on view source

// https://www.php.net/manual/en/ref.strings.php
