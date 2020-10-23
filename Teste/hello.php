<?php

class Pessoa{
    public $nome;
    public $peso=0;
    public $altura=0;

    public function get_nome($nome){
        $this->nome=$nome;
    }
    public function get_peso($peso){
        $this->peso=$peso;
    }
    public function get_altura($altura){
        $this->altura=$altura;
    }

}
class imc extends Pessoa{
    public $pessoa;
    public $valorimc;

    public function calculaimc(){
        $this->valorimc=$this->peso / ($this->altura * $this->altura);
    }
}