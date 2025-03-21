<h1>Calculadora.php</h1>
<form method="post"action="calculadora.php">
    <label for="num1">Número 1:</label><br>
    <input type="number" id="num1" name="num1" required><br>

    <label for="num2">Número 2:</label><br>
    <input type="number" id="num2" name="num2" required><br>

    <label for="operacao">Operação:</label><br>
    <select id="operacao" name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br>

    <input type="submit" value="Calcular">

    <?php

if (isset($_POST{"numero1"})){

    echo "numero1 recebido vida POST:" .$_POST["numero1"];

}
?>

<?php

if (isset($_POST{"numero2"})){

    echo "numero2 recebido vida POST:" .$_POST["numero2"];

}
?>

<?php
if (isset($_POST{"operaçoes"})){


    echo "operaçoes recebida vida POST:" .$_POST["operaçoes"];

}
?>


<?php
if (isset($_POST["numero1"]) && isset($_POST["numero2"])  &&  isset($_POST["operaçoes"])){

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $operaçoes=$_POST["operaçoes"];


 if($operaçoes =="SOMA"){
       //codigo da soma 
       $resultado=$numero1+$numero2;

 }elseif($operaçoes =="SUBTRAÇÃO"){
      //codigo da subtração
      $resultado=$numero1-$numero2;


    }elseif($operaçoes =="MULTIPLICAÇÃO"){
        //codigo da multiplicação
        $resultado=$numero1*$numero2;

      
    }elseif($operaçoes =="DIVISÃO"){;
        //codigo da divisão
        $resultado=$numero1/$numero2;

 }

 
 echo "resultado: " .$resultado;

}
?>
</form>


