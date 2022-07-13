<?php

$jambu = 5; //setiap dus berisi 5
$kardusJambu = 6; //kardus berisikan jambu
$hargaJambu = 15000;

$kardusBekas = 2;
$hargaKardus = 2000;

// total = (hargaJambu * (jambu * kardusJambu) + kardusBekas * hargaKardus)
$total = ($hargaJambu * ($jambu * $kardusJambu) + $kardusBekas * $hargaKardus);

echo "====================================================";
echo "<p>Harga Jambu : Rp $hargaJambu / Kg</p>";
echo "<p>Harga Kardus : Rp $hargaKardus / pcs</p>";
echo "<p>Total Penjualan (Dus dan Jambu) : Rp $total</p>";
echo "====================================================";
