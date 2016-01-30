<?php
require_once("config.php");


/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 21/04/15
 * Time: 20:03
 */

$nombre = "";
$correo = "";
$num = "";
$fechanac = "";
$avatar = "";
$desc = "";





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
        $desc = $gal["descripcion"];



    }


?>



<div style="background-image: url('img/topbar.jpg'); height: 120px;"  class="row fullWidth">


    <div style="text-align: center" class="large-12 columns">
        <h1 style="margin-top: 30px; text-shadow: 0 0px 15px#ffffff" class="htopbanner">Bienvenido a tu perfil</h1>

    </div></div>


<div class="row box" style="background-color: white; opacity: 0.9; margin-top: 30px">


    <div class="large-9 columns">


        <p class="thick" style="color: #000000; text-align: center">¡Desde aqui puedes hacer todos los cambios que desees a tu perfil, No olvides salvar despues de hacer todos tus cambios!</p>

        <div class="section-container tabs" data-section>
            <section class="section">
                <h3 class=" thicker title" >Información Personal</h3>
                <div class="content" data-slug="panel1">
                    <form method="post" action="update.php">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline thick">Tu Nombre:</label>
                            </div>
                            <div class="large-10 columns">
                                <?php echo '<input type="text" id="nombre" value="'.$nombre.'" name="nombre" placeholder="Jane Smith">'; ?>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline thicker">Tu número Favorito:</label>
                            </div>
                            <div class="large-10 columns">
                                <?php echo '<input type="number" id="yourEmail" class="subheader"  name="num" placeholder="5" min="0" max="99" style="height=30px; font-size:15px !important;" value="'.$num.'" placeholder="jane@smithco.com">'; ?>

                            </div>
                        </div>

                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline thick">Tu Correo:</label>
                            </div>
                            <div class="large-10 columns">
                                <?php echo '<input type="text" id="yourEmail" value="'.$correo.'" name="correo" placeholder="jane@smithco.com">'; ?>

                            </div>
                        </div>

                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline thick">Fecha de nacimiento:</label>
                            </div>
                            <div class="large-10 columns">
                                <?php echo '<input type="date" id="yourEmail" value="'.$fechanac.'" name="fecha" placeholder="jane@smithco.com">'; ?>

                            </div>
                        </div>
                        <?php echo '<input type="hidden" name="avatar" value="'.$avatar.'" id="inputAvatar">'; ?>
                        <input type="hidden" value="<?php echo $_SESSION["usuario"]; ?>" name="usuario" id="usuario">

                        <h3 class=" thicker title" >Escribe aquí un mensaje que desees publicar. (Opcional)</h3>
                        <textarea name="desc" value="" placeholder="Hola me llamo Pablo Ronaldo  Junior MC Donald"><?php echo $desc; ?></textarea>


                        <button type="submit" class="radius button">Salvar</button>
                    </form>
                </div>
            </section>
            <section class="section">
                <h3 class=" thicker title" >Elije tu Avatar</a></h3>
                <div class="content" data-slug="panel2">
                    <ul class="large-block-grid-5 mediom-block-grid-5 small-block-grid-5">
                        <li style="text-align: center;"><a class="thicker" style="color: black;" ><img class="foto" src="img/avatar1.png">Lucian</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar2.png">Blitz</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;" ><img class="foto" src="img/avatar3.png">Renek</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar4.png">Amumu</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar5.png">Darius</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar6.png">Draven</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar7.png">Graves</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar8.png">Lee</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar9.png">GP</a></li>
                        <li style="text-align: center;"><a class="thicker" style="color: black;"><img class="foto" src="img/avatar10.png">Riven</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>







    <div class="large-3 columns">
        <h5 class="thicker" style="text-align: center;">Número</h5>

        <p>
            <a href="" ><img src="http://placehold.it/400x280/E8117F/000000&text=<?php echo $num;?>"</a><br/>
            <br>
            <a href="" class="thicker"><- Cambia tu número  aqui.</a>
        </p>

    </div>
    <div class="large-3 columns">
        <h5 class="thicker" style="text-align: center;">Avatar</h5>

        <p>
            <?php
            if($avatar == "")
                echo '<a href="" ><img id="avatarMain" src="http://placehold.it/500x500/E8117F/000000&text=Aun+no+tienes%20AVATAR!"></a><br/>';
            else
                echo '<a href="" ><img id="avatarMain" src="'.$avatar.'"></a><br/>';
            ?>

            <a href="" class="thicker" >Cambia tu Avatar aqui.</a>
        </p>

    </div>

</div>













<div class="reveal-modal" id="mapModal">
    <h4>Where We Are</h4>
    <p><img src="http://placehold.it/800x600"/></p>


    <a href="#" class="close-reveal-modal">×</a>
</div>
