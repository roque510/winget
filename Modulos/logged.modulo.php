<?php
require_once("config.php");



$nombre = "";
$correo = "";
$num = "";
$fechanac = "";
$avatar = "";
$desc = "";

$nombreA = "";
$correoA = "";
$avatarA = "";
$descA = "";


$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$_SESSION["usuario"].'" '))
{
echo("Error description: " . mysqli_error($con));
}else
while ($gal = mysqli_fetch_array($items)){

$nombre = $gal["nombre"];
$correo = $gal["correo"];
$num = $gal["numfav"];
$fechanac = $gal["fechacumple"];
$avatar = $gal["avatar"];
$desc= $gal["descripcion"];



}

if (!$items =  mysqli_query($con,'SELECT *  FROM usuarios where `descripcion` <> "" ORDER BY RAND() LIMIT 1'))
{
    echo("Error description: " . mysqli_error($con));
}else
    while ($gal = mysqli_fetch_array($items)){

        $nombreA = $gal["nombre"];
        $correoA = $gal["correo"];
        $avatarA = $gal["avatar"];
        $descA = $gal["descripcion"];



    }



?>

<div class="row">
    <div class="large-12 columns">






        <hr/>

        <div class="row">

            <div class="large-4 columns">
                <h4 style="color: black" class="panel htopbanner">To<span class=" htopbanner" style="color: black">kens</span>: <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$_SESSION['usuario'].'" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo $gal["saldo"];
                        }

                    ?></h4>

                <img class="box" src="http://placehold.it/500x500/2ba6cb/000000&text=<?php echo $num;?>"><br>




            </div>




            <div class="large-8 columns ">

                <h3 class="show-for-small"><hr/></h3>
                <h3 class="hide-for-small">Bienvenido, <?php echo $nombre;?></h3>
                <div class="panel ">
                    <h4 class="hide-for-small">Noticias</h4>
                    <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `noticias` WHERE `apuntador` = "'.$_SESSION['usuario'].'" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo "<p>".$gal["noticia"]."</p><hr>";
                        }

                    ?>

                    


                </div>

                <div class="row">
                    <div class="large-6 small-6 columns">
                        <div class="panel">
                            <h5>Consigue TOKENS</h5>

                            <a href="index.php?pg=puntos" class="small button">CLICK AQUI</a>
                        </div>
                    </div>

                    <div class="large-6 small-6 columns">
                        <div class="panel">
                            <h5>Compra RP, Itunes Gift Cards y mas</h5>

                            <a href="index.php?pg=compras" class="small button">CLICK AQUI</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <hr>




        <div class="row">


            <?php
            if (!$items =  mysqli_query($con,'SELECT `idrifas`.descripcion, `rifas`.`diarifa` FROM `idrifas`, `rifas` WHERE `idrifas`.`idrifa` = `rifas`.`idrifa` and `rifas`.`activo` = "1" and `rifas`.`usuario` = "'.$_SESSION["usuario"].'";'))
            {
                echo("Error description: " . mysqli_error($con));
            }else
                while ($gal = mysqli_fetch_array($items)){
                    echo "
                            <div data-alert class='Montserrat alert-box success radius' style='font-size:20px; color: #000000; '>
                        ¡ESTAS PARTICIPANDO EN UN SORTEO POR -> <span style='color:white; text-shadow: 0.1em 0.1em 0.2em black;'>".$gal['descripcion']."</span> Que se rifara el dia: <span style='color:white; text-shadow: 0.1em 0.1em 0.2em black;'>".$gal['diarifa']."</span> a las 11:30AM [UTC/GMT -06:00 (CST)] !

                    </div>";
                }
            ?>
        </div>
        <hr class="fancy-line" />




    <hr>

        <div class="row">

            <div class="large-12 columns">
                <div class="radius panel subtitulo">

                   <div>Anuncios</div>

                    <div class="row">
                        <div class="large-2 columns small-3"><img src="<?php echo $avatarA; ?>"/></div>
                        <div class="large-10 columns">
                            <p class="htopbanner"><strong><?php echo $nombreA; ?>: </strong> <?php echo $descA; ?>.</p>
                            <ul class="inline-list">
                                <li><strong>Contactame: </strong></li>
                                <li><a href=""><?php echo $correoA; ?></a></li>

                            </ul>






                </div>
            </div>

        </div>


















    </div>