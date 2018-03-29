<?php
include ("./paginaCalculadora.php");

 if (isset($POST)){
     
    $valor1 = $POST['num1'];
    $valor2 = $POST['num2'];
    $operacoes = $POST['operacoes'];
    $result;
    
  
     is_numeric($valor1)&& is_numeric($valor2);
    
    
    function funcaoSomar(){
        $result = $valor1 + $valor2;
        echo $result;
    }
    
    function funcaoSubtrair(){
        $result = $valor1 - $valor2;
        echo $result;
    }
    function funcaoMultiplicar(){
      $result = $valor1 * $valor2;
        echo $result;
    }
    function funcaoDividir(){
         $result = $valor1 / $valor2;
        echo $result;
    }
    
        if ($operacoes == 'soma'){
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
 }
 
                      
     



