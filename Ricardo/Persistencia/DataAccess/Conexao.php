<?php

namespace Ricardo\Persistencia\DataAccess;
 
use mysqli;

class Conexao {
 
    public static $instance; //Cria uma instância
 
    function __construct() {  //Constroi a conexão
        $host = "localhost";
        $user = "root";
        $pswd = "";
        $db = "playligas";

        try {   //realiza a conexão passando os dados para a função de conexao 
            $this->conn = mysqli_connect($host, $user, $pswd, $db);   
            $this->conn->set_charset('utf8');
        } catch (Exception $e) {
            die("Erro na conexão com MySQL! " . $e->getMessage());
        }
    }
    

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new mysqli("localhost", "root", "", "playligas");
            // Check connection
            if (self::$instance->connect_error) {
                die("Conexão falhou!" . self::$instance->connect_error);
            }
        }
        return self::$instance; //Retorna a instância de conexão com o banco de dados
    } 
} //Singleton