<?php

Class Funcionario{

    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;

    


    public function recebeAumento(){
        $salarioAumentado = $salario * 0,1;
}



    public function calculaGanhoAnual(){
        $salarioAnual = $salario * 12;
    }




}


-----
    
    
    <?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 12/11/2018
 * Time: 16:30
 */



}//fim da classe


//TESTE

//$clayton = new Funcionario();
//$clayton->departamento = "Informatica";
//$clayton->salario = 1000;
//$clayton->recebeAumento();
//$clayton->mostra();
//
//
//
//$crys = new Funcionario();
//$crys->departamento = "Gerencia";
//$crys->salario = 9000;
//print_r($crys);




  //Questao 12

public function informarDataEntrada(Data $data){

    if($data->dia > 31 || $data->mes > 12){
    
        echo "data incorreta";
    
    }else{
    
        $this->dataEntrada = $data;
    
    }

}

Class Funcionario{

    public $departamento;
    public $salario;
    public $dataEntrada;
    public $CPF;

    public function recebeAumento(){
        $aumento = $this->salario * 0.1;
        $this->salario = $this->salario + $aumento;
    }

    public function calculaGanhoAnual(){
        $salarioAnual = $this->salario * 12;
    }


    public function mostra(){
        echo "O funcionario do departamento {$this->departamento} tem o salario de {$this->salario} ... \n";
    }
    
    public function __toString(){
    
        return $this->mostra();
    
    }
