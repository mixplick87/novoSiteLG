<?php

/**
 * @package /app/model/Cliente.php
 * 
 * MVC : model
 * object : Cliente
 * 
 * @since on 18/09/2014
 * 
 * @author Igor Cesar <mixplick87@gmail.com>
 * @version 1.0.0 (18/09/2014 | 15:40)
 * 
 */
class Cliente {

    var $email;
    var $ddd;
    var $fone;
    var $ramal;
    var $endereco;
    var $enderecoNum;
    var $enderecoComplemento;
    var $bairro;
    var $cidadeNome;
    var $estadoNome;
    var $cep;
    var $tipoEndereco;
    var $tipoFone;
    var $tipoCliente;
    var $cnpj;
    var $cpf;
    var $inscrEstadual;
    var $senha;

    /**
     * 
     * @internal function automatica para set's de qualquer variavel Cliente
     * 
     * @param Variavel $param
     * @param Valor $value
     * 
     * @example app/modelo/Cliente.php Cliente::set(parametro, valor)
     */
    function __set($param, $value) {
        $this->$param = $value;
    }

    /**
     * * @internal function automatica para get's de qualquer variavel Cliente
     * 
     * @param Variavel $var
     * @return Variavel->valor
     * 
     * @example app/modelo/Cliente.php Cliente::get(variavel)
     */
    function __get($var) {
        return $this->$var;
    }

    /**
     *
     * @internal Metodos get's e set's
     * 
     */

    /**
     * 
     * @return int [id]
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 
     * @param int $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * 
     * @return String [nome]
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * 
     * @param String $nome
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * 
     * @return String [email]
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 
     * @param String $email
     */
    public function setEmail($email) {
        $this->email = $email;
    }

    /**
     * 
     * @return int [ddd]
     */
    public function getDdd() {
        return $this->ddd;
    }

    /**
     * 
     * @param int $ddd
     */
    public function setDdd($ddd) {
        $this->ddd = $ddd;
    }

    /**
     * 
     * @return long [telefone]
     */
    public function getFone() {
        return $this->fone;
    }

    /**
     * 
     * @param long $fone
     */
    public function setFone($fone) {
        $this->fone = $fone;
    }

    /**
     * 
     * @return int [ramal]
     */
    public function getRamal() {
        return $this->ramal;
    }

    /**
     * 
     * @param int $ramal
     */
    public function setRamal($ramal) {
        $this->ramal = $ramal;
    }

    /**
     * 
     * @return String [endereço]
     */
    public function getEndereco() {
        return $this->endereco;
    }

    /**
     * 
     * @param String $endereco
     */
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    /**
     * 
     * @return String [número endereço]
     */
    public function getEnderecoNum() {
        return $this->enderecoNum;
    }

    /**
     * 
     * @param String $enderecoNum
     */
    public function setEnderecoNum($enderecoNum) {
        $this->enderecoNum = $enderecoNum;
    }

    /**
     * 
     * @return String [Complemento endereço]
     */
    public function getEnderecoComplemento() {
        return $this->enderecoComplemento;
    }

    /**
     * 
     * @param String$enderecoComplemento
     */
    public function setEnderecoComplemento($enderecoComplemento) {
        $this->enderecoComplemento = $enderecoComplemento;
    }

    /**
     * 
     * @return String [Bairro]
     */
    public function getBairro() {
        return $this->bairro;
    }

    /**
     * 
     * @param String $bairro
     */
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    /**
     * 
     * @return String [Cidade]
     */
    public function getCidadeNome() {
        return $this->cidadeNome;
    }

    /**
     * 
     * @param String $cidadeNome
     */
    public function setCidadeNome($cidadeNome) {
        $this->cidadeNome = $cidadeNome;
    }

    /**
     * 
     * @return String [Estado]
     */
    public function getEstadoNome() {
        return $this->estadoNome;
    }

    /**
     * 
     * @param String $estadoNome
     */
    public function setEstadoNome($estadoNome) {
        $this->estadoNome = $estadoNome;
    }

    /**
     * 
     * @return long [cep]
     */
    public function getCep() {
        return $this->cep;
    }

    /**
     * 
     * @param long $cep
     */
    public function setCep($cep) {
        $this->cep = $cep;
    }

    /**
     * 
     * @return String [Tipo endereço]
     */
    public function getTipoEndereco() {
        return $this->tipoEndereco;
    }

    /**
     * 
     * @param String $tipoEndereco
     */
    public function setTipoEndereco($tipoEndereco) {
        $this->tipoEndereco = $tipoEndereco;
    }

    /**
     * 
     * @return String [Tipo telefone]
     */
    public function getTipoFone() {
        return $this->tipoFone;
    }

    /**
     * 
     * @param String $tipoFone
     */
    public function setTipoFone($tipoFone) {
        $this->tipoFone = $tipoFone;
    }

    /**
     * 
     * @return long [cpf]
     */
    public function getCpf() {
        return $this->cpf;
    }

    /**
     * 
     * @param Long $cpf
     */
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    /**
     * 
     * @return String [Senha]
     */
    public function getSenha() {
        return $this->senha;
    }

    /**
     * 
     * @param String $senha
     */
    public function setSenha($senha) {
        $this->senha = $senha;
    }

}
