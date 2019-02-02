<?php

namespace Ricardo\RegraNegocio;

use Ricardo\Persistencia\DataAccess\CursoDAO;
use Ricardo\Persistencia\Entidades\CursoEntidade;

/**
 * Class FogueteModeloIBuilder
 * @package Builder
 */
class CursoPresencialBuilder extends CursoBuilder
{

    function construirCurso($nome, $tipo, $numeroAlunos){
    	$this->curso = new CursoEntidade($nome, "Presencial", $numeroAlunos);
    	return $this->cursoDAO->cadastrar($this->curso);
    }

    function atualizar($id, $nome, $numeroAlunos)
    {
    	$this->curso = new CursoEntidade($nome, "Presencial", $numeroAlunos, $id);
    	return $this->cursoDAO->atualizar($this->curso);
    }
}