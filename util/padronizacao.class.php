<?php
class Padronizacao
{

  public static function padronizarNome($valor): string
  {
    return ucwords(strtolower($valor));
  }
  public static function padronizarMac($valor): string
  {
    return ucwords(strtoupper($valor));
  }
  public static function padronizarSerie($valor): string
  {
    return ucwords(strtoupper($valor));
  }
  
}
