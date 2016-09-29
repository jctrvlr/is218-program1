<?php
// this is how you print text in php
echo "hello world";

// this how you store a value in a variable
$myvar = 'Some text that I want to store in a variable';

// this is an example of the difference between single quotes and double quotes
echo '<br>';
echo '$myvar';
echo '<br>';
echo "$myvar";

// this is an example of php arrays
$myarray = array();
$myarray[] = 'some value 1';
$myarray[] = 'some value 2';
$myarray[] = 'some value 3';


print_r($myarray);

$myAssoc = array('value1' => $myarray, 'value2' => $myarray);

print_r($myAssoc);

?>
