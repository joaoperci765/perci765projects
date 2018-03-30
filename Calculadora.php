<?php
include ("./paginaCalculadora.php");

 if (isset($_POST)){
     
    $valor1 = $_POST['num1'];
    $valor2 = $_POST['num2'];
    $operacoes = $_POST['operacoes'];
     
        if ($operacoes == 'somar'){
        funcaoSomar();
    }
        else if($operacoes == 'subtracao'){
        funcaoSubtrair(); 
    }
        else if($operacoes == 'multiplicacao'){
        funcaoMultiplicar();
    }
        else if($operacoes == 'divisao'){
        funcaoDividir();
    }
    //Expressões das Funções:
    
    function validar($valor1,$valor2){
    return is_numeric($valor1)&& is_numeric($valor2);
    }

    function funcaoSomar($valor1,$valor2){
      validar();
      $result =($valor1 - $valor2);
      return $result;
    }

    function funcaoSubtrair($valor1,$valor2){
        validar();
        $result =($valor1 - $valor2);
        echo $result;   
    }
    function funcaoMultiplicar($valor1,$valor2){
        validar();
        $result = ($valor1 * $valor2);
        echo $result;

    }
    function funcaoDividir($valor1,$valor2){
        validar();
        $result = ($valor1 / $valor2);
        echo $result;
    }

 }
 ?>
 

                      
     



