<?php
//
require_once 'class_nilaiSantri.php';


$ns1 = new NilaiSantri();
$ns1->nama ='fulan';
$ns1->nilai = 70;
echo $ns1->nama . ' kuliah di '.$ns1->sekolah;
echo '<br/>Hasil Ujian : '.$ns1->nilai. 'dinyatakan '.$ns1->getHasil();
?>