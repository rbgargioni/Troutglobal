<?PHP
session_start();
ob_start();
include('conexao.php');

if(isset($_POST['email'])){
    
    if(strlen($_POST['email'])==0){
        header("Location: esqueceuasenha.html");
    }else{ #else que vai iniciar o login
       // $consulta = "SELECT * FROM usuarios"; #seleciona todos os campos 
        $email = $mysqli->real_escape_string($_POST['email']); 
        $consulta = "SELECT * FROM usuarios WHERE email= '$email' ";
        $con = $mysqli->query($consulta) or die("Falha na conecção" . $mysqli->error);
        $dados = $con->fetch_array();
        //echo $dados['senha'];
        $teste=$dados['email'];
        if((strlen($_POST['email'] == $teste))){
            $headers = "From:rbgargioni@outlook.com"; 
            $para = $_POST['email'];
            $assunto = "Trout Global";
            $teste2 = $dados['senha'];
            $teste3 = "
            Recover your account of Trout Global
            
            Dear user

            Your login is $para
            Your access password is : $teste2
            
            Should you have any question or problem please
            get in touch with our team on trout.global@trout.com.br.

            Best regards,
            Trout Global";
           
            if(mail($para,$assunto,$teste3, $headers)){
                echo "email enviado para $para com sucesso!";
                header("Location: esqueceuasenha_mensagem.html");
                }
                
        
        }else {
            header("Location: esqueceusenha_erro.html");
        
        }
        
           
    }    
}
?>