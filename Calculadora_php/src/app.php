<?php

require "Calc.php";


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




