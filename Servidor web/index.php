<?php

    $firstNumber = $_GET['firstNumber'];
    $secondNumber = $_GET['secondNumber'];

    $result= $firstNumber + $secondNumber;

    echo "O resultado da soma é $result";
    
    if ($result % 2 == 0){
        echo 'O resultado é par!!';
    }
    else {
        echo 'O resultado é impar!!';
    }