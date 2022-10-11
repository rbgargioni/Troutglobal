
<?php
$para = "rafael.gargioni@trout.com.br"; //para onde vamos enviar
$teste = $_GET["email"];
$assunto = $_GET["name"]; //assunto ou subjet
$corpo = $_GET["message"]; //corpo do e-mail
$tel = $_GET["subject"];
$headers = "From:rbgargioni@outlook.com"; //cabeçalho

$teste2 = "E-mail: $teste \n    Nome: $assunto \n    Telefone: $tel \n    Mensagem: $corpo \n";

if(mail($para,$assunto,$teste2, $headers)){
    //echo "email enviado para $para com sucesso!";
    header("Location: contact_mensagem.html");


}else {
    header("Location: contact_mensagem_erro.html");

}
?>
