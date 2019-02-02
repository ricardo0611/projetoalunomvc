<?php

namespace Ricardo\RegraNegocio;

use Ricardo\Persistencia\Entidades\CursoEntidade;
use Ricardo\Persistencia\DataAccess\CursoDAO;

abstract class CursoBuilder
{
    /** @var CursoBuilder $curso */
    protected $curso;
    protected $cursoDAO;

    /**
     * CursoBuilder constructor.
     */
    public function __construct()
    {
        $this->curso = new CursoEntidade();
        $this->cursoDAO = new CursoDAO();
    }

    /**
     * @return CursoProduct
     */
    public function getCurso()
    {
        return $this->curso;
    }

    public function excluirCurso($id)
    {
        return $this->cursoDAO->excluirCurso($id);   
    }

    function getCursos(){
        return $this->cursoDAO->getCursos();
    }

    public function getCursoPorId($id)
    {
        return $this->cursoDAO->getCursoPorId($id);
    }

    abstract public function construirCurso($nome, $tipo, $numeroAlunos);

    abstract public function atualizar($id, $nome, $numeroAlunos);
}