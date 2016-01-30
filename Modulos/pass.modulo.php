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

    if (!$search =  mysqli_query($con,"SELECT * FROM usuarios WHERE correo='".$email."' AND hash='".$hash."' "))
    {
        echo("Error description: " . mysqli_error($con));
    }else
        $match  = mysqli_num_rows($search);





    if($match > 0){

        echo "<hr>";

        echo '
        <form method="post" action="index.php?pg=pass">
        <div class="row" style="background-color: #f9f6fd;">
            <label id="confirmlabel" style="font-size: 50px; visibility: hidden;" class="error" ></label>
          <div class="large-12 columns" style="">
              <h1 class="subheader h1l">Contraseña nueva:</h1>
              <input  id="pss" oninput=" newpass()" type="password" name="password" class="subheader smallglowing-border" placeholder="contraseña" style="font-size:25px ;"/>
          </div>
         </div>
        <div class="row" style="background-color: #f9f6fd;">
          <div class="large-12 columns">
              <h1 class="subheader h1l" style="font-size: 35px !important;" >Confirmar Contraseña:</h1>
              <input  id="pssc" oninput=" newpass() " type="password" name="confpassword" class="subheader smallglowing-border" placeholder="contraseña" style="font-size:25px ;"/>
          </div>

        <input name="email" type="hidden" value="'.$_GET["e"].'">
        <input name="hash" type="hidden" value="'.$_GET["h"].'">
        <input type="submit" id="botonex" class="round button" value="Confirmar" style="float: right; margin-top: 50px;" >

      </div>


        </form>

        ';

        /*$sql = "UPDATE usuarios SET acti='1' WHERE correo='".$email."' AND hash='".$hash."'";
        if (!mysqli_query($con,$sql)) {
            die('Error: ' . mysqli_error($con));
        }else
            echo "<script>alert('Tu cuenta a sido Activada Exitosamente!');</script>";*/

        mysqli_close($con);


        // We have a match, activate the account
    }else{
        echo "<script>alert('Error.., Porfavor utilice el link que se le a enviado al correo electronico.');</script>";

        // No match -> invalid url or account has already been activated.
    }

    //echo '<script>window.location="index.php";</script>';
}
if(isset($_POST['password']) && !empty($_POST['password']) AND isset($_POST['confpassword']) && !empty($_POST['confpassword'])){

    $email = mysqli_escape_string($con,$_POST['email']); // Set email variable
    $hash = mysqli_escape_string($con,$_POST['hash']); // Set hash variable

    if (!$search =  mysqli_query($con,"UPDATE usuarios SET contra='".md5($_POST['password'])."' WHERE correo='".$email."' AND hash='".$hash."'"))
    {
        echo("Error description: " . mysqli_error($con));
    }else{
        echo "
<hr>
            <div class='row panel round'>
                <div class='columns large-12'>
                    <h3>Tu Contraseña se a actualizado exitosamente!</h3>
                </div>
            </div>
            <div class='row panel round'>
                <div class='columns large-12'>
                    <h5>Espere 10 segundos para ser redirecionado o haga click en el link de abajo!.</h5>
                    <a href='http://www.winget.club'>http://www.winget.club</a>

                </div>
            </div>


            <script type='text/javascript'>
            function redirection(){
                window.location ='http://www.winget.club';
            }setTimeout('redirection()', 10000); //tiempo en milisegundos
            </script>

        ";

    }




}


?>