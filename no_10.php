<?php
// Variadic function menerima argumen dalam jumlah tak terbatas
function tentukanJawaban($name, ...$nilaiUser) {
    $kunci = ['A', 'B', 'C', 'D', 'E', "B", "C", "D", "E", "A"];
    $nilai = [];
    
    foreach($kunci as $key => $value) {
        if($nilaiUser[$key] == $value) {
            $nilai[$key] = "benar";
        }else {
            $nilai[$key] = "salah";
        }
    }   
    
    
    echo "Nama : $name <br/>";
    echo "Jumlah Benar : " . count(array_keys($nilai, "benar")) . "<br/>";
    echo "Jumlah Salah : " . count(array_keys($nilai, "salah")) . "<br/>";
    print_r($nilai);
}
tentukanJawaban("Samsu", 'A', 'B', 'C', 'D', 'E', "A", "B", "C", "D", "E");
?>