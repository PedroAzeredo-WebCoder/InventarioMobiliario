<?php
class Micro
{
    private $idMicro;
    private $numberComputer;
    private $setor;
    private $nameRoom;
    private $brand;
    private $model;
    private $serie;
    private $numberScore;
    private $patrimony;
    private $operationalSystem;
    private $processor;
    private $memory;
    private $hd;
    private $name;
    private $mac;
    private $ip;
    private $warranty;
    private $equityNumber;

public function __construct()
{
}

public function __destruct()
{
}

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
     return nl2br("ID: $this->idMicro
                   Número do computador: $this->numberComputer
                   Setor: $this->setor
                   Nome da sala: $this->nameRoom
                   Marca: $this->brand
                   Modelo: $this->model
                   Série: $this->serie
                   Ponto Lógico: $this->numberScore
                   Patrimônio: $this->patrimony
                   Sistema Operacional: $this->operationalSystem
                   Processador: $this->processor
                   Memória: $this->memory
                   HD: $this->hd
                   Nome do Computador: $this->name
                   MAC: $this->mac
                   IP: $this->ip
                   Garantia: $this->warranty
                   Numero de Patrimônio: $this->equityNumber");
 }

}//fecha classe
