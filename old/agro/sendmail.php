<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$nome = $_POST["nome"];

$from = "atendimento@bichocomamor.com.br";

$to = "doug.c.sant@hotmail.com";

$subject = "Mensagem de ". $nome;

$message = $_POST["mensagem"] ."<br>" ."Telefone: ".$_POST["tel"]."<br>" ."Email: ".$_POST["email"];
// É necessário indicar que o formato do e-mail é html
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: '.$nome.'<$from>';
//$headers .= "Bcc: $EmailPadrao\r\n";

$enviaremail = mail($to, $subject, $message, $headers);;
if($enviaremail){
$mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
echo "<script>

alert('Email Enviado com sucesso');

</script>";
echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
} else {
    echo '<script>
 
    alert("Erro ao enviar Mensagem");
    }
    </script>';
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
}




?>