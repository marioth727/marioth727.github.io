<?php

$errorMSG = "";


// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre es requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email es requerido ";
} else {
    $email = $_POST["email"];
}

// TELEFONO
if (empty($_POST["phone"])) {
    $errorMSG .= "Teléfono es requerido ";
} else {
    $phone = $_POST["phone"];
}
// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Mensaje is requerido ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "info.rapilinksas@gmail.com";
$Subject = "MENSAJE DESDE WEB RAPILINK SAS";

// prepare email body text
$Body = "";
$Body .= "DATOS DE CONTACTO";
$Body .= "\n";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Teléfono: ";
$Body .= $phone;
$Body .= "\n";
/*$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";*/
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>