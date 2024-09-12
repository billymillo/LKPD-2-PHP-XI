<?php
$barang = [
    [
        'nama_barang' => 'Odol',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Cuci',
        'harga_barang' => 5000,
        'jumlah_beli' => 2,
    ],
    [
        'nama_barang' => 'Sikat Gigi',
        'harga_barang' => 7000,
        'jumlah_beli' => 4,
    ]
    ];

    $price = 0;
    echo "Daftar belanjaan :  <br>";
    // foreach array numerik
    foreach ($barang as $item) {
        $totalHarga = $item['harga_barang'] * $item['jumlah_beli'];
        echo "<li>" . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") " . number_format($totalHarga, 0, ".", ".");
        $price += $totalHarga;
    }

    echo "</br>";
    echo 'Total harga yang harus di bayar adalah <b> Rp. ' . number_format($price, 0, '.', '.') . '</b>';
?>