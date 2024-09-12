<?php
$list = ["pplg", "htl", "kln", "pmn", "pplg", "htl", "kln", "pmn", "pplg",];

$newData = array_unique(array_map('strtoupper', $list));
foreach ($newData as $value) {
    echo $value;
    echo "</br>";
}

print_r($newData);

// echo "<br>";
// print_r($newData);
// echo "<br>";
// print_r($list);