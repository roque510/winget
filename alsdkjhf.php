<?php
require_once("config.php");

if(isset($_POST['email'])){

    $email = $_POST['email'];


    $con = mysqli_connect($SVR,$USR,$PW,$DB);
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }


    if (!$items =  mysqli_query($con,'SELECT IF( EXISTS(SELECT * FROM usuarios WHERE `correo` =  "'.$email.'"), 1, 0) as resp'))
    {
        echo("Error description: " . mysqli_error($con));
    }else
        while ($gal = mysqli_fetch_array($items)){
            $nombre = $gal["nombre"];
            $hash = $gal["hash"];
            if($gal['resp'] == "1"){


            $to      = $email; // Send email to our user
            $subject = 'Restablacer contraseña'; // Give the email a subject
            $message = '

Saludos '.$nombre.',

Tu cuenta ah solicitado que tu contraseña sea reestablecida! para continuar haz click en el link que se encuentra mas abajo!

------------------------

http://www.winget.club/index.php?pg=pass&h='.$hash.'&e='.$email.'

'; // Our message above including the link

            $headers = 'From:noreply@winget.club' . "\r\n"; // Set from headers
            mail($to, $subject, $message, $headers); // Send our email
                echo '<script>window.location="index.php?resp=6"</script>';
            }
            else
                echo '<script>window.location="index.php?resp=3"</script>';
        }



}
else{

}




?>
