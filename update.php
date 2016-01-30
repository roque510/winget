<?php
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 22/04/15
 * Time: 23:52
 */ ?>

<?php
require_once("config.php");

$error = false;
$nombre = "";
$fechanac = "";
$correo = "";
$num = "";
$usuario = "";
$avatar = "";



$usuario = test_input($_POST['usuario']);
$nombre = test_input($_POST['nombre']);
$correo = test_input($_POST['correo']);
$num= test_input($_POST['num']);
$fechanac = test_input($_POST['fecha']);
$avatar = $_POST["avatar"];
$desc = test_input($_POST["desc"]);




$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



$sql="UPDATE `winget`.`usuarios` SET `nombre` = '".$nombre."', `correo` = '".$correo."',  `numfav` = '".$num."', `fechacumple` = '".$fechanac."', `avatar` = '".$avatar."', `descripcion` = '".$desc."'  WHERE `usuarios`.`usuario` = '".$usuario."';";


if (!mysqli_query($con,$sql)) {
    die('Error: ' . mysqli_error($con));
}
else
    setcookie("avatar", $avatar);


mysqli_close($con);


echo '<script>window.location="index.php?pg=perfil"</script>';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>