<?php
class Login
{
    private $idLogin;
    private $senha;
    
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
         return nl2br("ID: $this->idLogin
                       Senha: $this->senha");
       }
     }
