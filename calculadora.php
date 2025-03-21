<h1>Calculadora.php</h1>
<form method="post"action="calculadora.php">
    <label for="numero1">Número 1:</label><br>
    <input type="number" id="numero1" name="numero1" required><br>

    <label for="numero2">Número 2:</label><br>
    <input type="number" id="numero2" name="numero2" required><br>

    <label for="operacao">Operação:</label><br>
    <select id="operacao" name="operacao" required>
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
    </select><br>

    <input type="submit" value="Calcular">

<?php
if (isset($_POST["numero1"]) && isset($_POST["numero2"])  &&  isset($_POST["operacao"])){

    $numero1=$_POST["numero1"];
    $numero2=$_POST["numero2"];
    $operacao=$_POST["operacao"];


 if($operacao =="soma"){
       //codigo da soma 
       $resultado=$numero1+$numero2;

 }elseif($operacao =="subtracao"){
      //codigo da subtração
      $resultado=$numero1-$numero2;


    }elseif($operacao =="multiplicacao"){
        //codigo da multiplicação
        $resultado=$numero1*$numero2;

      
    }elseif($operacao =="divisao"){;
        //codigo da divisão
        $resultado=$numero1 / $numero2;

 }

 
 echo "resultado: " .$resultado;

}
?>
</form>


