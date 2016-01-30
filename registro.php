<?php
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 4/04/15
 * Time: 16:37
 */

require_once("config.php");
require_once("funciones.php");

$user = "";
$password = "";
$confpassword = "";
$correo = "";
$fechanac = "";
$nombre = "";
$numfav = "";
$hash = md5( rand(0,1000) );


if(isset($_POST['user']))
    $user = test_input($_POST['user']);
if(isset($_POST['password']))
    $password = test_input($_POST['password']);
if(isset($_POST['nombre']))
    $nombre = test_input($_POST['nombre']);
if(isset($_POST['correo']))
    $correo = test_input($_POST['correo']);
if(isset($_POST['fechanac']))
    $fechanac = test_input($_POST['fechanac']);
if(isset($_POST['numfav']))
    $numfav = test_input($_POST['numfav']);
if(isset($_POST['confpassword']))
    $confpassword = test_input($_POST['confpassword']);


$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (!$items =  mysqli_query($con,'SELECT IF( EXISTS(SELECT * FROM usuarios WHERE `usuario` =  "'.$user.'"), 1, 0) as resp'))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){
        if($gal['resp'] == "1")
            echo '<script>window.location="index.php?resp=0"</script>';
    }

if (!$items =  mysqli_query($con,"INSERT INTO `winget`.`usuarios` (`usuario`, `nombre`, `contra`, `correo`, `numfav`, `fechacumple`, `fechainic` , `hash`) VALUES ('$user', '".$nombre."', '".md5($password)."', '".$correo."', '".$numfav."', '".$fechanac."', '".date('Y-m-d H:i:s')."', '".$hash."');"))
{
    echo("Error description: " . mysqli_error($con));
}

$to      = $correo; // Send email to our user
$subject = 'Registro | Verificacion'; // Give the email a subject
$message = '

Gracias por subscribirte!
¡Tu cuenta ha sido creada, ahora puedes iniciar sesión en winget.club presionando el link de activación que aparece en la parte de abajo!

------------------------
Usuario: '.$nombre.'
------------------------

¡Porfavor haz click aquí para activar tu cuenta!
http://www.winget.club/index.php?pg=verify&e='.$correo.'&h='.$hash.'

'; // Our message above including the link

$headers = 'From:noreply@winget.club' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email


echo '<script>window.location="index.php?resp=1";</script>';



?>