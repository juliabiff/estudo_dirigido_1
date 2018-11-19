<?php


Class Funcionario{

    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;



/*
    public function recebeAumento(){
        $salarioAumentado = $this->salario * 0,1;
}



    public function calculaGanhoAnual(){
        $salarioAnual = $this->salario * 12;
    }




}
*/
empregado recebe novo funcionario

}





------------------
    
    <?php

include "funcionario.php";

$funcionarios = new Funcionario();
$funcionarios->departamento = "1";
$funcionarios->salario = 250;
$funcionarios->dataEntrada = "22/10";
$funcionarios->CPF = "11-8171.765";
$funcionarios->mostra();



$funcionarios2 = new Funcionario();
$funcionarios2->departamento = "2";
