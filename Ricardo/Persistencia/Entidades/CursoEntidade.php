<?php

namespace Ricardo\Persistencia\Entidades;
 
class CursoEntidade {
	private $id;

	private $nome;

    private $tipo;

    private $numeroAlunos;

    function __construct($nome = '', $tipo = '', $numeroAlunos = 0, $id = 0){
        $this->id = $id;
    	$this->nome = $nome;
    	$this->tipo = $tipo;
    	$this->numeroAlunos = $numeroAlunos;
    }

    /*GETTERS*/
    
    public function getId(){
        return $this->id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function getNumeroAlunos(){
        return $this->numeroAlunos;
    }

    public function getNome(){
        return $this->nome;
    }

    /*SETTERS*/

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setId($id){
        $this->id = $id;
    }
    public function setNumeroAlunos($numero){
        $this->numeroAlunos = $numero;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function __toString()
    {
        $result = "Nome do Curso {$this->getNome()}\n";
        $result .= "Tipo: {$this->getTipo()}\n";
        $result .= "Número de alunos: {$this->getNumeroAlunos()}\n";
        return $result;
    }
}