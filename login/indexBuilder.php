<?php

  require_once('classes_builder.php');
  
  $presencial = new Presencial;

  $presencial -> setTurno('Matutino') -> cad_disciplinas('1058','Marco Antônio','Fundamentos da Computação II');
  $presencial -> setTurno('Noturno') -> cad_disciplinas('1058','Marco Antônio','Fundamentos da Computação II');
  
  //Pode acessar a Presencial mudando o Turno, Carga horária e a Quantidade de Créditos

  

  $vis1 = new cadastrar_disciplinas;
  $vis2 = new cadastrar_disciplinas;

  $vis1 -> le_dados($presencial);
  echo "<hr>";
  $vis2 -> le_dados($presencial);
  









/*


  $distancia = new Distancia;
  
  $distancia -> setQtdCreditos('6') -> cad_disciplinas('2001','João','Fundamentos da Computação');
  $distancia -> setCargaHoraria('20') -> cad_disciplinas('2001','João','Fundamentos da Computação');

  $vis1 = new cadastrar_disciplinas;
  $vis1 -> le_dados($distancia);
  echo "<hr>";

*/


?>