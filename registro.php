<?php
require_once(dirname(__FILE__) . '/config/config.php');
$conexion = connectServer(SERVER, USER, PASS, DATABASE);
//No está guardando el telefono
if(isset($_POST['submit'])){
    if(strlen($_POST['name']) >=1 && strlen($_POST['email']) >= 1 && strlen($_POST['phone']) >= 9 && strlen($_POST['company']) >= 1 && strlen($_POST['department']) >= 1 && strlen($_POST['position']) >= 1 && strlen($_POST['country']) >= 1){
        $nombre =ucfirst(trim($_POST['name'])) ;
        $email =  trim($_POST['email']);
        $phone =trim($_POST['phone'] );
        $company =ucfirst(trim($_POST['company'])) ;
        $department =ucfirst(trim($_POST['department'])) ;
        $position =ucfirst(trim($_POST['position'])) ;
        $country =ucfirst(trim($_POST['country'])) ;
        $sentencia = $conexion->prepare("INSERT INTO usuarios(Name, Email, Phone, Company, Department, Position, Country) VALUES (:name, :email, :phone, :company, :department, :position, :country)");
        $sentencia ->bindParam(':name', $nombre);
        $sentencia ->bindParam(':email', $email);
        $sentencia ->bindParam(':phone', $phone);
        $sentencia ->bindParam(':company', $company);
        $sentencia ->bindParam(':department', $department);
        $sentencia ->bindParam(':position', $position);
        $sentencia ->bindParam(':country', $country);
        $sentencia->execute();
        echo'<script type="text/javascript">
        alert("Gracias, nos comunicaremos contigo muy pronto");
        window.location.href="index.php";
        </script>';
        } else{
            ?>
            <h3>Complete este campo</h3>
            <?php
        };
        };