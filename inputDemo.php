<?php
//Get an input from user and print a result on the console
print "What's your name? ";
$name = trim(fgets(STDIN));
print "Your name is " . $name;
print "\nAnd how old you are " . $name . "? ";
$age = trim(fgets(STDIN));
print "Next year you will be " . ($age + 1) . " years old";


