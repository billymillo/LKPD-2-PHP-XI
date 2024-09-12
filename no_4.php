<?php
$row = 4;
$column = 8;

function pattern($row, $column)
{
    for ($i = 0; $i < $row; $i++) {
        for ($c = 0; $c < $column; $c++) {
            echo "0 ";
        }
        echo "<br>";
    }
}

pattern($row, $column);
echo "<br>";
pattern($row, $column);
?>