<?php 
$servername = "localhost";
$username = "id17436352_root";
$password = "sjE8K+X0&b9y|F7%";
$dbname = "id17436352_crud";

function validar(){
    session_start();
if (empty($_SESSION["nombre"]))
{
  echo "Se detecto un acceso ilegal al sistema, su ip esta siendo monitoreada y sera enviada a la policia";
  ?>
  <a href="http://localhost/crud/">Sitio de login</a>
  <?php
  exit();
}
}

?>