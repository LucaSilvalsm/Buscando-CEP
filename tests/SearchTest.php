<?php

use PHPUnit\Framework\TestCase;
use Luckas\BuscarCep\Search;

class SearchTest extends TestCase{ // realizando os teste
    public function testGetAddressFromZipcodeDefaut()  {
        $resultado = new Search();
       $resultado = $resultado->getAddressFromZipcode('25275500');
       $esperado = [        
        "cep" => "25275-500",
        "logradouro" => "Rua Professor Augusto Fernandes de Oliveira",
        "complemento" =>"",
        "bairro" => "Santa Lúcia",
        "localidade" => "Duque de Caxias",
        "uf" => "RJ",
        "ibge" => "330170",
        "gia"=>"",
        "ddd" => "21",
        "siafi" => "5833"        
   ];
   $this->assertEquals($esperado, $resultado);
    }
}