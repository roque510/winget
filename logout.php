<?php
session_start();
session_destroy();
setcookie("nombreusu", "", time()-3600);
setcookie("usuario", "", time()-3600);
echo '<script>window.location="index.php?pg=inicio"</script>';
?>