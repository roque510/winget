<?php
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 20/05/15
 * Time: 13:44
 */


$usuario = "";
$nombre = "";
$cantidad ="";
$tipopago  = "";

$usuario = $_POST["usuario"];
$nombre = $_POST["nombre"];
$cantidad = $_POST["cantidadTokens"];
$tipopago = $_POST["tipoPago"];

require_once("config.php");

$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if (!$items =  mysqli_query($con,"INSERT INTO `winget`.`aprobaciondecompra` (`idaprobacion`, `usuario`, `cantidad`, `tipopago`, `status`, `nombreU`) VALUES (NULL, '".$usuario."', '".$cantidad."', '".$tipopago."', '0', '".$nombre."');"))
{
    echo("Error description: " . mysqli_error($con));
}
else
    echo '<script>window.location="index.php?pg=rifa&resp=9"</script>';

?>
