<?php

namespace DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Disciplina;

interface BuilderDisciplina
{
    public function criarDisciplina($nome, $codigo, $turno, $tipo, $professor, $carga_horaria, $quant_creditos);

    public function obterDisciplina(): Disciplina; //get


    /*
	
	public function addTurno($matutino, $vespertino, $noturno);

    public function addProfessor($nome_professor);

    public function addNome_Disciplina();

    public function addCodigo();

    public function addCargaHoraria();

    public function addQuantidade_Creditos();

    */

}
