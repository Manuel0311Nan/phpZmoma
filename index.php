<?php
require_once(dirname(__FILE__). '/Ayudas/functions.php');
require "index.html.php";
require "registro.php";
require "./mailer/Exception.php";
require "./mailer/PHPMailer.php";
require "./mailer/SMTP.php";
//Conexión con el servidor
$conexion = connectServer(SERVER, USER, PASS, DATABASE);




?>