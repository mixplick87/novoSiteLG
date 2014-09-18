<?php

/**
 * @package /lib/PDOConnectionFactory.php
 * 
 * @since on 18/09/2014
 * 
 * @author Igor Cesar <mixplick87@gmail.com>
 * @version 1.0.0 (18/09/2014 | 17:39)
 * 
 */
class PDOConnectionFactory {

    public $con = null;
    public $dbType = "mysql";
    public $host = "localhost";
    public $user = "root";
    public $senha = "";
    public $db = "teste";
    public $persistent = false;

    public function PDOConnectionFactory($persistent = false) {
        // verifico a persistência da conexao
        if ($persistent != false) {
            $this->persistent = true;
        }
    }

    public function getConnection() {
        try {
            // realiza a conexão
            $this->con = new PDO($this->dbType . ":host=" . $this->host . ";dbname=" . $this->db, $this->user, $this->senha, array(PDO::ATTR_PERSISTENT => $this->persistent));
            // realizado com sucesso, retorna conectado
            return $this->con;
            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    // desconecta
    /**
     * @
     */
    
    public function Close() {
        if ($this->con != null) {
            $this->con = null;
        }
    }

}
