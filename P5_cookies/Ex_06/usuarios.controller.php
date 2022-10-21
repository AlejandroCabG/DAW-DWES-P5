<?php
// Llamamos al modelo
require('usuarios.model.php');

$artic = new Articulos_model();
$pagina = (isset($_GET['pagina']))?$_GET['pagina']: 1;
$articulos = $artic->getArticulos($pagina);
$numeroPaginas = $artic->getTotalPages();

// Llamamos a la vista
header('Content-Type: text/html; charset=utf-8');
require('usuarios.view.phtml');
