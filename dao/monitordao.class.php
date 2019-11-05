<?php
require 'conexaobanco.class.php';
class MonitorDAO
{ //DAO - data access object - acesso aos dados do objeto

  private $conexao = null;

  public function __construct()
  {
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function __destruct()
  {
  }

  public function cadastrarMonitor($monitor)
  {
      try{

          $statement = $this->conexao->prepare(
            "INSERT into monitor(idMonitor,numberScreen,setor,nameRoom,brand,model,serie,patrimony,warranty,equityNumber)
            values(null, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $statement->bindValue(1, $monitor->numberScreen);
                $statement->bindValue(2, $monitor->setor);
                $statement->bindValue(3, $monitor->nameRoom);
                $statement->bindValue(4, $monitor->brand);
                $statement->bindValue(5, $monitor->model);
                $statement->bindValue(6, $monitor->serie);
                $statement->bindValue(7, $monitor->patrimony);
                $statement->bindValue(8, $monitor->warranty);
                $statement->bindValue(9, $monitor->equityNumber);
                $statement->execute();

      } catch(PDOException $error) {
        echo "Erro ao cadastrar monitor!".$error;
      }//fecha catch

  }//fecha método cadastrar

  public function buscarMonitor()
  {
    try {

      $statement = $this->conexao->query("SELECT * FROM monitor");
      $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Monitor');
      return $array;

    } catch(PDOException $error) {
      echo "Erro ao buscar cadastros!".$error;
    }//fecha catch

  }//fecha método buscar

    public function filtrarMonitor($pesquisa, $filtro)
      {
        try {
          $query = "";
          switch($filtro) {
            case "idMonitor": $query = "where idMonitor = ".$pesquisa;
            break;
            case "numberScreen": $query = "where numberScreen like '%".$pesquisa."%'";
            break;
            case "setor": $query = "where setor like '%".$pesquisa."%'";
            break;
            case "brand": $query = "where brand like '%".$pesquisa."%'";
            break;
            case "serie": $query = "where serie like '%".$pesquisa."%'";
            break;
            case "equityNumber": $query = "where equityNumber like '%".$pesquisa."%'";
            break;
            default: $query = "";
            break;
          }//fecha switch

          if(empty($pesquisa)) {
            $query = "";
          }//fecha if

            $statement = $this->conexao->query("SELECT * from monitor {$query}");
            $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Monitor');
            return $array;

        } catch(PDOException $error) {
          echo "Erro ao filtrar!".$error;
        }//fecha catch

     }//fecha método filtrar

      public function deletarMonitor($idMonitor)
    {
      try {

        $statement = $this->conexao->prepare("DELETE from monitor WHERE idMonitor = ?");
        $statement->bindValue(1, $idMonitor);
        $statement->execute();

      } catch(PDOException $error) {
        echo "Erro ao deletar! ".$error;
      }//fecha catch

     }//fecha método deletar

      public function alterarMonitor($monitor)
       {
           try {
               $statement = $this->conexao->prepare("UPDATE monitor SET numberScreen=?, setor=?, nameRoom=?, brand=?, model=?,
                serie=?, patrimony=?, warranty=?, equityNumber=? WHERE idMonitor=?");
               $statement->bindValue(1, $monitor->numberScreen);
               $statement->bindValue(2, $monitor->setor);
               $statement->bindValue(3, $monitor->nameRoom);
               $statement->bindValue(4, $monitor->brand);
               $statement->bindValue(5, $monitor->model);
               $statement->bindValue(6, $monitor->serie);
               $statement->bindValue(7, $monitor->patrimony);
               $statement->bindValue(8, $monitor->warranty);
               $statement->bindValue(9, $monitor->equityNumber);
               $statement->bindValue(10, $monitor->idMonitor);
               $statement->execute();

           } catch(PDOException $error) {
             echo "Erro ao alterar monitor!".$error;
           }//fecha catch

       }//fecha método alterar

  }//fecha classe DAO
