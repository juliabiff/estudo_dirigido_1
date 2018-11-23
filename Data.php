<?php

  class Data{
    public $data;
    public $mes;
    public $ano;
    
    public function mostr(){
    
      return "{$this->data}/{$this->mes}/{$this->ano}";
    
    }
  }


