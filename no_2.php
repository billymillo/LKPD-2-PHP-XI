<?php

$day = date('l');
$totalBayar = 0;
$pembelian = 130000;

$diskon1 = $pembelian * 7 / 100;
$diskon2 = $pembelian * 5 / 100;
//  echo $diskon1 . "<br>";
//  echo $diskon2 . "<br>";

if ($pembelian >= 100000 && $day == "Tuesday") {
        $totalBayar = $pembelian - $diskon1 - $diskon2;
} else if ($pembelian >= 100000 && $day != "Tuesday") {
    $totalBayar = $pembelian - $diskon1;
}else if ($pembelian <= 100000 && $day = "Tuesday") {
    $totalBayar = $pembelian - $diskon2;
}else {
    $totalBayar = $pembelian;
}

echo "Tanggal hari ini: " . $day . "<br>";
echo "Total pembelanjaan: " . number_format($pembelian, 0, '.', '.') . "<br>";
echo "Total yang harus dibayar: " . number_format($totalBayar, 0, '.', '.');
?>