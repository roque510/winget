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
}?>



<div style="background-image: url('img/topbar.jpg'); height: 150px;"  class="row fullWidth">


    <div style="text-align: center" class="large-12 columns">
        <h1 style="margin-top: 30px; text-shadow: 0 0px 15px#ffffff" class="htopbanner">Historial de Compras</h1>
        <h4  class="htopbanner">Todas tus transacciones</h4>

    </div>



</div>

<div class="row">


    <div class="large-3 columns ">
        <div class="panel">
            <a href="index.php?pg=perfil"><img src="<?php echo $_COOKIE['avatar']; ?>"/></a>
            <h5 style=""><a href="index.php?pg=logged"><?php echo $_COOKIE['nombreusu'];?></a></h5>
            <div class="section-container vertical-nav" data-section data-options="deep_linking: false; one_up: true">
                <section class="section">
                    <h5 style="" class="title"><a href="index.php?pg=puntos">Saldo Actual :<?php  if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$_SESSION['usuario'].'" '))
                            {
                                echo("Error description: " . mysqli_error($con));
                            }else
                                while ($gal = mysqli_fetch_array($items)){
                                    echo $gal["saldo"];
                                }?> Tokens</a></h5>
                </section>

            </div>

        </div>
    </div>



    <div class="large-6 columns">

        <?php
        if (!$items =  mysqli_query($con,'SELECT `idrifas`.descripcion,`idrifas`.tipo,compras.tipocompra,compras.idtipocompra,compras.fechadecompra,compras.codigodecompra FROM  `idrifas`,`compras` WHERE `idrifas`.`idrifa` = `compras`.`idtipocompra` and `usuario` = "'.$_SESSION["usuario"].'" '))
        {
            echo("Error description: " . mysqli_error($con));
        }else
            while ($gal = mysqli_fetch_array($items)){

                if($gal["tipocompra"] == 1)
                    $TipoCompra = "Compra Directa";
                else
                    $TipoCompra = "Rifa";

                $IdTipoCompra = $gal["idtipocompra"];
                switch($gal["tipo"]){
                    case "League of Legends":$tipo = "img/riotgift.png";break;
                    case "Apple":$tipo = "img/igift.png";break;
                    case "Play Station":$tipo = "img/psgift.png";break;

                }

                $FechaDeCompra = $gal["fechadecompra"];
                if(strlen($gal["codigodecompra"]) < 4){
                    if($gal["codigodecompra"] == 1)
                        $CodigoDeCompra = "<h5 style='color:darkslategray; text-shadow:0.1em 0.1em 0.1em grey;'>Aun estas participando en esta RIFA! </h5>";
                    if($gal["codigodecompra"] == 2)
                        $CodigoDeCompra = "<h5 style='color:darkslategray; text-shadow:0.1em 0.1em 0.1em grey;'>Esta rifa ya ocurrio y no ganaste nada... intentalo denuevo!<a href='index.php?pg=rifas'>CLICK AQUI</a></h5>";
                    if($gal["codigodecompra"] == 3)
                        $CodigoDeCompra = "<h5 style='color:darkslategray; text-shadow:0.1em 0.1em 0.1em grey;'>Esta rifa ya ocurrio y GANASTE!, intentalo denuevo!<a href='index.php?pg=rifas'>CLICK AQUI</a></h5>";

                }
                else
                    $CodigoDeCompra = "Aqui puedes encontrar el codigo de la giftcard que compraste: <br><h4 class='Monserrat ' style='color:#2ba6cb; text-shadow:0.1em 0.1em 0.1em black;'>".$gal['codigodecompra']."</h4>";

                $descripcion = $gal["descripcion"];

                echo '
                <div class="row panel">
                    <div class="large-2 columns small-3 "><img src="'.$tipo.'"/></div>
                        <div class="large-10 columns ">
                        <p><strong>Tipo de compra: '.$TipoCompra.'</strong><br>Fecha de compra :<strong>'.$FechaDeCompra.'</strong><br> Compra de '.$descripcion.'</p>
                        <h6>'.$CodigoDeCompra.'</h6><!--//si es rifa si no el texto es PAGADO y el codigo-->

            </div>
        </div>';

            }
        ?>




        <hr/>





    </div>



    <aside class="large-3 columns hide-for-small">
        <p><img src="http://placehold.it/300x440&text=[ad]"/></p>
        <p><img src="http://placehold.it/300x440&text=[ad]"/></p>
    </aside>

</div>

