<?php

use Wead\BuscarCep\Search;

require_once "vendor/autoload.php";

$buscar = new Search(); // Certifique-se de que o nome da variável está correto

$resultado = $buscar->getAddressFromZipcode('25275500'); // Use a variável correta

print_r($resultado);

?>
