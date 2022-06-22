<?php

$remitente = $_POST['email'];
$destinatario = 'isidromolina2688@gmail.com';
$asunto = 'Consulta desde pagina web';
if (!$_POST){
?>


<?php
}else{

        $cuerpo = "Nombre: " . $_POST["nombre"] . "\r\n";
        $cuerpo .= "Apellido: " . $_POST["apellido"] . "\r\n";
        $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
        $cuerpo .= "Motivo: " . $_POST["motivo"] . "\r\n";
        $cuerpo .= "Contanos... " . $_POST["textazo"] . "\r\n";

        $headers = "MIME-Version: 1.0";
        $headers .= "Content-type: text/plain: charset-utf-8\n";
        $headers .= "X-Priority: 3\n";
        $headers .= "X-MSMail-Priority: Normal\n";
        $headers .= "X-Mailer: php\n";
        $headers .= "From: \"".$_POST['nombre']." ".$_POST['
        apellido']."\" <".$remitente.">\n";

        mail($destinatario, $asunto, $cuerpo, $headers);

        include 'gracias.html';

}

