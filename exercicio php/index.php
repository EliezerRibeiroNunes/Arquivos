<?php

$number1=$_POST['number1'];
$number2=$_POST['number2'];

$soma = $number1 + $number2;
$subtrai = $number1 - $number2;
$multiplica = $number1 * $number2;
$divide = $number1 / $number2;


echo "O resultado da soma dos numeros eh :<br> $soma";
echo "O resultado da subtração dos numeros eh :<br> $subtrai";
echo "O resultado da multiplicação  dos numeros eh :<br> $multiplica";
echo "O resultado da divisão  dos numeros eh :<br> $divide";