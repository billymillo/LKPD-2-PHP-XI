<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Koin</title>
</head>
<body>
    <h1>Hitung Koin</h1>

    <!-- Form untuk input uang -->
    <form method="post" action="">
        <label for="uang">Masukkan jumlah uang (dalam satuan terkecil):</label><br>
        <input type="number" id="uang" name="uang" min="1" required><br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai uang dari form
        // "-="berguna untuk mengurangi jumlah nilai value tersebut
        $uang = $_POST["uang"];

        function koin($uang) {
            $jumlahPecahan = [
                "Rp. 1.000" => 0,
                "Rp. 500" => 0,
                "Rp. 200" => 0,
                "Rp. 100" => 0,
            ];

            while ($uang >= 1000) {
                $uang -= 1000;
                $jumlahPecahan["Rp. 1.000"]++;
            }

            while ($uang >= 500) {
                $uang -= 500;
                $jumlahPecahan["Rp. 500"]++;
            }

            while ($uang >= 200) {
                $uang -= 200;
                $jumlahPecahan["Rp. 200"]++;
            }

            while ($uang >= 100) {
                $uang -= 100;
                $jumlahPecahan["Rp. 100"]++;
            }

            return $jumlahPecahan;
        }

        $hasil = koin($uang);
        echo "<h2>Hasil Koin:</h2>";
        foreach ($hasil as $koin => $jumlah) {
            if ($jumlah > 0) {
                echo "<span>$koin:</span> $jumlah buah <br>";
            }
        }
    }
    ?>
</body>
</html>
