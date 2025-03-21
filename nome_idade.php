    <form method="POST"action="nome_idade.php">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">

    <br>

    <label for="idade">idade:</label>
    <input type="text" id="idade" name="idade">

    <button type="submit">Enviar</button>


    <?php

if (isset($_POST{"nome"})){

    echo "Nome recebido vida POST:" .$_POST["nome"];

}



if (isset($_POST{"idade"})){

    echo "Idade recebida vida POST:" .$_POST["idade"];

}

?>
    </form>