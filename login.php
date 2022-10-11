<?php
include('conexao.php');
if(isset($_POST['email']) || isset($_POST['senha'])){
    if(strlen($_POST['email'])==0){
        header("Location: login_erro.html");
    }else if(strlen($_POST['senha'])==0){
        header("Location: login_erro.html");
    }else{ #else que vai iniciar o login
        $email = $mysqli->real_escape_string($_POST['email']); #limpando usuario e senha
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email= '$email' AND senha = '$senha'"; #seleciona todos os campos 
        $sql_query = $mysqli->query($sql_code) or die("Falha na conecção" . $mysqli->error); 
        
        $quantidade = $sql_query->num_rows; #verifica a quantidade de registros é 1

        if($quantidade ==1){

            $usuario = $sql_query->fetch_assoc(); #joga os dados dentro da variavel usuario

            if(!isset($_SESSION)){ #verifica se já tem uma sessao
                session_start(); #inicia uma sessao
            }
            $_SESSION['email']= $usuario['email'];
            $_SESSION['senha']= $usuario['senha'];

            header("Location: index.php");
        }else {
            header("Location: login_erro.html");

        }
    }
    

}
?>