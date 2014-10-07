<?php
include '../../lib/conexao.class.php';
use lib\conexao;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cd_itprod = "631850";

        $con = new lib\conexao\conexao();
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
