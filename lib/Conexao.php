<?php

/**
 * @package /lib/Conexao.php
 * 
 * @since on 18/09/2014
 * 
 * @author Igor Cesar <mixplick87@gmail.com>
 * @version 1.0.0 (18/09/2014 | 16:46)
 * 
 */
class Conexao {

    var $host;
    var $user;
    var $pass;
    var $dbname;
    var $data;
    var $db;
    var $saida;
    var $status;
    var $entrada;

    function Conexao() {
        
    }

    public function conecta() {
        $this->status = 0;
        $this->host = "SERVIDOR";
        $this->user = "LOGIN_BANCO";
        $this->pass = "SENHA_BANCO";
        $this->dbname = "NOME_DB";
        $this->db = mysql_connect($this->host, $this->user, $this->pass);

        if (!$this->db) {
//  echo "Erro ao conectar no banco".trigger_error(mysql_error(),E_USER_ERROR);
            echo "Erro ao conectar no banco" . mysql_error();
        } else {
//echo "Conectado no banco";
            $this->status = 1;
        }
        mysql_select_db($this->dbname, $this->db);
        mysql_set_charset('utf8');
    }

    public function executeQuery($query) {
        if ($this->status == 1) {
//echo "lista...";
            if ($this->saida = mysql_query($query)) {
// echo 'Rs loaded';
                return $this->saida;
            } else {
                echo "<pre class=\"error\">";
                echo "SQL ERROR: " . mysql_error();
                echo "SQL : " . $query;
                echo "</pre>";
                desconecta();
            }
        }
    }

    public function executeUpdate($query) {
        if ($this->status == 1) {
            if ($this->entrada = mysql_query($query)) {
                return true;
            } else {
                echo "<pre class=\"error\">";
                echo "SQL ERROR: " . mysql_error();
                echo "</pre>";
                desconecta();
                return false;
            }
        }
    }

    function desconecta() {
        return mysql_close($this->db);
    }

}
