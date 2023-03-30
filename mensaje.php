<?php


if (isset($_POST["enviar"])){
    if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["subject"]) && !empty($_POST["comments"])){

        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $comments = $_POST["comments"];

        $para = 'chaparubio777@hotmail.com';
        $asunto =  $subject;
        $mensaje = $comments;
        
        // Cabeceras del correo
        $cabeceras = $_POST["email"] . "\r\n" .
            'Reply-To:'. $_POST["email"] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();


        $mail =   mail($para, $asunto, $mensaje, $cabeceras);

        if($email){
            echo "<script> alert('Correo enviado!'</script>";
        }
    }
}

?>