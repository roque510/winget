<?php
require_once("config.php");

$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(isset($_GET['e']) && !empty($_GET['e']) AND isset($_GET['h']) && !empty($_GET['h'])){
    // Verify data
    $email = mysqli_escape_string($con,$_GET['e']); // Set email variable
    $hash = mysqli_escape_string($con,$_GET['h']); // Set hash variable

    if (!$search =  mysqli_query($con,"SELECT * FROM usuarios WHERE correo='".$email."' AND hash='".$hash."' AND acti='0'"))
    {
        echo("Error description: " . mysqli_error($con));
    }else
        $match  = mysqli_num_rows($search);





    if($match > 0){

        $sql = "UPDATE usuarios SET acti='1' WHERE correo='".$email."' AND hash='".$hash."' AND acti='0'";
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }else
            echo "<script>alert('Tu cuenta a sido Activada Exitosamente!');</script>";

        mysqli_close($con);


        // We have a match, activate the account
    }else{
        echo "<script>alert('Error.., Porfavor utilice el link que se le a enviado al correo electronico.');</script>";

        // No match -> invalid url or account has already been activated.
    }

    echo '<script>window.location="index.php";</script>';
}
?>