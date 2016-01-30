

<?php
/**
 * Created by PhpStorm.
 * User: Armando Roque
 * Date: 30/04/15
 * Time: 22:50
 */


$nombreb = "NOMBRE";
$cantidad = "CANTIDAD";
$name = $_SESSION["usuario"];

if(isset($_GET["bnombre"]))
    $nombreb = $_GET["bnombre"];
if(isset($_GET["c"]))
    $cantidad = $_GET["c"];

switch ($_GET["tipop"]){
    case "CBF":$rvalue = "Cuenta Bancaria FICOHSA";break;
    case "CBO":$rvalue = "Cuenta Bancaria OCCIDENTE";break;
    case "TigoMoney":$rvalue = "Tigo Money";break;
    default :$rvalue = $_GET["tipop"];break;
}

echo '<div class="row">
    <div class="large-12 columns">
        <div class="panel " style="border-radius: 25px;">
            <h1 class="montserrat">'.$rvalue.'</h1>
        </div>
    </div>
</div>';

if(isset($_GET["tipop"]))
switch($_GET["tipop"]){
    case "paypal":echo '

    <div class="row panel" style="border-radius: 25px;" >
        <div class="columns large-4">
                   '.$nombreb.'
        </div>
        <div class="columns large-4">
                   '.$cantidad.' Tokens
        </div>';

        switch($_GET["bnombre"]){
            case 'Bronze': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="M457BLSQKUXEL">
        <input type="hidden" name="custom" value="'.$name.'">
        <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>';break;
            case 'Silver': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8GTAGNTXB93DG">
<input type="hidden" name="custom" value="'.$name.'">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
';break;
            case 'Gold': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="F3BEGXVHRXVRJ">
<input type="hidden" name="custom" value="'.$name.'">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
';break;
            case 'Platinum': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="7YXAQRDZWA85Y">
<input type="hidden" name="custom" value="'.$name.'">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
';break;
            case 'Diamond': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HHZJYGKHY2ENS">
<input type="hidden" name="custom" value="'.$name.'">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
';break;
            case 'Challenger': echo '
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FB9A2STMET6A6">
<input type="hidden" name="custom" value="'.$name.'">
<input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
';break;

        } echo '</div>


    </div>

    ';break;
    case "TigoMoney":
        echo'
        <div class="row panel" style="border-radius: 25px;" >
        <div class="columns large-2">
                   '.$nombreb.'
        </div>
        <div class="columns large-2">
                   '.$cantidad.' Tokens
        </div>
        <div class="columns large-8">
              Efectua el pago con tu Nombre en cualquier agencia tigo o establecimiento que tenga TIGO MONEY y deposita al numero<br>
              +504 9689-5978<br>
              Una vez el pago a sido efectuado haz click en el boton! uno de nuestros operarios se encargara de rastrear el pago
              y agregar tus TOKENS una vez aprobado<br>

              <form method="post" action="pagotokens.php">
              <input type="hidden" name="usuario" value="'.$_SESSION["usuario"].'"/>
          <input type="hidden" name="nombre" value="'.$_COOKIE["nombreusu"].'"/>
          <input type="hidden" name="cantidadTokens" value="'.$cantidad.'"/>
          <input type="hidden" name="tipoPago" value="'.$_GET["tipop"].'"/>

          <input type="submit" id="boton" class="button" value="Click Aqui" style="float: right; margin-top: 50px;" >
      </form>

        </div>





        </div>
        ';




        break;
    case "CBF":
    echo'
        <div class="row panel" style="border-radius: 25px;" >
        <div class="columns large-2">
                   '.$nombreb.'
        </div>
        <div class="columns large-2">
                   '.$cantidad.' Tokens
        </div>
        <div class="columns large-8">
              Efectua el pago con tu Nombre en cualquier agencia de Banco Ficohsa deposita a la cuenta<br>
              0007680767
              <br>
              Una vez el pago a sido efectuado haz click en el boton! uno de nuestros operarios se encargara de rastrear el pago
              y agregar tus TOKENS una vez aprobado<br>

             <form method="post" action="pagotokens.php">
             <input type="hidden" name="usuario" value="'.$_SESSION["usuario"].'"/>
          <input type="hidden" name="nombre" value="'.$_COOKIE["nombreusu"].'"/>
          <input type="hidden" name="cantidadTokens" value="'.$cantidad.'"/>
          <input type="hidden" name="tipoPago" value="'.$_GET["tipop"].'"/>

          <input type="submit" id="boton" class="button" value="Click Aqui" style="float: right; margin-top: 50px;" >
      </form>
        </div>
        </div>
        ';break;
    case "CBO":
        echo'
        <div class="row panel" style="border-radius: 25px;" >
        <div class="columns large-2">
                   '.$nombreb.'
        </div>
        <div class="columns large-2">
                   '.$cantidad.' Tokens
        </div>
        <div class="columns large-8">
              Efectua el pago con tu Nombre en cualquier agencia de Banco Occidente deposita a la cuenta<br>
              2124 7001 5280
              <br>
              Una vez el pago a sido efectuado haz click en el boton! uno de nuestros operarios se encargara de rastrear el pago
              y agregar tus TOKENS una vez aprobado<br>

              <form method="post" action="pagotokens.php">
          <input type="hidden" name="usuario" value="'.$_SESSION["usuario"].'"/>
          <input type="hidden" name="nombre" value="'.$_COOKIE["nombreusu"].'"/>
          <input type="hidden" name="cantidadTokens" value="'.$cantidad.'"/>
          <input type="hidden" name="tipoPago" value="'.$_GET["tipop"].'"/>

          <input type="submit" id="boton" class="button" value="Click Aqui" style="float: right; margin-top: 50px;" >
      </form>
        </div>
        </div>
        ';break;

}

//<div class="columns large-4">
//<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
//            <input type="hidden" name="cmd" value="_s-xclick">
//            <input type="hidden" name="hosted_button_id" value="M457BLSQKUXEL">
//            <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
//            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
//            </form>

?>






