<?php
//
require_once 'class_fruit.php';

//
$apple = new fruit();
$banana = new fruit();

//
$apple->set_name('apple');
$apple->set_color('red');
$banana->set_name('banana');
$banana->set_color('yellow');

echo 'Nama Buah '.$apple->get_name(). ' warnanya '.$apple->get_color();
echo '<br/>Nama Buah '.$banana->get_name().' warnanya '.$banana->get_color();
?>