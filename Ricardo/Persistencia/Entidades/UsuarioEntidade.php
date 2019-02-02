<?php

namespace Ricardo\Persistencia\Entidades;
 
class UsuarioEntidade {
	private $id;

    private $pessoaId;

	private $usuario;

    private $senha;

    private $pagina;

    function __construct($id = 0, $pessoaId = 0, $usuario = '', $senha = '', $pagina = ''){
        $this->id = $id;
        $this->pessoaId = $pessoaId;
    	$this->usuario = $usuario;
    	$this->senha = $senha;
        $this->pagina = $pagina;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getPessoaId(){
        return $this->pessoaId;
    }

    public function setPessoaId($pessoaId){
        $this->pessoaId = $pessoaId;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getPagina(){
        return $this->pagina;
    }

    public function setPagina($pagina){
        $this->pagina = $pagina;
    }
}