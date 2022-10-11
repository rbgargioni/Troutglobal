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

  
  if(isset($_POST['email'])){
    
   if(strlen($_POST['email'])==0){
      header("Location: cadastro_mensagem_erro_email_ja_cadastrado.html");
   }else{ #else que vai iniciar o login
      // $consulta = "SELECT * FROM usuarios"; #seleciona todos os campos 
       $email = $mysqli->real_escape_string($_POST['email']); 
       $consulta = "SELECT * FROM usuarios WHERE email= '$email' ";
       $con = $mysqli->query($consulta) or die("Falha na conecção" . $mysqli->error);
       $dados = $con->fetch_array();
       //echo $dados['senha'];
       $teste=$dados['email'];
       if((strlen($_POST['email'] == $teste))){

              header("Location: cadastro_mensagem_erro_email_ja_cadastrado.html");

       }else {
         if($senha==$csenha){

    
            $sql = "INSERT INTO usuarios(nome,company,endereco,email,telefone,senha,csenha)VALUES('$nome','$company','$endereco','$email','$telefone','$senha','$csenha')";
   
               if(mysqli_query($mysqli,$sql )){
               header("Location: cadastro_mensagem.html"); 
               }else{
               echo "Deu erro" . $sql . "<br>" . mysqli_erro($mysqli);
               }
               mysqli_close($mysqli);
         }  else{header("Location: cadastro_mensagem_erro.html");}
       
       }
       
          
   }    
}
  
?>

