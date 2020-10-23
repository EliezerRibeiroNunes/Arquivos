<?php

$num1=0;
$num2=0;
$tipo=0;


$calcula= new Calc($tipo);

$calcula->escolha_operacao($tipo);
$calcula->number1($num1);
$calcula->number2($num2);
$calcula->acao();


echo "OPERAÇÕES MATEMÁTICAS:\n";
echo "===somar===\n";
echo "===subtrair===\n";
echo "===dividir===\n";
echo "===multiplicar===\n"; 

$tipo = readline("escolha uma das operações matemáticas acima: \n");
$num1 = readline("insira um número: \n");
$num2 = readline("insira outro número: \n");


class Calc
{
    public $num1;
    public $num2;
    public $valorfinal;
    public $escolha;
    public $op;

    public function _construct($op){
        $this->op = $op;
    }
    public function escolha_operacao(){

        switch ($this->escolha)
            {
            
            case 'somar':
                $this->soma();
                break;
            case 'subtrair':
                $this->subtrai();
                break;
            case 'dividir':
                $this->dividi();
                break;
            case 'multiplicar':
                $this->multiplica();
                break;
        }
    }

    //captura de dados:
    public function number1($num1){
        $this->num1=$num1;
    }
    public function number2($num2){
        $this->num2=$num2;
    }

    //operações:
    public function soma(){
        $this->valorfinal = $this->num1 + $this->num2;
    }

    public function subtrai(){
        $this->valorfinal = $this->num1 - $this->num2;
    }

    public function multiplica(){
        $this->valorfinal = $this->num1 * $this->num2;
    }

    public function dividi(){
        $this->valorfinal = $this->num1 / $this->num2;
    }

    public function acao(){
        $this->op->escolha_operacao();
        echo "Resultado: ", $this->op->valorfinal;
    }

    public function total(){
        return $this->valorfinal;
    }
}
