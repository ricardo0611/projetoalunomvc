<?php

namespace Ricardo\Persistencia\DataAccess;

use Ricardo\Persistencia\DataAccess\Conexao;
use Ricardo\Persistencia\Entidades\PessoaEntidade;

class PessoaDAO {  //Padrão DAO aplicado para consultas no SGBD 

    private $db;

    function __construct() {
        $this->db = Conexao::getInstance();
    }

    public function cadastrar(PessoaEntidade $entidade) {
        $sql = "insert into pessoas (nome, tipo) values (";
        $sql .= '\''.$entidade->getNome().'\',';
        $sql .= '\''.$entidade->getTipo().'\'';
        $sql .= ')';

        if($this->db->query($sql) === false){
            die("Error: " . $this->db->error);
        }

        return $this->db->insert_id;
    }

    function atualizar(PessoaEntidade $entidade){
	    	
   	    $sql = "update pessoas set "; 
	   	$sql .= 'nome = \''.$entidade->getNome().'\',';
	   	$sql .= 'tipo = \''.$entidade->getTipo().'\',';
	   	$sql .= 'WHERE id = '.$entidade->getId($id);
 
		 if($this->db->query($sql) === false){
		  echo "Sucesso: Atualizado corretamente!";
		}else{
		  echo "Aviso: Não foi atualizado!";
		}
	}

    function excluirPessoa($id){
    	$sql = "DELETE FROM pessoas WHERE id =" .$id;
    }

    function getPessoaPorId($id){
    	$sql = "select * from pessoas WHERE id = " .$id;
    	$objs = $this->db->query($sql);
    	$entidades = array();
    	foreach ($objs as $obj) {
    		$entidades[] = new PessoasEntidade($obj['id'], $obj['nome'], $obj['tipo']);
    	}
    	return $entidades;
    }
}