<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru','PHPMailer/language/');
$mail->IsHTML(true);

$mail->setFrom('info@fls.guru','Sasha');
$mail->addAddress('sahavoit777@gmail.com');
$mail->Subject='Privet';

$body = '<h1>Hi I am Sasha</h1>';


$mail->Body = $body;
if(!$mail->send()){
    $message='Wrong';
}else{
    $message = 'Data sended';
}
$response = ['message' => $message];
header('Content-type:application/json');
echo json_encode($response);

?>