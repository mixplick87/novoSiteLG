<?php
//include "novoTopo.php";

include '../../lib/conexao.class.php';

$cd_itprod = "631850";
$con = new SiteLg\lib\conexao;
$con->host = "localhost";
$con->user = "root";
$con->pass = "";
$con->dbase = "lojasguaibim";
$con->conecta();
$con->sql_query("select * from ti_produtos where 1 and cd_itprod='$cd_itprod'");
$con->sql_fetch_array();
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="../css/ofertaDoDia.css" />
<link rel="stylesheet" href="../css/jquery.countdown.css" />

<!--HOME OFERTA DO DIA--> 

<div class="ofertaDoDia">
    <div class="ODDtopo">
        <div class="ODDrelogio"></div>
        <h1><strong>Oferta</strong> do Dia<br />
            <small>Todo dia uma oferta imperdível.</small></h1>
        <div class="ODDcontador">
            <p><strong>ESSA OFERTA ACABA EM:</strong></p>
            <div id="countdown" class="countdownHolder"> 
            </div>
            <p class="horas">horas</p><p class="minutos">minutos</p><p class="segundos">segundos</p>
        </div>
        <div style="clear:both"></div>
    </div>

    <div class="ODDesquerda">
        <img src="https://www.lojasguaibim.com.br/sistema/imgp/zoom/672702_1.jpg" width="300" height="300" alt="NOME DO PRODUTO" />

        <div class="boxSocial">


            <iframe src="//www.facebook.com/plugins/like.php?href=http://www.lojasguaibim.com.br/#URL-DO-PRODUTO&amp;width=190&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=21&amp;appId=603133489706627" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:21px;" allowTransparency="true"></iframe>
            <a href="https://twitter.com/share" class="twitter-share-button" data-text="#NOME-DO-PRODUTO" data-via="lojasguaibim" data-hashtags="facilassim" style="margin-left:30px;">Tuitar</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');</script>

        </div>

    </div>
    <div class="ODDdireita">
        <h2> <?= $con->row['nm_produto'] ?></h2>
        <!-- QUANDO O ESTOQUE CHEGAR EM ZERO, ADICIONAR A CLASSE esgotado // exemplo: <div class="ODDbox esgotado">  -->
        <div class="ODDbox">
            <div class="ODDsoHoje">Só hoje</div> 
            <div class="ODDtarjaEsgotado">ESGOTADO</div>
            <p class="ODDprecode">De: R$<?= $con->row['vl_venda'] ?></p>
            <p class="ODDporapenas">por apenas</p>
            <p class="ODDprecopor">R$<?= $con->row['vl_venda'] ?> <span>no boleto</span></p>
            <a href="#para-carrinho" class="ODDbotaoComprar">Comprar</a>
            <p class="ODDdesconto">Desconto de <strong>R$315,00</strong> (<strong>47,5%</strong>)</p>
        </div>
        <p class="ODDtextoLegal">Todo dia selecionamos um produto com uma oferta imperdível para você. O estoque é limitado e fica apenas 24 horas em promoção. Corra e aproveite! Cadastre-se na nossa newsletter para receber as ofertas no seu e-mail ou acompanhe pelo <a href="http://www.facebook.com/LojasGuaibim">Facebook</a> e <a href="http://www.twitter.com/LojasGuaibim">Twitter</a>.</p>
    </div>
    <div style="clear:both"></div>

    <div class="ODDmais">
        <h3><span>o que já passou por aqui</span></h3>
        <div class="linhaPreta"></div>
        <div class="ODDboxJaPassou">
            <div class="finalizado">FINALIZADO</div>
            <img src="https://www.lojasguaibim.com.br/sistema/imgp/zoom/672702_1.jpg" width="100" height="100" alt="NOME DO PRODUTO" />
            <h4>Smartphone Moto E Dual Chip (Tim) Câmera 5.0MP, Tela 4.3", Android 4.4, 4GB, Preto - MOTOROLA</h4>
            <p>apenas<br />
                <strong>R$299,00</strong></p>
        </div>


        <div class="ODDboxJaPassou">
            <div class="finalizado">FINALIZADO</div>
            <img src="https://www.lojasguaibim.com.br/sistema/imgp/zoom/672702_1.jpg" width="100" height="100" alt="NOME DO PRODUTO" />
            <h4>Smartphone Moto E Dual Chip (Tim) Câmera 5.0MP, Tela 4.3", Android 4.4, 4GB, Preto - MOTOROLA</h4>
            <p>apenas<br />
                <strong>R$299,00</strong></p>
        </div>


        <div class="ODDboxJaPassou">
            <div class="finalizado">FINALIZADO</div>
            <img src="https://www.lojasguaibim.com.br/sistema/imgp/zoom/672702_1.jpg" width="100" height="100" alt="NOME DO PRODUTO" />
            <h4>Smartphone Moto E Dual Chip (Tim) Câmera 5.0MP, Tela 4.3", Android 4.4, 4GB, Preto - MOTOROLA</h4>
            <p>apenas<br />
                <strong>R$299,00</strong></p>
        </div>


    </div>
    <div class="ODDnewsletter">
        <h3><span>não perca mais nenhuma oferta</span></h3>
        <div class="linhaBranca"></div>
        <p class="ODDtitulo"><strong>receba ofertas do dia no seu e-mail</strong><br />
            Seja o primeiro a saber das novas <br />
            ofertas e não perca AQUELE desconto.</p>
        <form action="" method="">
            <input type="text" placeholder="Digite seu nome" />
            <input type="email" placeholder="Digite seu e-mail" />
            <input type="submit" value="OK" />
        </form>
        <div style="clear:both"></div>
    </div>

</div>

<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="../js/jquery.countdown.js"></script>
<script src="../js/script.js"></script>

<?php // include "novoRodape.php"