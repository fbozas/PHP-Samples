<?php
$a = 5;
$b = 4.6;
$c = "George";
$d = true;
$e = null;

$f = array("Dog","Cat","Hamster");
class User { public $firstName; public $lastName; }
$g = new User();
$g->firstName = "George";
$g->lastName = "Crouz";

// getting the datatype and value  from a variable
print "a's datatype is: " . gettype($a) . " and it's value is: " . $a  . "\r\n";
print "b's datatype is: " . gettype($b) . " and it's value is: " . $b . "\r\n";
print "c's datatype is: " . gettype($c) . " and it's value is: " . $c . "\r\n";
print "d's datatype is: " . gettype($d) . " and it's value is: " . $d . "\r\n";
print "e's datatype is: " . gettype($e) . " and it's value is: " . $e . "\r\n";
print "f's datatype is: " . gettype($f) . " and it's value is: ";
print_r($f);
print "g's datatype is: " . gettype($g) . " of class: ". get_class($g) ." and it's fields are: " . "\r\n";
var_dump(get_object_vars($g));