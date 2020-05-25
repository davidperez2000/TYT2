<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/PHPMailer.php'; 
require '../PHPMailer/src/SMTP.php'; 
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/OAuth.php';

$mail = new PHPMailer;
$mail -> isSMTP();
$mail ->SMTPDEBUG = 2;
$mail->Host ="smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = TRUE;
$mail->Username = 'travelytime2@gmail.com';
$mail->Password = 'vlriytdagkpeygtg';
$mail->setFrom('travelytime2@gmail.com', 'Travel');
    $mail->addAddress($email, $nombre);
    $mail->Subject = $subject;
    $mail->msgHTML($body);
    $mail->AltBody = 'html';
    if($mail->send()){
echo "<script type='text/javascript'>location.href='../index.php';</script>";
    }else {
    echo "Message could not be sent. Mailer Error:" .$mail->ErrorInfo;
}
?>

