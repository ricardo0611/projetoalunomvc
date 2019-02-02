<?php

namespace Ricardo\Persistencia\DataAccess;

use Ricardo\Persistencia\DataAccess\Conexao;
use Ricardo\Persistencia\Entidades\UsuarioEntidade;

class UsuarioDAO 
{ 

    private $db;

    function __construct() {
        $this->db = Conexao::getInstance();
    }

    public function cadastrar(UsuarioEntidade $entidade) {
        $sql = "insert into tabela_login (pessoa_id, usuario, senha, pagina) values (";
        $sql .= $entidade->getPessoaId() . ",";
        $sql .= "'{$entidade->getUsuario()}',";
        $sql .= "'{$entidade->getSenha()}',";
        $sql .= "'{$entidade->getPagina()}')";

        if($this->db->query($sql) === false){
            die("Error: " . $this->db->error);
        }

        return $this->db->insert_id;
    }

    function getPorLogin($usuario, $senha){
        $sql = "select * from tabela_login WHERE usuario = '{$usuario}' and senha = '{$senha}'";
        $objs = $this->db->query($sql);
        $entidades = array();
        foreach ($objs as $obj) {
            return new UsuarioEntidade($obj['id'], $obj['pessoa_id'], $obj['usuario'], $obj['senha'], $obj['pagina']);
        }
        return false;
    }
}