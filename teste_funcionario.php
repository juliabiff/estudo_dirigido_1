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



$funcionario2 = new Funcionario();
$funcionario2->departamento = "2";

$data = new Data();
$data->dia = 4;
$data->mes = 4;
$data->ano = 1932;


        //Questao 11

$fucionarios->informarDataEntrada($data);

$funcinarios->cpf = "111.222.333-45";

echo $funcionarios->mostra();
