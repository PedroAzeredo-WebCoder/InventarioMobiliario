<?php
class Impressora
{
    private $idImpressora;
    private $setor;
    private $nameRoom;
    private $namePrinter;
    private $brand;
    private $model;
    private $serie;
    private $numberScore;
    private $patrimony;
    private $ip;
    private $warranty;
    private $equityNumber;

    public function __construct()
    { }

    public function __destruct()
    { }

    public function __get($atributo)
    {
        return $this->$atributo;
    }

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    public function __toString()
    {
        return nl2br("ID: $this->idImpressora
                       Setor: $this->setor
                       Nome da sala: $this->nameRoom
                       Nome da Impressora: $this->namePrinter
                       Marca: $this->brand
                       Modelo: $this->model
                       Série: $this->serie
                       N° do Ponto Lógico: $this->numberScore
                       Patrimônio: $this->patrimony
                       IP: $this->ip
                       Garantia: $this->warranty
                       Numero de Patrimônio: $this->equityNumber");
    }
} //fecha classe impressora
