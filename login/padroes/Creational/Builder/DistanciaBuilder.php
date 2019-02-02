<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Disciplina;

class Distancia implements BuilderDisciplina
{
    /**
     * @var Parts\Car
     */
    private $distancia;

    public function addTurno()
    {
        $this->distancia->setPart('Matutino', new Parts\Turno());
        $this->distancia->setPart('Vespertino', new Parts\Turno());
        $this->distancia->setPart('Noturno', new Parts\Turno());

        echo "Disciplina distancia:" .$distancia;
    }

    public function addProfessor()
    {
        $this->distancia->setPart('Marco Antonio', new Parts\Professor());
        $this->distancia->setPart('Roldao', new Parts\Professor());
        $this->distancia->setPart('Fábio', new Parts\Professor());
    }

    public function addNome_Disciplina()
    {
        $this->distancia->setPart('CMP1049 - Fundamentos da Computação II', 
                                new Parts\Nome_Disciplina());
        $this->distancia->setPart('CMP1048 - TÉCNICAS DE PROGRAMAÇÃO I',
                                new Parts\Nome_Disciplina());
        $this->distancia->setPart('CMP1047 - ENGENHARIA DE REQUISITOS',
                                new Parts\Nome_Disciplina());
        $this->distancia->setPart('CMP1057 - ARQUITETURA DE COMPUTADORES I',
                                new Parts\Nome_Disciplina());
    }

    public function criarDisciplina()
    {
        $this->distancia = new Parts\Distancia();
    }

    public function obterDisciplina(): Disciplina
    {
        return $this->distancia;
    }
}
