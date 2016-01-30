

<div style="background-image: url('img/topbar.jpg'); height: 200px;"  class="row fullWidth">


    <div style="text-align: center" class="large-12 columns">
        <h1 style="margin-top: 50px; text-shadow: 0 0px 15px#ffffff" class="htopbanner">Tokens</h1>
        <h4  class="htopbanner">¡Escoge el que más te convenga!</h4>
        <a href="index.php?pg=puntos" ><input  type="submit" id="boton" class="round button" value="¿Necesitas ayuda? ¡Comienza aquí!" style="text-align: center; margin-top: 20px;"> </a>

    </div>



</div>




<div class="large-12 columns radius panel">

    <div class="row" style="background-color: transparent;">

        <div style="text-align: center" class="large-4 columns">


            <h3 class="htopbanner">¡Recuerda!</h3>


            <img style="max-height: 80px; max-width: 80px" src="img/flag.png"/>



        </div>


        <div style="margin-top: 35px; text-align: center;" > Es responsabilidad del comprador conocer los términos y condiciones antes de cualquier compra : <a target="_blank" href="index.php?pg=tc">Términos y Condiciones.</a>
        </div>



    </div>

</div>





<hr>
    <div class="row" >



        <div class="columns large-4">

                <input id="lemp" type="radio" value="Lempiras" class="currency" name="currency">
                <label for="lemp">Lempiras</label>


        </div>


            <div class="columns large-4">


                    <input id="dol" checked type="radio" value="Dolares" class="currency" name="currency">
                    <label for="dol">Dolares</label>


            </div>
            <div class="htopbanner" style="color: #000000;" id="TMoneda">Divisa: Dolares</div>

    </div>



    <div class="row">



        <hr>



        <ul class="accordion" data-accordion >
            <li class="accordion-navigation" >
                <a href="#panel1a" class="htopbanner" style="background-color: #2ba6cb; color: white; font-size: 25px; text-shadow: 0.0em 0.1em 0.3em black;">Pagos Internacionales     ▼  <img src="img/globe.ico"></a>

                <div id="panel1a" class="content active">

                    <div class="columns large-4">
                        <div class="switch radius large">
                            <input id="exampleRadioSwitch2" class="radIO" checked type="radio" value="PayPal" name="testGroup">
                            <label style="color: #000000;" for="exampleRadioSwitch2"></label>
                        </div>
                        <div style="color: #000000;" >PayPal</div>

                    </div>

                    <div class="columns large-4">
                        <div class="switch radius large">
                            <input id="exampleRadioSwitch4" class="radIO" type="radio" value="TigoMoney" name="testGroup">
                            <label style="color: #000000;" for="exampleRadioSwitch4"></label>
                        </div>
                        <div style="color: #000000;" >Tigo Money</div>

                    </div>
                    <hr>

                </div>
            </li>
            <li class="accordion-navigation">
                <a href="#panel2a" class="htopbanner" style="background-color: #2ba6cb; color: white; font-size: 25px; text-shadow: 0.0em 0.1em 0.3em black;">Pagos para Honduras     ▼ <img src="img/honduras.ico"></a>
                <div id="panel2a" class="content">

                    <div class="columns large-4">
                        <div class="switch radius large">
                            <input id="exampleRadioSwitch3" class="radIO" type="radio" value="CBF" name="testGroup">
                            <label style="color: #000000;" for="exampleRadioSwitch3"></label>
                        </div>
                        <div style="color: #000000;" >Cuenta Bancaria FICOHSA</div>

                    </div>

                    <div class="columns large-4">
                        <div class="switch radius large">
                            <input id="exampleRadioSwitch7" class="radIO" type="radio" value="CBO" name="testGroup">
                            <label style="color: #000000;" for="exampleRadioSwitch7"></label>
                        </div>
                        <div style="color: #000000;" >Cuenta Bancaria Occidente</div>

                    </div>
                    <hr>
                </div>
            </li>

        </ul>





    </div>

    <div class="row">
        <div class="columns large-12">
            <div class="htopbanner" id="log" style="color: black;">Pago por medio de : PayPal</div>
        </div>

    </div>
<script>
    $( ".currency" ).on( "click", function() {
            $( "#TMoneda" ).html("Divisa: " + $( ".currency:checked" ).val());
        if($( ".currency:checked" ).val() == "Lempiras"){
            $( "#bronz" ).html("22 lps HND");
            $( "#silv" ).html("44 lps HND");
            $( "#gold" ).html("88 lps HND");

            $( "#plat" ).html("220 lps HND");
            $( "#diam" ).html("660 lps HND");
            $( "#chall" ).html("1760 lps HND");
        }
        else{
            $( "#bronz" ).html("1$ USD");
            $( "#silv" ).html("2$ USD");
            $( "#gold" ).html("4$ USD");

            $( "#plat" ).html("10$ USD");
            $( "#diam" ).html("30$ USD");
            $( "#chall" ).html("80$ USD");
        }
    });
    $( ".radIO" ).on( "click", function() {


        var $value =  $( ".radIO:checked" ).val();
        var $rvalue = $value
        switch ($value){
            case "CBF":$rvalue = "Cuenta Bancaria FICOHSA";break;
            case "CBO":$rvalue = "Cuenta Bancaria OCCIDENTE";break;
            case "TigoMoney":$rvalue = "Tigo Money";break;
            default :$rvalue = $value;break;
        }

        $( "#log" ).html( " Pago por medio de : "  + $rvalue + " ");
        $("#Bronze").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
        $("#Silver").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
        $("#Gold").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
        $("#Platinum").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
        $("#Diamond").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
        $("#Challenger").attr('href', "index.php?pg=pagos&tipop="+ $value +"&c=10&bnombre=Bronze");
    });
</script>

    <div class="row" style="margin-top:50px; margin-bottom: 50px; background-color: transparent;">


        <div style="margin-top: 25px" class="medium-6 large-4 columns">
            <div style="opacity: .98;" class="bronzeprice">


                <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">BRONZE</h1>


                    <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>


                    <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



                <h1 style="margin-top: -80px; margin-left: 200px;  text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x10</h1>

                <ul style="text-align: center; list-style-type: none; margin-top: 40px; text-shadow: 2px 2px 10px black;">
                    <li>10 tokens</li>
                    <li></li>
                    <li>¡Recomendado para principiantes!</li>
                </ul>





                <div class="row">
                    <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                        <a id="Bronze" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=10&bnombre=Bronze">
                            <span class="buybtn-text">¡Comprar!</span>
                            <span class="buybtn-hidden-text">¡Click!</span>
                        </a>
                    </div>
                </div>


                <h1 id="bronz" style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">1$ USD</h1>

            </div>




        </div>




        <div style="margin-top: 25px" class="medium-6 large-4 columns">
            <div style="opacity: .98;" class="blackprice">



                <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">SILVER</h1>

                <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>

                <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



        <h1 style="margin-top: -80px; margin-left: 200px; text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x22</h1>

        <ul style="text-align: center; list-style-type: none; margin-top: 40px;  text-shadow: 2px 2px 10px black;">
            <li>22 tokens</li>
            <li></li>
            <li>¡Para usuarios avanzados!</li>
        </ul>


                <div class="row">
                    <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                    <a id="Silver" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=22&bnombre=Silver">
                        <span class="buybtn-text">¡Comprar!</span>
                        <span class="buybtn-hidden-text">¡Click!</span>
                    </a>
                    </div>
                </div>

                <h1 id="silv" style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">2$ USD</h1>

            </div>

        </div>












        <div style="margin-top: 25px" class="medium-6 large-4 columns">
            <div style="opacity: .98;" class="goldprice">


                <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">GOLD</h1>

                <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>

                <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



                <h1 style="margin-top: -80px; margin-left: 200px; text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x45</h1>

                <ul style="text-align: center; list-style-type: none; margin-top: 40px; text-shadow: 2px 2px 10px black;">
                    <li>45 tokens</li>
                    <li></li>
                    <li>¡Sólo para campeones!</li>
                </ul>



                <div class="row">
                    <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                        <a id="Gold" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=45&bnombre=Gold">
                            <span class="buybtn-text">¡Comprar!</span>
                            <span class="buybtn-hidden-text">¡Click!</span>
                        </a>
                    </div>
                </div>

                <h1 id="gold" style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">4$ USD</h1>

            </div>



</div>

<!-- Segunda fila de tokens abajo. -->









            <div style="margin-top: 25px" class="medium-6 large-4 columns">
                <div style="opacity: .98;" class="platinumprice">


                    <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">PLATINUM</h1>


                    <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>


                    <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



                    <h1 style="margin-top: -80px; margin-left: 200px;  text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x120</h1>

                    <ul style="text-align: center; list-style-type: none; margin-top: 40px; text-shadow: 2px 2px 10px black;">
                        <li>120 tokens</li>
                        <li></li>
                        <li>¡Jugadores dedicados!</li>
                    </ul>





                    <div style="margin-top: 25px" class="row">
                        <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                            <a id="Platinum" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=120&bnombre=Platinum">
                                <span class="buybtn-text">¡Comprar!</span>
                                <span class="buybtn-hidden-text">¡Click!</span>
                            </a>
                        </div>
                    </div>


                    <h1 id="plat"  style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">10$ USD</h1>

                </div>




            </div>




            <div style="margin-top: 25px" class="medium-6 large-4 columns">
                <div style="opacity: .98;" class="diamondprice">



                    <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">DIAMOND</h1>

                    <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>

                    <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



                    <h1 style="margin-top: -80px; margin-left: 200px; text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x350</h1>

                    <ul style="text-align: center; list-style-type: none; margin-top: 40px;  text-shadow: 2px 2px 10px black;">
                        <li>350 tokens</li>
                        <li></li>
                        <li>¡Sólo para la elite!</li>
                    </ul>


                    <div class="row">
                        <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                            <a id="Diamond" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=350&bnombre=Diamond">
                                <span class="buybtn-text">¡Comprar!</span>
                                <span class="buybtn-hidden-text">¡Click!</span>
                            </a>
                        </div>
                    </div>

                    <h1 id="diam" style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">30$ USD</h1>

                </div>

            </div>












            <div style="margin-top: 25px" class="medium-6 large-4 columns">
                <div style="opacity: .98;" class="challengerprice">


                    <h1 style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 thick">CHALLENGER</h1>

                    <img style="opacity: 1 !important; max-height: 200px; max-width: 200px" src="img/wgcoin.png"/>

                    <hr id="fancylinew price1" style="margin-top: 20px" class="fancy-linew" />



                    <h1 style="margin-top: -80px; margin-left: 200px; text-shadow: 1px 1px 10px #ffffff;" CLASS="h23">x900</h1>

                    <ul style="text-align: center; list-style-type: none; margin-top: 40px; text-shadow: 2px 2px 10px black;">
                        <li>900 tokens</li>
                        <li></li>
                        <li>¡La victoria es tuya!</li>
                    </ul>



                    <div class="row">
                        <div class="columns large-12 large-offset-3 medium-offset-4 medium-12 small-12 small-offset-3">
                            <a id="Challenger" class="buybtn" href="index.php?pg=pagos&tipop=paypal&c=900&bnombre=Challenger">
                                <span class="buybtn-text">¡Comprar!</span>
                                <span class="buybtn-hidden-text">¡Click!</span>
                            </a>
                        </div>
                    </div>

                    <h1 id="chall" style="color: #ffffff; text-shadow: 2px 2px 10px black;" CLASS="h21 valor thick">80$ USD</h1>

                </div>

            </div>



            <hr class="fancy-line" /></div>








