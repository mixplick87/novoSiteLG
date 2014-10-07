<?php
namespace lib\conexao;

class conexao {

    // Coloque aqui as Informações do Banco de Dados
    var $host = "localhost";
    var $user = "usuario"; # Usuário no Host/Servidor
    var $pass = "senha"; # Senha no Host/Servidor
    var $dbase = "banco"; # Nome do seu Banco de Dados    
    var $query;
    var $link;
    var $resultado;
    var $row;

    function MySQL() {
        // Instancia o Objeto para usarmos
    }

    // Cria a função para Conectar ao Banco MySQL


    function conecta() {
        $this->link = @mysql_connect($this->host, $this->user, $this->pass);
        // Conecta ao Banco de Dados
        if (!$this->link) {
            // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro na conexão MySQL:";
            print "<b>" . mysql_error() . "</b>";
            die();
        } elseif (!mysql_select_db($this->dbase, $this->link)) {
            // Seleciona o banco após a conexão
            // Caso ocorra um erro, exibe uma mensagem com o erro
            print "Ocorreu um Erro em selecionar o Banco:";
            print "<b>" . mysql_error() . "</b>";
            die();
        }
    }

    // Cria a função para query no Banco de Dados
    function sql_query($query) {
        $this->conecta();
        $this->query = $query;
        // Conecta e faz a query no MySQL
        if ($this->resultado = mysql_query($this->query)) {
            $this->desconnecta();
            return $this->resultado;
        } else {
            // Caso ocorra um erro, exibe uma mensagem com o Erro

            print "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
            print "<br /><br />";
            print "Erro no MySQL: <b>" . mysql_error() . "</b>";
            die();
            $this->desconnecta();
        }
    }

    function sql_fetch_array() {
        $this->conecta();
        if ($this->row = mysql_fetch_array($this->resultado)) {
            $this->desconnecta();
            return $this->row;
        } else {
            print "Ocorreu um erro ao executar a sql fetch array: <b>$this->resultado</b>";
            print "<br /><br />";
            print "Erro no MySQL: <b>" . mysql_error() . "</b>";
            die();
            $this->desconnecta();
        }
    }

    // Cria a função para Desconectar ao Banco MySQL
    function desconnecta() {
        return mysql_close($this->link);
    }

}
