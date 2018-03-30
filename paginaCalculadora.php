<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Calculadora PHP </title>
    </head>
    <body>
        <form method="post" action ="Calculadora.php">
            Num1: <input type="number" name="num1" value=""><br>
            Num2: <input type="number" name="num2" value=""><br>
             
            <select name= "operacoes"> 
                <option value="somar">soma</option>
                <option value="subtrair">subtracao</option>   
                <option value ="dividir">divisao</option>
                <option value="multiplicar"> multiplicacao</option>
             </select><br> 
             <input type="submit" value="Calcular" name=" BtCalcular" />
        </form>
    </body>
</html>
