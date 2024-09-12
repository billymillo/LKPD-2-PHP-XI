<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for = "namaproduk">Kalimat :</label><br>
        <input type="text" id="namaproduk" name="namaproduk" required>
    </form>
</body>
</html>


<?php 
// SERVER adalah sebuah array yang mencakup header,lokasi scrip, dan jalur yang bersifat superglobal
// REQUEST_METHOD method untuk mengakses post, get dsb
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teks= $_POST ['namaproduk'];

//mencari kata yang tidak berhubungan dengan a-z, A-Z, 0-9, dan spasi/tab
preg_match_all('/[^a-zA-Z0-9]/',$teks, $symbol);

// hasil diatas disimpan ke $symbols
// count($symbol[0]) mengecek jika jumlah lebih dari 0 maka ada symbol
if (count($symbol[0]) > 0){
    //menghilangkan duplikasi simbol 
    $totalSymbol = array_unique($symbol[0]);
    echo "karakter yang terdapat pada kalimat : " . implode(' ', $totalSymbol);
} else {
    echo "Tidak terdapat simbol pada kalimat.";
}
     }
?>