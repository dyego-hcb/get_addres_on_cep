<?php

namespace Entities;

class Address {
    public $cep;
    public $logradouro;
    public $bairro;
    public $uf;

    public function get_address($cep) {
        $cep = preg_replace("/[^0-9]/", "", $cep);
        $url = "http://viacep.com.br/ws/$cep/xml/";

        $xml = simplexml_load_file($url);

        $this->cep = (string) $cep;
        $this->logradouro = (string) $xml->logradouro;
        $this->bairro = (string) $xml->bairro;
        $this->uf = (string) $xml->uf;

        return $this;
    }
}

?>
