<?php
require_once('./Ayudas/functions.php');
require_once('./config/config.php');
//Conexión con el servidor
$conexion = connectServer(SERVER, USER, PASS, DATABASE);

require "html.php";
require "registro.php";
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

$email = 'manuzz3112@gmail.com';
$asunto = 'Asunto de prueba';
$body = 'Texto de prueba';

$mail = new PHPMailer();
sendEmail($email, $asunto, $body)

?>