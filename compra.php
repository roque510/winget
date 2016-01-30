<?php
date_default_timezone_set(timezone_name_from_abbr("America/Tegucigalpa"));
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 14/05/15
 * Time: 19:34
 */
require_once("config.php");

$idobjeto = $_POST["idobjeto"];
$usuario = $_POST["user"];
$tokensUsados = $_POST["valor"];
$tokensDisponibles = "";
$hash = "";

$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$usuario.'" '))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){
        $tokensDisponibles = $gal["saldo"];
        $hash =$gal["hash"];
    }

if($tokensDisponibles < $tokensUsados)
    if($_POST['CoR'] == "compras")
        echo '<script>window.location="index.php?pg=compras&resp=7"</script>';
    else
        echo '<script>window.location="index.php?pg=rifa&resp=7"</script>';
else
    if (!$items =  mysqli_query($con,'UPDATE `winget`.`usuarios` SET `saldo` = "'.($tokensDisponibles-$tokensUsados).'" WHERE `usuarios`.`usuario` = "'.$usuario.'";'))
    {
        echo("Error description: " . mysqli_error($con));
    }
else{


    $_COOKIE["RUjiASOl"]= ($tokensDisponibles-$tokensUsados);

    $to      = "wingetgroup@gmail.com"; // Send email to our user
    $subject = 'NUEVA COMPRA'; // Give the email a subject
    $message = '

Excelente una nueva COMPRA!! :D,

La cuenta con el id de : '.$usuario.' hizo la compra del producto con id de : '.$idobjeto.'

para verficar que el correo es legitimo este es el HASH de ese usuario: '.$hash.'

------------------------



'; // Our message above including the link

    $headers = 'From:noreply@winget.club' . "\r\n"; // Set from headers
    if($_POST['CoR'] == "compras"){
        mail($to, $subject, $message, $headers); // Send our email
        if (!$items =  mysqli_query($con,"INSERT INTO `winget`.`compras` (`idcompra`, `tipocompra`, `idtipocompra`, `usuario`, `fechadecompra`, `codigodecompra`) VALUES (NULL, '1', '".$idobjeto."', '".$usuario."', '".date('Y-m-d')."', 'PENDING');"))
        {
            echo("Error description: " . mysqli_error($con));
        }

    }

    else//rifa SHIIZLLE
    {
        if(date("Y-m-d g:i a") < date("Y-m-d 11:30 a"))
            $Dia = date("Y-m-d");
        else
            $Dia = date("Y-m-d", time()+86400);

        if (!$items =  mysqli_query($con,'INSERT INTO `winget`.`rifas` (`id`, `usuario`, `idrifa`, `diarifa`, `activo`) VALUES (NULL, "'.$usuario.'", "'.$idobjeto.'", "'.$Dia.'", "1");'))
        {
            echo("Error description: " . mysqli_error($con));
        }else
            if (!$items =  mysqli_query($con,"INSERT INTO `winget`.`compras` (`idcompra`, `tipocompra`, `idtipocompra`, `usuario`, `fechadecompra`, `codigodecompra`) VALUES (NULL, '2', '".$idobjeto."', '".$usuario."', '".date('Y-m-d')."', '1');"))
            {
                echo("Error description: " . mysqli_error($con));
            }else
                echo '<script>window.location="index.php?pg=rifa&resp=8"</script>';
    }


    echo '<script>window.location="index.php?pg=compras&resp=8"</script>';

}


?>