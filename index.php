<?php

require 'classes.php';
require 'inheritance.php';
require 'method_overriding.php';

$miso = new Person();
$miso->setName('Misokalya Kimiti');
$miso->setAge('30');
$miso->setGender('Male');

echo 'Name: ' . '<b>' . $miso->name . '</b>';
echo '<br>';
echo 'Age: ' . '<b>' . $miso->age . '</b>';
echo '<br>';
echo 'Gender: ' . '<b>' . $miso->gender . '</b>';

?>