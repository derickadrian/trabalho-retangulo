<?php
require_once "../../vendor/autoload.php";

use \App\Model\Rectangle;

if(!isset($_POST['altura']) && !isset($_POST['largura'])) {
  header("location:../../index.html");
}

$rectangle = new Rectangle;

$rectangle->altura = $_POST['altura'] ?? 1;
$rectangle->largura = $_POST['largura'] ?? 1;

header("location:../../answer.php?altura={$rectangle->altura}&largura={$rectangle->largura}&area={$rectangle->area()}&perimetro={$rectangle->perimeter()}");
?>
