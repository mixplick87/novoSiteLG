<?php

$sql = mysql_connect("localhost", "root", "");


$cd_itprod = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($array as $i => $value) {
    unset($array[$i]);
}


print_r($cd_itprod);
//$query = "UPDATE ti_produtos SET tp_destaque = 'E' WHERE cd_itprod='$cd_itprod'";

//mysql_query($query);
$s = (24-15) + 9;

echo "<br>$s";