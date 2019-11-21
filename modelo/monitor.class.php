<?php
class Monitor
{
  private $idMonitor;
  private $numberScreen;
  private $setor;
  private $nameRoom;
  private $brand;
  private $model;
  private $serie;
  private $patrimony;
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
    return nl2br("ID: $this->idMonitor
                       Número do monitor: $this->numberScreen
                       Setor: $this->setor
                       Nome da sala: $this->nameRoom
                       Marca: $this->brand
                       Modelo: $this->model
                       Série: $this->serie
                       Patrimônio: $this->patrimony
                       Garantia: $this->warranty
                       Numero de Patrimônio: $this->equityNumber");
  }
}
