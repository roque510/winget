<div style="background-image: url('img/topbar.jpg'); height: 300px;"  class="row fullWidth">


<div style="text-align: center" class="large-12 columns">
    <h1 style="margin-top: 50px;" class="htopbanner">Esta es TU fuente de Gift Cards</h1>
    <h4  class="htopbanner">¡Gana premios todos los días con nosotros!</h4>

    <input data-reveal-id="videoModal" type="submit" id="boton" class="round button" value="¡Ùnete, es gratis!" style="text-align: center; margin-top: 50px;" >

</div>



</div>

<div class="row" style="margin-top:50px; margin-bottom: 50px; background-color: transparent;">

    <div class="large-12 columns medium-12 columns small-12 columns">


        <?php
        $entrada = array
        (
            array(0,"itunes10.png","#apple"),
            array(1,"itunes25.png","#apple"),
            array(2,"lol10.png","#rito"),
            array(3,"lol25.png","#rito"),
            array(4,"psn50.png","#rito"),
            array(5,"psplus12.png","#ps"),
            array(6,"psn20.png","#ps"),
            array(7,"steam50.png","#st"),
            array(8,"google10.png","#gp"),
            array(9,"google25.png","#gp"),
            array(10,"runecoins200.png","#rs"),
            array(11,"runsecape30days.png","#rs")
        );

shuffle($entrada);

        ?>

    <ul class="small-block-grid-3 medium-block-grid-3 large-block-grid-4">
        <li><a href="index.php?pg=compras<?php echo $entrada[0][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[0][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[1][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[1][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[2][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[2][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[3][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[3][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[4][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[4][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[5][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[5][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[6][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[6][1];?>"/></a></li>
        <li><a href="index.php?pg=compras<?php echo $entrada[7][2];?>"><img class="half-grayscale" src="img/<?php echo $entrada[7][1];?>"/></a></li>
    </ul>
    </div>
    
</div>



<div style="background-color: deepskyblue;;"  class="row fullWidth">


    <div style="text-align: center" class="large-12 columns">
        <h1 style="margin-top: 50px;" class="htopbanner">¿Cómo funciona?</h1>
        <h4  class="htopbanner"> El lugar ideal para empezar es aquí. </h4>

        <img class="row" style="max-height: 123px; max-width: 63px" src="img/howbulb.png"/>

        <span class="row">¡Estás solamente a 3 sencillos pasos para comenzar a sacar el mayor provecho de tu vida gamer!</span>



    </div> </div>

    <div style="background-color: dodgerblue;;"  class="row fullWidth">


        <div style="text-align: center" class="large-12 columns">
            <h1 style="margin-top: 50px;" class="htopbanner">1. El Registro</h1>
            <h4  class="htopbanner"> Primero lo primero, hay que ser parte de WINGET. </h4>

            <img class="row" style="max-height: 123px; max-width: 63px" src="img/howrocket.png"/>

            <div>
       <p> Llena el formulario, se enviará correo de verificación para asegurarnos que todo
        funcione debidamente (Ahí recibirás tus premios, códigos y cualquier ayuda que necesites.) </p>

       <p>
        Así mismo escogerás tu número favorito (Éste es el número con el que participarás en la rifa cada vez que compres jugadas.) Obviamente, Puedes cambiarlo
        cuando quieras, las veces que quieras, cada vez que decidas jugar con un número distinto.</p>
            </div>


        </div></div>

        <div style="background-color: deepskyblue;;"  class="row fullWidth">


            <div style="text-align: center" class="large-12 columns">
                <h1 style="margin-top: 50px;" class="htopbanner">2. Haz tu compra</h1>
                <h4  class="htopbanner"> Compra tus tokens y decide si quieres usarlos en rifa o compra directa. </h4>

                <img class="row" style="max-height: 123px; max-width: 63px" src="img/howhandshake.png"/>

        <p> Efectúa tu pago por medio del método que prefieras, usa tus tokens comprando directamente o participando en rifas y una vez tomada la decisión; es hora de cerrar el trato!
            <br> Como verás, es así de fácil. </p>



            </div></div>

            <div style="background-color: dodgerblue;;"  class="row fullWidth">


                <div style="text-align: center" class="large-12 columns">
                    <h1 style="margin-top: 50px;" class="htopbanner">3. Lo más importante...</h1>
                    <h4  class="htopbanner"> ¡Asegúrate de disfrutar! </h4>

                    <img class="row" style="max-height: 123px; max-width: 63px" src="img/howhappy.png"/>

        <span class="row"> Pase lo que pase, nuestra prioridad es tu satisfacción. ¿Y que mayor sentimiento de satisfacción que divertirse? </span>



                </div>



            </div>


<!-- GET IN TOUCH -->
<div style="margin-top: 50px" class="row">
    <div class="large-12 columns">

        <div class="panel">
            <h4>¡Estamos en contacto!</h4>

            <div class="row">
                <div class="large-9 columns">
                    <p>Nos encantaría escuchar de ti, escríbenos.</p>
                </div>
                <div class="large-3 columns">
                    <a href="#" data-reveal-id="contactus" class="radius button right">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</div>




<!-- -->