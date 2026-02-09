<?php

require_once 'classes.php';

$miso = new Person();
$miso->setName('Misokalya Kimiti');
$miso->setAge('30');

echo $miso->getName();
echo '<br>';
echo $miso->getAge();

?>