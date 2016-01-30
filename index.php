<!doctype html>
<?php session_start();
require_once("funciones.php");


$vari = "";




?>
<html class="no-js" lang="en">



<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Winget | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/aroquestyle.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/foundation/foundation.orbit.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/winget.js"></script>
    <link rel='shortcut icon' type='image/x-icon' href='img/favicon.ico'/>
</head>
  <body>

  <nav class="top-bar" data-topbar>
      <ul class="title-area">

          <li  style="" class="name ">
              <a href="index.php?pg=inicio">
              <h1 class="titulo">
                  WIN<span class="tituloverde">GET</span>
              </h1>
              </a>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
      </ul>

      <section class="top-bar-section">

          <ul class="right">
              <li class="divider"></li>
              <li class="has-dropdown">
                  <a href="#" class="subtitulo">Menu</a>
                  <ul class="dropdown">

                      <?php if(isset($_SESSION["usuario"])){
                          echo '<li class="has-dropdown"><a class="subtitulo hoo" href="index.php?pg=puntos">compras</a>
                                    <ul class="dropdown">
                                        <li class="divider"></li><li class="hoo"><a class="subtitulo hoo" href="index.php?pg=puntos">Tokens</a></li>
                                        <li class="divider"></li><li class="hoo"><a class="subtitulo hoo" href="index.php?pg=compras">Gift Cards</a></li>
                                        <li class="divider"></li><li class="hoo"><a class="subtitulo hoo" id="btnfaq" href="index.php?pg=rifa">Rifa</a></li>

                                    </ul>

                          </li>';
                          echo '<li class="divider"></li><li class=""><a class="subtitulo hoo" href="index.php?pg=logged">Home</a></li>';
                          echo '<li class="divider"></li><li class=""><a class="subtitulo hoo" href="index.php?pg=perfil">Perfil</a></li>';
                          echo '<li class="divider"></li><li class=""><a class="subtitulo hoo" href="index.php?pg=historial">Historial <br> de compras</a></li>';


                      }
                      ?>

                      <li class="divider"></li><li class=""><a class="subtitulo hoo" href="index.php?pg=inicio">Inicio</a></li>
                      <li class="divider"></li><li class=""><a class="subtitulo hoo" href="index.php?pg=about">About</a></li>
                      <li class="divider"></li><li class=""><a class="subtitulo hoo" id="btnfaq" href="index.php?pg=faq">Faq</a></li>

                  </ul>
              </li>
              <li class="divider"></li>
              <?php
                if(isset($_SESSION["usuario"])){

                    $avatar = "img/noavatar.jpeg";
                    if(isset($_COOKIE["avatar"]))
                    if($_COOKIE["avatar"] != "")
                        $avatar = $_COOKIE["avatar"];


                    echo '

                    <li><a class="subtitulo" href="index.php?pg=perfil">'.$_COOKIE["usuario"].'</a></li>
                    <li> <img style="width:45px; height:45px;" src="'.$avatar.'"> </li>

                    <li class="divider"></li>
                          <li  class="has-form" class="subtitulo">
                          <a data-reveal-id="logout" href="#" class="button">Logout</a>
                          </li>

                          <li class="divider"></li>';


                }
                else{
                    echo '<li ><a data-reveal-id="login" class="subtitulo button" style="background-color: #333333;" id="e">Login</a></li>
                          <li class="divider"></li>
                          <li  class="has-form" class="subtitulo">
                          <a data-reveal-id="videoModal" href="#" class="button">Registrate</a>
                          </li>
                          <li class="divider"></li>';
                }

              ?>



          </ul>
      </section>
  </nav>

  <?php
  if(isset($_GET['resp']))
      switch($_GET['resp']){
          case 0: echo "
          <div class='row'>
          <div data-alert class='alert-box warning radius'>
               El Usuario que eligio ya existe
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 1: echo "
          <div class='row'>
          <div data-alert class='alert-box success radius'>
               Subscripcion EXITOSA, porfavor revise su correo para activar su cuenta!
                 <a href='#' class='close'>&times;</a>
          </div></div>";break;
          case 2: echo ""; break;
          case 3: echo "
          <div class='row'>
          <div data-alert class='alert-box warning radius'>
               No existe ningun usuario con ese correo... Intente registrase otra vez!
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 4: echo "
          <div class='row'>
          <div data-alert class='alert-box alert radius'>
               Aun no a verificado su cuenta! revise su correo porfavor , la bandeja de entrada o correo no deseado
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 5: echo "
          <div class='row'>
          <div data-alert class='alert-box success radius'>
               Pago realizado EXITOSAMENTE!
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 6: echo "
          <div class='row'>
          <div data-alert class='alert-box info radius'>
               Se a enviado un correo a su cuenta!
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 7: echo "
          <div class='row'>
          <div data-alert class='alert-box warning radius'>
               Saldo insuficiente !!!, asegurate de comprar TOKENS :D
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 8: echo "
           <div class='row'>
          <div data-alert class='alert-box success radius'>
               Compra efectuada Exitosamente!! Se enviara el codigo del producto al correo ligado a esta cuenta en unos instantes, si no esta en tu bandeja de entrada asegurate de buscar en el CORREO NO DESEADO.
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;
          case 9: echo "
           <div class='row'>
          <div data-alert class='alert-box success radius'>
                 ENHORABUENA! La solicitud de su pago fue exitosa, porfavor espere a que nuestros operarios revisen su pago y envien sus TOKENS
                 <a href='#' class='close'>&times;</a>
          </div></div>"; break;

          case 'default': break;
      }
  ?>

<?php
if(isset($_SESSION["usuario"])){
    if(isset($_GET["pg"]))
switch($_GET["pg"]){
    case "inicio":modulo($_GET["pg"]);break;
    case "logged":modulo($_GET["pg"]);break;
    case "perfil":modulo($_GET["pg"]);break;
    case "puntos":modulo($_GET["pg"]);break;
    case "pagos":modulo($_GET["pg"]);break;
    case "compras":modulo($_GET["pg"]);break;
    case "rifa":modulo($_GET["pg"]);break;
    case "about":modulo($_GET["pg"]);break;
    case "faq":modulo($_GET["pg"]);break;
    case "tc":modulo($_GET["pg"]);break;
    case "historial":modulo($_GET["pg"]);break;
    default:modulo('error');break;


}
else
    modulo("inicio");
}

elseif(isset($_GET["pg"]))
    switch($_GET["pg"]){
        case "inicio":modulo($_GET["pg"]);break;
        case "verify":modulo($_GET["pg"]);break;
        case "pass":modulo($_GET["pg"]);break;
        case "about":modulo($_GET["pg"]);break;
        case "faq":modulo($_GET["pg"]);break;
        case "tc":modulo($_GET["pg"]);break;
        case "compras":modulo($_GET["pg"]);break;

        default:modulo('error');break;
    }
else
    modulo("inicio");



?><div id="secondModal"  class="tiny reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
      <h2 id="secondModalTitle">Escribe tu correo electronico aqui.</h2>
      <form method="post" action="alsdkjhf.php">
          <input type="email" name="email" placeholder="tuemail@winget.com" />
          <input type="submit" id="boton" class="round button" value="Enviar" style="float: right; margin-top: 50px;" >
      </form>
      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>


  <div id="compra"  class="medium reveal-modal" data-reveal aria-labelledby="secondModalTitle" aria-hidden="true" role="dialog">
      <h2 id="secondModalTitle">Winget.</h2>



      <div class="row">

          <div style="text-align: center;" class="columns large-4">

              <div style="opacity: .98; width: 190px; height: 300px;" class="pricetag">
                  <img style="margin-top: 20px" src="img/taghole.png"/>
                  <img style="margin-top: 20px" class="imgSH" />
                  <hr/>
              </div>

          </div>

          <div class="columns large-8">
              <ul class="pricing-table">
                  <li class="title tipoRifa"></li>
                  <li class="price tokensRifa"></li>
                  <li class="description descidRifa"></li>

                  <form method="post" action="compra.php">
                      <input type="hidden" class="idLink " name="idobjeto" value="" />
                      <input type="hidden" class="valor" name="valor" value="" />
                      <input type="hidden" class="CoR" name="CoR" value="" />
                      <input type="hidden" name="user" value="<?php echo $_SESSION['usuario']; ?>" />
                      <li class="cta-button" style=""><input type="submit" style="" id="boton"  class="button" value="Comprar Ahora" ></li>
                  </form>

              </ul>
          </div>



      </div>



      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
  </div>



  <div id='videoModal' class='reveal-modal modalwin' style="max-width: 900px; " data-reveal aria-labelledby='videoModalTitle' aria-hidden='true' role='dialog''>
  <div style="text-align: center">
  <a href="#" data-reveal-id="login" class="secondary button">¿Ya estás registrado? Inicia sesión aqui.</a>
  </div>
      <form method="post" action="registro.php">
      <label id="confirmlabel" style="font-size: 50px; visibility: hidden;" class="error" ></label>
      <div class="row" style=" background-color: #f9f6fd;">

          <div class="large-6 columns" style="border-right: 3pt black solid;">
              <h1 class='subheader h1l'>Nombre:</h1>
              <input  id="nombre" oninput="checkfields()" type='text' name="nombre" class='subheader smallglowing-border' placeholder='nombre' style='font-size:25px ;'/>
          </div>
          <div class="large-6 columns">

              <h1 class='subheader h1l' style="font-size: 35px !important;">Fecha de Nacimiento:</h1>
              <input  type='date' id="fecha" oninput="checkfields()" name="fechanac" class='subheader smallglowing-border' placeholder='5' min='0' max='99' style='font-size:20px !important;'/>
          </div>

      </div>
      <div class="row" style="background-color: #f9f6fd;">

          <div class="large-6 columns" style="border-right: 3pt black solid;">
              <h1 class='subheader h1l'>Contraseña:</h1>
              <input  id="pss" oninput=" checkfields()" type='password' name="password" class='subheader smallglowing-border' placeholder='contra' style='font-size:25px ;'/>
          </div>
          <div class="large-6 columns">
              <h1 class='subheader h1l' style="font-size: 35px !important;" >Confirmar Contraseña:</h1>
              <input  id="pssc" oninput=" checkfields() " type='password' name="confpassword" class='subheader smallglowing-border' placeholder='contra' style='font-size:25px ;'/>
          </div>

      </div>
      <div class="row" style="background-color: #f9f6fd;">
          <div class="large-6 columns" style="border-right: 3pt black solid;">
              <h1 class='subheader h1l'>Correo:</h1>
              <input  id="correo" oninput="checkcorreo(this.value),checkfields(),cambio()" type='email' name="correo" class='subheader smallglowing-border' placeholder='pablo@winget.com' style='font-size:25px ;'/>
              <label id="respcorreo" oninput="checkfields()" class="error" style="visibility:hidden"></label>

          </div>
          <div class="large-6 columns" >

              <h1 class='subheader h1l'>Usuario:</h1>
              <input  id="usuario" oninput="checkuser(this.value), checkfields(),cambio()" type='text' name="user" class='subheader smallglowing-border' placeholder='usuario' style='font-size:25px ;'/>
              <label id="respuser" oninput="checkfields()" class="error" style="text-align:center; visibility:hidden"></label>

          </div>
      </div>
      <div class="row" style="background-color: #f9f6fd;">
          <div class="large-6 columns" style="border-right: 3pt black solid;">
              <h1 class='subheader h1l'>Número Favorito:</h1>
              <input  type='number' oninput="checkfields()" id="numfav" name="numfav" class='subheader smallglowing-border' placeholder='5' min='0' max='99' style='height="30px" font-size:15px !important;'/>
          </div>
          <div class="large-6 columns">

              <input type="submit" id="botoncho" class="round button" value="Registro" style="float: right; margin-top: 50px;" >
          </div>
      </div>
  </form>

  <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
  </div>

  <div id='login' class='reveal-modal modalwin ' style=" max-height: 600px !important; max-width: 500px !important;" data-reveal aria-labelledby='videoModalTitle' aria-hidden='true' role='dialog''>
  <label class="error" id="wronglabel" style="font-size:30px; visibility: hidden;">Error</label>
  <div style="text-align: center">
  <a href="#" data-reveal-id="videoModal" class="secondary button">¿Aún no tienes cuenta? ¡REGISTRATE aqui!</a>
  </div>
      <form method="post" action="valida.php">

      <div class="row" style="background-color: #f9f6fd;">
          <div class="large-12 columns" >

              <h1 class='subheader h1l' style="font-size: 30px;">Usuario:</h1>
              <input type='text' class='subheader smallglowing-border error' placeholder='MiUsuario' name="user" style='font-size:25px ;'/>
              <small id="wronge" class="error" style="visibility: hidden;">Usuario Incorrecto</small>
          </div>
          <div class="large-12 columns">
              <h1 class='subheader h1l' style="font-size: 30px;">Contraseña:</h1>
              <input  type='password' class='subheader smallglowing-border ' placeholder='password123' name="password" style='font-size:25px ;' />
              <small id="wrong" class="error" style="visibility: hidden;">Contraseña incorrecta</small>

          </div>

      </div>
      <a style="color: ;">¿Aún no recibes el correo de confirmación? Busca en tu bandeja de "correo no deseado". </a><span>o</span><br>
      <a href="#" data-reveal-id="secondModal" class="Gr8Link" >Click aquí para restablecer tu contraseña</a>

      <input  type="submit" style="float: right;" class="round button" value="Ingresar" style="float: right; margin-top: 50px !important;" >

  </form>




  <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
  </div>

  <div id='logout' class='reveal-modal modalwin ' style=" max-height: 500px !important; max-width: 500px !important;" data-reveal aria-labelledby='videoModalTitle' aria-hidden='true' role='dialog''>

  <form method="post" action="logout.php">

      <h1 class='subheader'>¿Estás seguro que deseas cerrar sesión?</h1>

      <small id="wrong" class="error" style="visibility: hidden;">Contraseña incorrecta</small>
      <input  type="submit" class="round button" value="Cerrar Sesion" style="float: right; margin-top: 50px !important;" >
  </form>




  <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
  </div>

  <div id='contactus' class='reveal-modal modalwin medium ' data-reveal aria-labelledby='contactus' aria-hidden='true' role='dialog''>

  <form method="post" action="contacto.php">

      <h1 class='subheader h1l' style="font-size: 30px;">Tu Nombre:</h1>
      <input  type='text' class='subheader smallglowing-border ' placeholder='nombre' name="nombre" style='font-size:25px ;' />

      <h1 class='subheader h1l' style="font-size: 30px;">Tu Usuario:</h1>
      <input  type='text' class='subheader smallglowing-border ' placeholder='usuario' name="usuario" style='font-size:25px ;' />

      <h1 class='subheader h1l' style="font-size: 30px;">Tu Correo:</h1>
      <input  type='text' class='subheader smallglowing-border ' placeholder='correo' name="correo" style='font-size:25px ;' />


      <h1 class='subheader h1l' style="font-size: 30px;">Pregunta o descripción:</h1>
      <textarea name="descrip" id="desc" cols="30" rows="10" name="desc"></textarea>


      <input  type="submit" class="round button" value="Enviar" style="float: right;" >
  </form>




  <a class='close-reveal-modal' aria-label='Close'>&#215;</a>
  </div>

  <script src="js/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
      $(document).foundation();
      if(jQuery('#btnfaq').click) {
          $("html").animate({ scrollTop: $('#faqpanel').offset().top }, 1000);
      }

  </script>

  <?php
  if(isset($_GET["resp"]) and $_GET["resp"] == 2)
  echo "<script> $('#login').foundation('reveal', 'open'); document.getElementById('wrong').style.visibility = 'visible'; document.getElementById('wronglabel').style.visibility = 'visible'; document.getElementById('wronge').style.visibility = 'visible'; </script>";

  ?>

  <script type="text/javascript">


          $(document).foundation();



          $('a.idRifa').click(function(){

              var link = $('.idLink');
              var str = this.href;

              var arr = str.split("/");
              var text = "";

              var CoR = decodeURI(arr[7]);//7 SERVIDOR 8 LOCALHOST
              var descRifa = decodeURI(arr[4]);//4 SERVIDOR 5 LOCALHOST
              var tipoRifa = decodeURI(arr[5]);//5 SERVIDOR 6 LOCALHOST
              var tokenRifa = decodeURI(arr[6]);//6 SERVIDOR 7 LOCALHOST
              var idRifa = decodeURI(arr[3]);//3 SERVIDOR 4 LOCALHOST
              //alert(arr);

              $('.descidRifa').html(descRifa);
              $('.tipoRifa').html(tipoRifa);
              $('.tokensRifa').html(tokenRifa + " Tokens");



              switch (tipoRifa){
                  case "League of Legends":$('.imgSH').attr('src',"img/riotgift.png");break;
                  case "Apple":$('.imgSH').attr('src',"img/igift.png");break;
                  case "Play Station":$('.imgSH').attr('src',"img/psgift.png");break;
                  case "Runescape ":$('.imgSH').attr('src',"img/runegift.png");break;
                  case "HearthStone":$('.imgSH').attr('src',"img/hearthstonegift.png");break;
                  case "Steam":$('.imgSH').attr('src',"img/steamgift.png");break;
                  case "Google":$('.imgSH').attr('src',"img/googlegift.png");break;

              }





              $(link).attr('value', idRifa);
              $(".valor").attr('value', tokenRifa);
              $(".CoR").attr('value', CoR);



          });

          function setCookie(cname, cvalue, exdays) {
              var d = new Date();
              d.setTime(d.getTime() + (exdays*24*60*60*1000));
              var expires = "expires="+d.toUTCString();
              document.cookie = cname + "=" + cvalue + "; " + expires;
          }

          function post(path, params, method) {
              method = method || "post"; // Set method to post by default if not specified.

              // The rest of this code assumes you are not using a library.
              // It can be made less wordy if you use one.
              var form = document.createElement("form");
              form.setAttribute("method", method);
              form.setAttribute("action", path);

              for(var key in params) {
                  if(params.hasOwnProperty(key)) {
                      var hiddenField = document.createElement("input");
                      hiddenField.setAttribute("type", "hidden");
                      hiddenField.setAttribute("name", key);
                      hiddenField.setAttribute("value", params[key]);

                      form.appendChild(hiddenField);
                  }
              }

              document.body.appendChild(form);
              form.submit();
          }


          function checkcorreo(nombre){
              $.ajax({
                  type: 'POST',
                  url: 'checkcorreo.php',
                  data: {
                      datos:nombre
                  }
              }).done(function (respuesta){
                  $('#respcorreo').text(respuesta);

                  if(respuesta != ""){
                      document.getElementById("respcorreo").style.visibility = "visible";
                      document.getElementById("botoncho").style.visibility = "hidden";
                  }
                  else{
                      document.getElementById("respcorreo").style.visibility = "hidden";
                      document.getElementById("botoncho").style.visibility = "visible";
                  }
              });
          }

          function checkuser(nombre){
              $.ajax({
                  type: 'POST',
                  url: 'checkuser.php',
                  data: {
                      datos:nombre
                  }
              }).done(function (respuesta){
                  $('#respuser').text(respuesta);

                  if(respuesta != ""){
                  document.getElementById("respuser").style.visibility = "visible";
                  document.getElementById("botoncho").style.visibility = "hidden";
                  }
                  else{
                      document.getElementById("respuser").style.visibility = "hidden";
                      document.getElementById("botoncho").style.visibility = "visible";
                  }

              });
          }


          function checkfields(){



              //user,nombre,pss,pssc,correo,cel,boton
              todolleno = true;

              if(document.getElementById("nombre").value == "")
                  todolleno = false;
              if(document.getElementById("usuario").value == "")
                  todolleno = false;
              if(document.getElementById("pss").value == "")
                  todolleno = false;
              if(document.getElementById("pssc").value == "")
                  todolleno = false;
              if(document.getElementById("correo").value == "")
                  todolleno = false;
              if(document.getElementById("fecha").value == "")
                  todolleno = false;
              if(document.getElementById("numfav").value == "")
                  todolleno = false;

              /*if(document.getElementById("respcorreo").textContent == "ya existe ese correo!")
                  todolleno = false;
              if(document.getElementById("respuser").textContent == "ya existe ese usuario!")
                  todolleno = false;*/

              if((document.getElementById("pss").value != document.getElementById("pssc").value)){
                  document.getElementById("confirmlabel").style.visibility = "visible";
                  document.getElementById("confirmlabel").style.textShadow = "0.1em 0.1em 0.1em black";
                  document.getElementById("confirmlabel").textContent = "Las contraseñas no coinciden...";
              }
              else{
                  document.getElementById("confirmlabel").style.visibility = "hidden";
                  document.getElementById("confirmlabel").textContent = "";
              }


              if(todolleno && (document.getElementById("confirmlabel").textContent == "") &&  (document.getElementById("pss").value == document.getElementById("pssc").value) ){
                  document.getElementById("botoncho").style.background = "#2ba6cb";
                  document.getElementById("botoncho").disabled = false;
              }
              else{

                  document.getElementById("botoncho").style.background = "grey";
                  document.getElementById("botoncho").disabled = true;
              }
          }


          function newpass(){
              //user,nombre,pss,pssc,correo,cel,boton
              todolleno = true;

              if(document.getElementById("pss").value == "")
                  todolleno = false;
              if(document.getElementById("pssc").value == "")
                  todolleno = false;


              if((document.getElementById("pss").value != document.getElementById("pssc").value)){
                  document.getElementById("confirmlabel").style.visibility = "visible";
                  document.getElementById("confirmlabel").style.textShadow = "0.1em 0.1em 0.1em black";
                  document.getElementById("confirmlabel").textContent = "Las contraseñas no coinciden...";
              }
              else{
                  document.getElementById("confirmlabel").style.visibility = "hidden";
                  document.getElementById("confirmlabel").textContent = "";
              }


              if(todolleno && (document.getElementById("confirmlabel").textContent == "") && (document.getElementById("pss").value == document.getElementById("pssc").value) ){
                  document.getElementById("botonex").style.background = "#2ba6cb";
                  document.getElementById("botonex").disabled = false;
              }
              else{
                  document.getElementById("botonex").style.background = "grey";
                  document.getElementById("botonex").disabled = true;
              }
          }




  </script>




  </body>
<footer class="row">
    <div class="large-12 columns">
        <hr/>
        <div class="row">
            <div class="large-4 columns">
                <p style="color: black">WINGET © Todos los derechos reservados.</p>
            </div>

            <div class="large-4 columns">
                <p style="text-align: right; color: black;">Síguenos en:</p>
            </div>

            <div class="large-4 columns">
                <ul class="inline-list right">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"><img src="img/stucco-twitter-32px.png"/></a></li>
                    <li>
                        <a href="http://instagram.com/wingetclub?ref=badge" class="ig-b- ig-b-32"><img src="//badges.instagram.com/static/images/ig-badge-32.png" alt="Instagram" /></a> </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</html>

