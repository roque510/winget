<?php require_once("config.php");

$con = mysqli_connect($SVR,$USR,$PW,$DB);
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

<div style="background-image: url('img/topbar.jpg'); height: 200px;"  class="row fullWidth">


    <div style="text-align: center" class="large-12 columns">
        <h1 style="margin-top: 50px; text-shadow: 0 0px 15px#ffffff" class="htopbanner">Compras Directas</h1>
        <h4  class="htopbanner"> </h4>
<?php
$paso = 'href="index.php?pg=puntos"';

if(!isset($_SESSION['usuario']))
$paso = 'data-reveal-id="videoModal"'
?>
        <a <?php echo $paso; ?> ><input  type="submit" id="boton" class="round button" value="¿No tienes tokens? ¡Consigue aquí!" style="text-align: center; margin-top: 50px;"> </a>

    </div>



</div>



<div class="row">
<div class="large-12 columns radius panel">

        <div class="row" id="inic" style="background-color: transparent;">

            <div style="text-align: center" class="large-4 columns">
                <h3 class="htopbanner">¡Recuerda!</h3>
                <img style="max-height: 80px; max-width: 80px" src="img/flag.png"/>
            </div>


            <div style="margin-top: 35px; text-align: center;" > Es responsabilidad del comprador conocer los términos y condiciones antes de cualquier compra : <a target="_blank" href="index.php?pg=tc">Términos y Condiciones.</a>
            </div>

        </div>

</div>
</div>

<div class="row">
    <div class="columns large-12">
        <h4 style="color: black" class="panel htopbanner">To<span class=" htopbanner" style="font-size: 20px !important; color: black">kens</span> Disponibles: <?php
            if(!isset($_SESSION['usuario']))
                $Info = '<a href="#" data-reveal-id="videoModal" class="secondary button">Quieres ver tus tokens? CLICK AQUI!</a>';
            else
            if (!$items =  mysqli_query($con,'SELECT * FROM `usuarios` WHERE `usuario` = "'.$_SESSION['usuario'].'" '))
            {
                echo("Error description: " . mysqli_error($con));
            }else
                while ($gal = mysqli_fetch_array($items)){
                    $Info = $gal["saldo"];

                }
            echo $Info;

            $dataRole = "videoModal";
            if(isset($_SESSION['usuario']))
                $dataRole = "compra";
                $dataRole = "compra";

            ?>

        </h4>
    </div>

</div>

<div class="row">

    <div data-magellan-expedition="fixed" >
        <dl class="sub-nav" style="background-color: #0078a0 ;">
            <dd data-magellan-arrival="inic"><a href="#inic" style="color: white;">Inicio</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="rito"><a href="#rito" style="color: white;">Riot Games</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="apple"><a href="#apple" style="color: white;">Apple Products</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="ps"><a href="#ps" style="color: white;">Play Station</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="gp"><a href="#gp" style="color: white;">Google Play</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="rs"><a href="#rs" style="color: white;">Runescape</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="hs"><a href="#hs" style="color: white;">HearthStone</a></dd><li class="divider"></li>
            <dd data-magellan-arrival="st"><a href="#st" style="color: white;">Steam</a></dd><li class="divider"></li>
        </dl>
    </div>
    <hr/>



            <div class="row" id="rito">

                <div class="large-12 columns radius panel">
                    <div class="row">
                        <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                            <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                                <img style="margin-top: 20px" src="img/taghole.png"/>
                                <img style="margin-top: 20px" src="img/riotgift.png"/>
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <h1 class="htopbanner">Riot Points</h1>
                                    <h5 style="margin-top: -15px;" class="htopbanner">Riot Pin </h5>
                                </div>
                            </div>
                        </div>
                        <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                            <?php
                            if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "League of Legends" '))
                            {
                                echo("Error description: " . mysqli_error($con));
                            }else
                                while ($gal = mysqli_fetch_array($items)){


                                    echo '

                        <div class="row">
                    <div class="columns large-12" style="background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"> <h6 class=" thick">'.($gal["valor"] * 10).' Tokens</h6> <a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="apple">

                <div class="large-12 columns radius panel">
                    <div class="row">
                        <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                            <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                                <img style="margin-top: 20px" src="img/taghole.png"/>
                                <img style="margin-top: 20px" src="img/igift.png"/>
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <h1 class="htopbanner">Itunes</h1>
                                    <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                                </div>
                            </div>
                        </div>
                        <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                            <?php
                            if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "Apple" '))
                            {
                                echo("Error description: " . mysqli_error($con));
                            }else
                                while ($gal = mysqli_fetch_array($items)){
                                    echo '

                        <div class="row">
                    <div class="columns large-12" style="background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"> <h6 class=" thick">'.($gal["valor"] * 10).' Tokens</h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row" id="ps">

                <div class="large-12 columns radius panel">
                    <div class="row">
                        <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                            <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                                <img style="margin-top: 20px" src="img/taghole.png"/>
                                <img style="margin-top: 20px" src="img/psgift.png"/>
                                <hr/>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <h1 class="htopbanner">PS store</h1>
                                    <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                                </div>
                            </div>
                        </div>
                        <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                            <?php
                            if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "Play Station" '))
                            {
                                echo("Error description: " . mysqli_error($con));
                            }else
                                while ($gal = mysqli_fetch_array($items)){
                                    echo '

                        <div class="row" ">
                    <div class="columns large-12" style=" overflow: auto; background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"><h6 class=" thick">'.($gal["valor"] * 10).' Tokens   </h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                                }
                            ?>
                        </div>
                    </div>
                </div>

            </div >

    <div class="row" id="gp">

        <div class="large-12 columns radius panel">
            <div class="row">
                <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                    <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                        <img style="margin-top: 20px" src="img/googlegift.png"/>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h1 class="htopbanner">Google Play</h1>
                            <h5 style="margin-top: -5px;" class="htopbanner">Gift Cards</h5>
                        </div>
                    </div>
                </div>
                <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                    <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "Google" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo '

                        <div class="row" ">
                    <div class="columns large-12" style=" overflow: auto; background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"><h6 class=" thick">'.($gal["valor"] * 10).' Tokens   </h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div >

    <div class="row" id="rs">

        <div class="large-12 columns radius panel">
            <div class="row">
                <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                    <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                        <img style="margin-top: 20px" src="img/runegift.png"/>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h1 class="htopbanner">RuneScape</h1>
                            <h5 style="margin-top: -15px;" class="htopbanner">Coins & Membresía</h5>
                        </div>
                    </div>
                </div>
                <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                    <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "Runescape" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo '

                        <div class="row" ">
                    <div class="columns large-12" style=" overflow: auto; background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"><h6 class=" thick">'.($gal["valor"] * 10).' Tokens   </h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div >

    <div class="row" id="hs">

        <div class="large-12 columns radius panel">
            <div class="row">
                <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                    <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                        <img style="margin-top: 20px" src="img/hearthstonegift.png"/>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h1 class="htopbanner">Hearthstone</h1>
                            <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                        </div>
                    </div>
                </div>
                <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                    <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "HearthStone" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo '

                        <div class="row" ">
                    <div class="columns large-12" style=" overflow: auto; background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"><h6 class=" thick">'.($gal["valor"] * 10).' Tokens   </h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div >

    <div class="row" id="st">

        <div class="large-12 columns radius panel">
            <div class="row">
                <div style="text-align: center; margin-top: 25px" class="large-4 columns">
                    <div style="opacity: .98; width: 290px; height: 400px;" class="pricetag">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                        <img style="margin-top: 20px" src="img/steamgift.png"/>
                        <hr/>
                    </div>
                    <div class="row">
                        <div class="large-12 columns">
                            <h1 class="htopbanner">Steam</h1>
                            <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                        </div>
                    </div>
                </div>
                <div style="background-color:white; text-align: center; height: 450px; overflow: auto;" class="panel large-8 columns">

                    <?php
                    if (!$items =  mysqli_query($con,'SELECT * FROM `idrifas` WHERE `tipo` = "Steam" '))
                    {
                        echo("Error description: " . mysqli_error($con));
                    }else
                        while ($gal = mysqli_fetch_array($items)){
                            echo '

                        <div class="row" ">
                    <div class="columns large-12" style=" overflow: auto; background-color:; ">
                        <div class="columns large-6" style="background-color: ;"><h5  class=" thick">'.$gal["descripcion"].'</h5></div>
                        <div class="columns large-6" style="background-color: ;"><h6 class=" thick">'.($gal["valor"] * 10).' Tokens   </h6><a href="'.$gal["idrifa"].'/'.$gal["descripcion"].'/'.$gal["tipo"].'/'.($gal["valor"]*10).'/compras" data-reveal-id="'.$dataRole.'" class="small button secondary idRifa">Comprar Ahora</a></div>


                    </div>

                </div>
                <hr>';
                        }
                    ?>
                </div>
            </div>
        </div>

    </div >



    </div>









           


   









<!-- div class="large-12 columns radius panel">

    <div class="row">
        <div style="text-align: center; margin-top: 25px" class="large-4 columns">
            <div style="opacity: .98;" class="pricetag">
                <img style="margin-top: 20px" src="img/taghole.png"/>
                <img style="margin-top: 20px" src="img/riotgift.png"/>

                <hr/>
                <div class="row">
                    <div class="large-12 columns">
                        <h1 class="htopbanner">Riot Points</h1>
                        <h5 style="margin-top: -15px;" class="htopbanner">Riot Pin </h5>
                    </div>
                </div>

            </div>
        </div>


        <div style="text-align: center; margin-top: 40px" class="large-8 columns">
            <div style="background-color: red;" >

            </div>
        </div>

    </div>
</div -->

<!-- HHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHHH-->

    <!--hr class="fancy-line" />

    <div class="large-12 columns radius panel">

        <div class="row" style="margin-bottom: 50px; background-color: transparent;">

            <div style="text-align: center; margin-top: 25px" class="large-3 columns">
                <div style="opacity: .98;" class="pricetag">
                    <div class="row">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                    </div>
                    <img style="margin-top: 20px" src="img/igift.png"/>

                    <hr/>
                    <div class="large-12 columns">


                        <h1 class="htopbanner">Itunes</h1>
                        <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                    </div></div></div>


            <div style="text-align: center; margin-top: 25px" class="large-8 columns">
                <div style="background-color: rgba(255, 252, 254, 0.95);" >

                    <span  class="large-3 columns thick"> 580 RP </span> <span class="large-3 columns thick"> $5.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 1220 RP </span> <span class="large-3 columns thick"> $9.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 2500 RP </span> <span class="large-3 columns thick"> $17.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 6450 RP </span> <span class="large-3 columns thick"> $41.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 10750 RP </span> <span class="large-3 columns thick"> $65.00 </span> <span class="large-3 columns thick"> Comrpar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 16500 RP </span> <span class="large-3 columns thick"> $97.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/> <br>


                    <span style="color: darkred"> *Cualquier mensaje importante antes de la compra y que el cliente deba tener en cuenta va ubicado aquí.</span>




                </div>



            </div>




        </div>

    </div>

    <hr class="fancy-line" />

    <div class="large-12 columns radius panel">

        <div class="row" style="margin-bottom: 50px; background-color: transparent;">

            <div style="text-align: center; margin-top: 25px" class="large-3 columns">
                <div style="opacity: .98;" class="pricetag">
                    <div class="row">
                        <img style="margin-top: 20px" src="img/taghole.png"/>
                    </div>
                    <img style="margin-top: 20px" src="img/psgift.png"/>

                    <hr/>
                    <div class="large-12 columns">


                        <h1 class="htopbanner">PS store</h1>
                        <h5 style="margin-top: -15px;" class="htopbanner">Gift Cards</h5>
                    </div></div></div>


            <div style="text-align: center; margin-top: 25px" class="large-8 columns ">
                <div style="background-color: rgba(255, 252, 254, 0.95);" >


                    <span  class="large-3 columns thick"> 580 RP </span> <span class="large-3 columns thick"> $5.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 1220 RP </span> <span class="large-3 columns thick"> $9.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 2500 RP </span> <span class="large-3 columns thick"> $17.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 6450 RP </span> <span class="large-3 columns thick"> $41.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 10750 RP </span> <span class="large-3 columns thick"> $65.00 </span> <span class="large-3 columns thick"> Comrpar Ahora </span>
                    <hr/>
                    <span  class="large-3 columns thick"> 16500 RP </span> <span class="large-3 columns thick"> $97.00 </span> <span class="large-3 columns thick"> Comprar Ahora </span>
                    <hr/> <br>


                    <span style="color: darkred"> *Cualquier mensaje importante antes de la compra y que el cliente deba tener en cuenta va ubicado aquí.</span>



                </div>



            </div>




        </div >

    </div -->
