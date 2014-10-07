<?php

/**
 * @package /app/dao/ClienteDAO.php
 * 
 * MVC : DAO
 * object : Cliente
 * 
 * @since on 18/09/2014
 * 
 * @author Igor Cesar <mixplick87@gmail.com>
 * @version 1.0.0 (18/09/2014 | 16:36)
 * 
 */
class ClienteDAO {

    // constructor
    public function ClienteDAO() {
        
    }

    public function addCliente(Cliente $cliente) {
        $sqlQuery = "INSERT INTO `mydb`.`cliente`
                (
                `nome`,
                `email`,
                `ddd`,
                `fone`,
                `ramal`,
                `endereco`,
                `numero`,
                `complemento`,
                `bairro`,
                `cidade_id`,
                `estado_id`,
                `cep`,
                `tipo_end`,
                `tipo_fone`,
                `tipo_cliente`,
                `cnpj`,
                `cpf`,
                `inscr_estadual`,
                `senha`)
                VALUES
                ("
                . "'" . $cliente->getNome() . "',"
                . "'" . $cliente->getEmail() . "',"
                . "'" . $cliente->getDdd() . "',"
                . "'" . $cliente->getFone() . "',"
                . "'" . $cliente->getRamal() . "',"
                . "'" . $cliente->getEndereco() . "',"
                . "'" . $cliente->getEnderecoNum() . "',"
                . "'" . $cliente->getEnderecoComplemento() . "',"
                . "'" . $cliente->getBairro() . "',"
                . $cliente->getCidadeId() . ","
                . $cliente->getEstadoId() . ","
                . "'" . $cliente->getCep() . "',"
                . "'" . $cliente->getTipoEndereco() . "',"
                . "'" . $cliente->getTipoFone() . "',"
                . "'" . $cliente->getTipoCliente() . "',"
                . "'" . $cliente->getCnpj() . "',"
                . "'" . $cliente->getCpf() . "',"
                . "'" . $cliente->getInscrEstadual() . "',"
                . "'" . $cliente->getSenha() . "' "
                . ")";


        $conexao = new Conexao();
        $conexao->conecta();
        $rs = $conexao->executeUpdate($sqlQuery);
        $conexao->desconecta();
    }

}
