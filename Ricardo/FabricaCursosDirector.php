<?php

namespace Ricardo;

use Ricardo\RegraNegocio\CursoBuilder;
use Ricardo\Persistencia\Entidades\CursoEntidade;

/**
 * Class FabricaCursosDirector
 * @package Ricardo
 */
class FabricaCursosDirector
{
    /** @var CursoBuilder $construtorDeCursos */
    protected $construtorCurso;

    /**
     * FabricaCursosDirector constructor.
     * @param CursoBuilder $construtorDeCursos
     */
    public function __construct(CursoBuilder $construtorDeCursos)
    {
        $this->construtorCurso = $construtorDeCursos;
    }

    /**
     * Método responsável por construir o Curso.
     */
    public function construirCurso($nome, $tipo, $numero)
    {
        $this->construtorCurso->construirCurso($nome,$tipo, $numero);
    }

    public function getCurso()
    {
        return $this->construtorCurso->getCurso();
    }

    public function atualizar($id, $nome, $numeroAlunos)
    {
        return $this->construtorCurso->atualizar($id, $nomeCurso, $nome, $numeroAlunos);
    }

    public function excluirCurso($id)
    {
        return $this->construtorCurso->excluirCurso($id);
    }
}