<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

  require("PHPMailer/src/PHPMailer.php");
  require("PHPMailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "alexis.chaigneau@sts-sio-caen.info";
    $mail->Password = "";
    $mail->SetFrom("alexis.chaigneau@sts-sio-caen.info");
    $mail->Subject = "Test";
    $mail->Body = "  
    <html>
    <body>
        <p>Nom : " . $name . "</p>
        <p>Courriel : " . $email . "</p>
        <p>Message : " . $message . "</p>
    </body>
    </html>
    ";   
    $mail->AddAddress("ethan.chaigneau@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
        header('Location: index.php#contact');
     }
    }
    ?> 
