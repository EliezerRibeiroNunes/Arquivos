<?php

$number1=$_GET['number1'];
$number2=$_GET['number2'];

$soma = $number1 + $number2;
$subtrai = $number1 - $number2;
$multiplica = $number1 * $number2;
$divide = $number1 / $number2;


echo "O resultado da soma dos numeros eh : $soma <br>";
echo "O resultado da subtração dos numeros eh : $subtrai <br>";
echo "O resultado da multiplicação  dos numeros eh : $multiplica <br>";
echo "O resultado da divisão  dos numeros eh : $divide <br>";