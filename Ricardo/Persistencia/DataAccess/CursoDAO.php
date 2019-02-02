<?php

namespace Ricardo\Persistencia\DataAccess;

use Ricardo\Persistencia\DataAccess\Conexao;
use Ricardo\Persistencia\Entidades\CursoEntidade;

class CursoDAO {  //Padrão DAO aplicado para consultas no SGBD 

    private $db;

    function __construct() {
        $this->db = Conexao::getInstance();
    }

    public function cadastrar(CursoEntidade $entidade) {
        $sql = "insert into cursos (NomeCurso, Tipo, NumeroAlunos) values (";
        $sql .= '\''.$entidade->getNome().'\',';
        /*$sql .= '\''.$entidade->getNome().'\',';*/
        $sql .= '\''.$entidade->getTipo().'\',';
        $sql .= $entidade->getNumeroAlunos();
        $sql .= ')';

        if($this->db->query($sql) === false){
            die("Error: " . $this->db->error);
        }
    }

    function atualizar(CursoEntidade $entidade){
	    	
   	    $sql = "update cursos set "; 
	   	$sql .= 'NomeCurso = \''.$entidade->getNomeCurso().'\',';
	   	$sql .= 'Nome = \''.$entidade->getNome().'\',';
	   	$sql .= 'Tipo = \''.$entidade->getTipo().'\',';
	   	$sql .= 'numeroAlunos = \''.$entidade->getNumeroAlunos().'\',';
	   	$sql = 'WHERE Id = ' .$entidade->getCursoPorId($id);
 
		 if($this->db->query($sql) === false){
		  echo "Sucesso: Atualizado corretamente!";
		}else{
		  echo "Aviso: Não foi atualizado!";
		}
	}


    function excluirCurso($id){
    	$sql = "DELETE FROM cursos WHERE Id =" .$id;

        if($this->db->query($sql) !== false){
          echo "Sucesso: Atualizado corretamente!";
        }else{
          echo "Aviso: Não foi atualizado!";
        }
    }

    function getCursos(){
    	$sql = "select * from cursos";
    	$objs = $this->db->query($sql);
    	$entidades = array();
    	foreach ($objs as $obj) {
    		$entidades[] = new CursoEntidade($obj['NomeCurso'], $obj['Tipo'], $obj['NumeroAlunos'], $obj['Id']);
    	}
    	return $entidades;
    }

    function getCursoPorId($id){
    	$sql = "select * from cursos WHERE Id = " .$id;
    	$objs = $this->db->query($sql);
    	$entidades = array();
    	foreach ($objs as $obj) {
    		$entidades[] = new CursoEntidade($obj['NomeCurso'], $obj['Tipo'], $obj['NumeroAlunos'], $obj['Id']);
    	}
    	return $entidades;
    }
}