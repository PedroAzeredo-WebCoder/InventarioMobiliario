<?php
class Validacao
{
  public static function validarNameRoom($valor): bool
  {
    $expressao = "/^[a-zA-ZàÀèÈìÌòÒáÁéÉíÍóÓúÚôÔãÃõÕç ]{2,40}[0-9]{0,2}$/";
    return preg_match($expressao, $valor);
  } //fecha validarNameRoom

  public static function validarBrand($valor): bool
  {
    $expressao = "/^[a-zA-Z ]{2,10}$/";
    return preg_match($expressao, $valor);
  } //fecha validarBrand

  public static function validarEquityNumber($valor): bool
  {
    $expressao = "/^[0-9]{5,7}$/";
    return preg_match($expressao, $valor);
  } //fecha validarnumeropatrimonio

  public static function validarNumberRoom($valor): bool
  {
    $expressao = "/^[1-7]{1}$/";
    return preg_match($expressao, $valor);
  } //fecha validarNome da sala
  public static function validarOperationalSystem($valor): bool
  {
    $expressao = "/^[Windows|windows|linux|Linux|x|p ]{5,10}[7|8|10]{0,2}$/";
    return preg_match($expressao, $valor);
  } //fecha validarSistema
  public static function validarPassword($valor): bool
  {
    $expressao = "/^elbemala1999$/";
    return preg_match($expressao, $valor);
  } //fecha validarSenha

}// fecha classe validação
