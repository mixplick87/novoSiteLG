<?php

namespace SiteLg\view\pages;


include '../../lib/conexao.class.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cd_itprod = "631850";

        $con = new \SiteLg\lib\conexao;
        $con->host = "localhost";
        $con->user = "root";
        $con->pass = "";
        $con->dbase = "lojasguaibim";
        $con->conecta();
        $con->sql_query("select * from ti_produtos where 1 and cd_itprod='$cd_itprod'");
        $con->sql_fetch_array();
        $vl_venda = $con->row['vl_venda'];
        $vl_promocao = $con->row['vl_promocao'];
        ?>

        <?= $con->row['nm_produto'] ?>

    </body>
</html>
