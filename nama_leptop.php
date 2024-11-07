<?php
//
require_once 'classleptop.php';

//
$lenovo = new leptop();
$advan = new leptop();

//
$lenovo->set_name('lenovo');
$lenovo->set_color('black');
$advan->set_name('advan');
$advan->set_color('white');

echo 'Nama leptop '.$lenovo->get_name(). ' warnanya '.$lenovo->get_color();
echo '<br/>Nama leptop '.$advan->get_name().' warnanya '.$advan->get_color();
?>