<?php
$datosrecibidos = "";
require_once("config.php");

$respuesta = "";
$respuesta = "";
$correo = "s";



$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


//si el type es = a 1 significa que el dato es de tipo USUARIO
//if($_POST["type"] == 1){

if (!$items =  mysqli_query($con,'SELECT IF( EXISTS(SELECT * FROM usuarios WHERE `correo` =  "'.$_POST['datos'].'"), 1, 0) as resp'))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){
        if($gal['resp'] == "1")
            $respuesta = "ya existe ese correo!";
    }
//}
// si el type no es 1 entonces el dato es el CORREO
//else{

/*if (!$items =  mysqli_query($con,'SELECT IF( EXISTS(SELECT * FROM usuarios WHERE `correo` =  "'.$_POST['datos'].'"), 1, 0) as resp'))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){
        if($gal['resp'] == "1")
            $correo = "ya existe ese correo... si ese es tu correo ve a la pare de login y restablece tu contraseña!";
    }*/
//}

/*$respuesta = array(
    'usuario' => $usuario,
    'correol' => $correo

);*/




echo $respuesta;

?>