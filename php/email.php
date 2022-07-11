<?php
//if verifica se algum dos campos tem valor e se não é vazio
if (isset($_POST['name']) && !empty($_POST['name']) ||
    isset($_POST['email']) && !empty($_POST['email']) ||
    isset($_POST['tel']) && !empty($_POST['tel']) ||
    isset($_POST['message']) && !empty($_POST['message'])) {

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$tel = addslashes($_POST['tel']);
$message = addslashes($_POST['message']);

$to = "email que vai receber a mensagem";
$subjet = "Contato - XXXX XXX XXXX XXXX";
$body = "Nome: ".$name."\r\n".
        "E-mail: ".$email."\r\n".
        "Telefone: ".$tel."\r\n".
        "Mensagem: ".$message."\r\n";
$header = "From: ####@NomeDomínioOndeEstaRodando.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if (mail($to, $subjet, $body, $header)) {
    # sucesso ao enviar email...
}else{
    # falha ao enviar email...
}
}
?>