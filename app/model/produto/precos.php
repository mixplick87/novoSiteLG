<?php

/**
 * @package /app/model/produto/Preco.php
 * 
 * MVC : model
 * object : Preco
 * 
 * @since on 18/09/2014
 * 
 * @author Igor Cesar <mixplick87@gmail.com>
 * @version 1.0.0 (10/10/2014 | 11:24)
 * 
 */

namespace SiteLg\app\model\produto\preco;

class precos {

    var $vl_venda;
    var $vl_promocao;
    var $idpromocao;
    var $cd_itprod;
    var $cd_linha;
    var $cd_familia;
    var $tp_destaque;
    var $tp_frete;
    var $precoDesconto;

    function __construct($cd_itprod) {
        //chamar todas as outras functions para a construção do preço
        $var = array(precoDesconto => $this->precoDesconto);
        return $var;
    }

    function precoDesconto() {
        $this->precoDesconto = ($this->vl_venda * 100) / $this->vl_promocao;
        return $this->precoDesconto;
    }

}
