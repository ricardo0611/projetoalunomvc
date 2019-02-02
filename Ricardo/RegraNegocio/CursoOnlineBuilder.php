<?php

namespace Ricardo\RegraNegocio;

use Ricardo\Persistencia\DataAccess\CursoDAO;
use Ricardo\Persistencia\Entidades\CursoEntidade;

/**
 * Class FogueteModeloIIBuilder
 * @package Builder
 */
class CursoOnlineBuilder extends CursoBuilder
{
    
    function construirCurso($nome, $tipo, $numeroAlunos){
        $this->curso = new CursoEntidade($nome,"Online", $numeroAlunos);

    	return $this->cursoDAO->cadastrar($this->curso);
    }

    function atualizar($id, $nome, $numeroAlunos)
    {
    	$this->curso = new CursoEntidade($nome, "Online", $numeroAlunos, $id);
    	return $this->cursoDAO->atualizar($this->curso);
    }

}