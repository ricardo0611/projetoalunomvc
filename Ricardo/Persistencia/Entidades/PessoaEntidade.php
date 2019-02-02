<?php

namespace Ricardo\Persistencia\Entidades;
 
class PessoaEntidade {
	private $id;

	private $nome;

    private $tipo;

    function __construct($id = 0, $nome = '', $tipo = ''){
        $this->id = $id;
    	$this->nome = $nome;
    	$this->tipo = $tipo;
    }

    // function __construct($id = 0, $nome = '', $tipo = ''){
    //     $this->id = $id;
    //     $this->nome = $nome;
    //     $this->tipo = $tipo;
    //     $this->idade = $idade;
    //     $this->cpf = $cpf;
    //     $this->rg = $rg; 

    // }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
}