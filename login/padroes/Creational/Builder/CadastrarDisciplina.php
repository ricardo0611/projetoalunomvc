<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Disciplina;

/**
 * Director is part of the builder pattern. It knows the interface of the builder
 * and builds a complex object with the help of the builder
 *
 * You can also inject many builders instead of one to build more complex objects
 */
class CadastrarDisciplina
{
    public function build(BuilderDisciplina $builder): Disciplina
    {
        $builder->criarDisciplina();
        $builder->addTurno();
        $builder->addProfessor();
        $builder->addNome_Disciplina();
        $builder->addCodigo();
        $builder->addCargaHoraria();
        $builder->addQuantidade_Creditos();

        return $builder->obterDisciplina();
    }
}
