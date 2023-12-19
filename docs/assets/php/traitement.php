<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement</title>
</head>
<body>
<?php

require("./PHPMailer-master/src/PHPMailer.php");
require("./PHPMailer-master/src/SMTP.php");
require("./PHPMailer-master/src/Exception.php");


$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->IsSMTP();

$mail->CharSet="UTF-8";
$mail->Host = "smtp.gmail.com";
$mail->SMTPDebug = 1; 
$mail->Port = 465 ; //465 or 587

$mail->SMTPSecure = 'ssl';  
$mail->SMTPAuth = true; 
$mail->IsHTML(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Adresse e-mail de destination
    $to = "david.bourdel@sts-sio-caen.info";

    // Sujet du courriel
    $sujet = "Nouveau message de $nom";

    // Corps du courriel
    $corps = "Nom: " . htmlspecialchars($nom) . "\n";
    $corps .= "E-mail: " . htmlspecialchars($email) . "\n";
    $corps .= "Message:\n" . htmlspecialchars($message); 
    

    // En-têtes du courriel
    $headers = "De : $email";

    // Envoyer le courriel
    mail($to, $sujet, $corps, $headers);
    
    if(!$mail->Send()) {
        echo "Erreur: " . $mail->ErrorInfo;
    } else {
        echo "Le message à bien été envoyén";
    }
    // Redirection après l'envoi du formulaire
    header("Location: confirmation.html");
    exit();
}
?>


</body>
</html>