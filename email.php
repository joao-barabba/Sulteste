<?php
 //Váriaveis
$nome = addcslashes($_POST['name']); // Pegando no html  o elemento dentro o input nome
$telefone =addcslashes($_POST['telefone']); //Pegando no HTML o elemento dentro do input telefone
$email = addcslashes($_POST['email']); // Pegando no Html o elemento dentro do input e-mail
$mensagem =addcslashes($_POST['mensagem']);// Pegando d=no HTML o elemento dentro do input mensagem


$to = "contato@sulteste.com.br";// E-mail cadastrado na base do site 
$subjet = "Contato - Sulteste";
$body = "Nome: " .$nome. "\r\n".
        "Telefone: " .$telefone. "\r\n".
        "Email: " .$email. "\r\n".
        "Mensagem: " .$mensagem;


$header = "From: joao@sulteste.com.br" . "\r\n".// Email que ira enviar a mensagem aqui deve ser do mesmo dominio e cadastrado no cpanel
           ."Reply-To:".$email. "\e\n". // Responder para quem enviou.
           ."X=Mailer:PHP/" .phpversion();// Versão do php rodando no servidor
    
if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso");
}else{
    echo("O email não pode ser enviado, verifique as informações!");
}

?>