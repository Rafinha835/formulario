<form action="upload.php" method="post"
enctype="multipart/form-data">
<label>Escolha um arquivo:</label>
<input type="file" name="arquivo">
<button type="submit">Enviar</button>
</form>


<?php

if($_SERVER["REQUEST_METHOD"]== "POST"){
    //verifica se um arquivo foi enviado

    if(isset($_FILES["arquivo"])&& $_FILES["arquivo"]["error"]==0){
        $arquivo=$_FILES["arquivo"];
        $nome=$arquivo["name"]; //Nome original do arquivo
        $tipo= $arquivo["type"]; //Tipo do original(MIME)
        $tamanho=$arquivo["size"]; //Tamanho em bytes
        $tmp=$arquivo["tmp_name"]; //Caminho temporário no servidor

        //Diretório onde o arquivo será salvo 
        $diretorio= "uploads/";


        //Caminho final do arquivo 
        $caminho_final= $diretorio.basename($nome);

        //Extensões permitidas
        $extensoes_premitidas=["jpg", "jpeg", "png","gif"];
        $extensao= strtolower(pathinfo($nome, PATHINFO_EXTENSION));


        //Valida a extensão 
        if(!in_array($extensao,$extensoes_premitidas)){
            echo "Erro: Tipo de arquivo não permitido!";
            exit;
        }

        //Move o arquivo para a direita final

        if(move_uploaded_file($tmp, $caminho_final)){

            echo"Upload realizado com sucesso! <br>";
            echo"<IMG SRC='".$caminho_final."'/>";

            echo "Arquivo salvo em: <a
            href=".$caminho_final.">".$caminho_final."</a>";

        } else{
            echo "Erro ao mover o arquivo.";

        }
        } else{
            echo "Erro: Nenhum arquivo foi enviado.";

        }
      
}

?>