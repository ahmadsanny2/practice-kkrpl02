<?php

class mobil
{
    var $warna = "Merah";
    var $harga = "250000";

    function gantiWarna($warnaBaru)
    {
        $this->warna = $warnaBaru;
    }

    function tampilWarna()
    {
        echo "Warna mobilnya:" . $this->warna;
    }
}

$obja = new mobil();
$objb = new mobil();

echo "<b>Mobil pertama</b> <br>";
$obja->tampilWarna();
echo "<br><b>Mobil pertama ganti warna</b> <br>";
$obja->gantiWarna("Merah");
$obja->tampilWarna();

echo "<br><b>Mobil kedua</b> <br>";
$objb->gantiWarna("Hijau");
$objb->tampilWarna();
