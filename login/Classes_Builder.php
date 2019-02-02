<?php
  // implementação das classes de "fabrica"
  abstract class Disciplina{
    protected $tipo; //tipo
    protected $codigo; //cod. disciplina
    protected $nome; //nome da ddisciplina
    protected $curso;
	
	abstract protected function cad_disciplina($_tipo, $_codigo, $_professor, $_nome);
	
	protected function getDados($codigo){

	}
  }
  
  // classes filhas
  
  class Presencial extends Disciplina{
    
    private $turno; //OutraVariave

	public function setTurno($_turno){
	  $this -> turno = $_turno;
	  return $this;
	}

	public function setCargaHoraria($_carga_horaria){
	  $this -> cargaHoraria = $_carga_horaria;
	  return $this;
	}
	
	public function setQtdCreditos($_qtd_creditos){
	  $this -> qtdCreditos = $_qtd_creditos;
	  return $this;
	}

	public function cad_disciplinas($codigo, $professor, $nome){ //cad_veic
	  parent :: cad_disciplina('Presencial', $codigo, $professor, $nome);
	}
	
	public function dados_disciplina(){ //dados_veic
	  echo 'Nome Disciplina: '.$this -> nome.'Código: '.$this -> codigo.' Professor: '.$this -> professor.' Turno: '.$this -> turno. 'Carga Horaria: '.$this ->cargaHoraria .'Creditos:' .$this-> qtdCreditos .'Tipo da Disciplina:'.$this-> tipo;
	}
  }
  
  class Distancia extends Disciplina{
    private $site;



	
	/*public function setPorta($_num_portas){ //serPortas -> Funções Set
	  $this -> num_portas = $_num_portas;
	  return $this;
	}

	public function setTurno($_turno){
	  $this -> turno = $_turno;
	  return $this;
	}*/

	// public function setCargaHoraria($_carga_horaria){
	//   $this -> cargaHoraria = $_carga_horaria;
	//   return $this;
	// }
	
	// public function setQtdCreditos($_qtd_creditos){
	//   $this -> qtdCreditos = $_qtd_creditos;
	//   return $this;
	// }
	
	// public function cad_disciplinas($codigo, $professor, $nome){  //Função para realizar Cadastro do veiculo
	//   parent :: cad_disciplina('Distancia', $codigo, $professor, $nome);
	// }

	// public function dados_disciplina(){   //Função para exibir os dados do veículo
	//   echo 'Código da Disciplina:'.$this -> codigo.'Disciplina: '.$this -> nome.'Professor: '.$this -> professor.'Qtde Creditos: '.$this -> qtdCreditos .'Tipo da Disciplina:'.$this-> tipo;
	  
	// }	
  }
  
  /*class moto extends veiculo{
	public function cad_veicu($ano, $cor){
	  parent :: cad_veic('moto', $ano, $cor);
	}
	public function dados_veic(){
	  echo 'Tipo: '.$this -> tipo.' Ano: '.$this -> ano.' Cor: '.$this -> cor.' <br>Bela moto!!!! ';
	}  
  }*/
  
  // classe diretora
  
  class cadastrar_disciplinas{
    private $dados;
	public function le_dados($_dados){
	  $this -> dados = $_dados;
	  $this -> dados -> dados_disciplina();
	}
  }
?>

