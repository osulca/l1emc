<?php
include_once "TiposPagoAbstract.php";
include_once "ComprarProductos.php";

$comprarProductos = new ComprarProductos();
echo $comprarProductos->pagar();
// instanciar y aplicar clases