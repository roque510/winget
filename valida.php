<?php
require_once("config.php");

$user= "";
$pass = "";




if(isset($_POST['user']) && isset($_POST['password'])){
	$user = test_input($_POST['user']);
	$pass = md5(test_input($_POST['password']));

}



$con = mysqli_connect($SVR,$USR,$PW,$DB);
	if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }	

  
if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$user.'" and `contra` = "'.$pass.'"  '))
  {
  echo("Error description: " . mysqli_error($con));
  }else
	while ($gal = mysqli_fetch_array($items)){
		
			if($gal["acti"] != 1)
                echo '<script>window.location="index.php?resp=4"</script>';
            else{
			    $expire=time()+60*60*24*30;
                setcookie("nombreusu", $gal['nombre'], $expire);
                setcookie("usuario", $gal['usuario'], $expire);
                setcookie("avatar", $gal['avatar'], $expire);
                setcookie("RUjiASOl", $gal['saldo'], $expire);

			    session_start();
			    $_SESSION['usuario'] = $gal['usuario'];
            }
		
			
	}

$pub = "publiral";
if(isset($_SESSION['usuario'])){
    echo "<script>alert('Bienvenido, ".$user."');</script>";
$pub = $_SESSION['usuario'];
echo '<script>window.location="index.php?pg=logged"</script>';
}else
    echo '<script>window.location="index.php?resp=2"</script>';



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>