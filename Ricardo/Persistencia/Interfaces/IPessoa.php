<?php 

namespace Ricardo\Persistencia\Interfaces;

use Ricardo\Persistencia\Entidades\PessoaEntidade;

interface IPessoa
{
	public function cadastrar($nome);

	public function atualizarCadastro(PessoaEntidade $pessoa);

	public function excluirCadastro($idPessoa);

	public function getById($id);
}