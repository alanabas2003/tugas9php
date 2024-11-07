<?php 
    // tangkap request class_matematika.php
    require_once 'class_matematika.php';

    // akses static member variable class matematika 
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::naikancounter();
    echo 'Counter Sekarang : '. Matematika::$counter;
    echo '<hr/>';

    // akses static member function class Matematka
    $x = Matematika::tambahkan(4,5);
    echo "4 + 5 = $x";
    echo '<hr/>';

    // akses constanta class Matematika
    echo 'Nilai PHI : '. Matematika::PHI;
    $luas_lingkaran = Matematika::luasLingkaran(8);
    echo '<br/>Luas Lingkaran dengan Jari-jari 8 adalah : '. $luas_lingkaran;
    echo "<hr/>";

    $x = matematika::kurangkan(35,15);
    echo "35 - 15 = $x";
    echo '<hr/>';
?>
