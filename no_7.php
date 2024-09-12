<?php


function wrapText($text) {
    $totalKata = str_split($text);


    if (count($totalKata) > 50) {
        $text = substr($text, 0 , 50);
        $text .= "...";
        echo "(Jumlah Huruf diatas adalah " . count($totalKata) . " Huruf Maksimal Output Hanya 50)" , "<br>";
        echo "<b>Kalimat Baru : </b>";
        echo $text;
    }else {
        echo "<b>Kalimat Baru : </b>";
        echo $text;
    }

}

$text = "lorem Ips et dolor sit amet, consectetur adipis ac mag meaning et quasi architecto ";

echo "<b>Kalimat awal : </b> " . $text . "</br>";
wrapText($text)

?>