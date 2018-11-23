<?php

  public function mostra(){
  
    return "O funcionario do departamento {$this->departamento}, funcionario desde {$this->dataEntrada} possui salario de {$this->salario}.";
   
  }

  public function __toString(){
  
  return $this->mostra()
  
  }














?>
