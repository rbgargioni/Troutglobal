<?php
include_once "conexao.php";
?>
<?php

  $nome = $_POST['nome'];
  $company = $_POST['company'];
  $endereco = $_POST['endereco'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $senha = $_POST['senha'];
  $csenha = $_POST['csenha'];

  
  if($senha==$csenha){

    
         $sql = "INSERT INTO usuarios(nome,company,endereco,email,telefone,senha,csenha)VALUES('$nome','$company','$endereco','$email','$telefone','$senha','$csenha')";

         if(mysqli_query($mysqli,$sql )){
            header("Location: cadastro_mensagem.html"); 
         }else{
            echo "Deu erro" . $sql . "<br>" . mysqli_erro($mysqli);
         }
         mysqli_close($mysqli);
   }else{header("Location: cadastro_mensagem_erro.html");}
?>

