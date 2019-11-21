<?php
require 'conexaobanco.class.php';
class MicroDAO
{ //DAO - data access object - acesso aos dados do objeto

  private $conexao = null;

  public function __construct()
  {
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function __destruct()
  { }

  public function cadastrarMicro($micro)
  {

    try {
      $statement = $this->conexao->prepare(
        "INSERT into micro(idMicro,numberComputer,setor,nameRoom,brand,model,
              serie,numberScore,patrimony,operationalSystem,processor,memory,hd,name,mac,ip,warranty,equityNumber)
           values(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
      );
      $statement->bindValue(1, $micro->numberComputer);
      $statement->bindValue(2, $micro->setor);
      $statement->bindValue(3, $micro->nameRoom);
      $statement->bindValue(4, $micro->brand);
      $statement->bindValue(5, $micro->model);
      $statement->bindValue(6, $micro->serie);
      $statement->bindValue(7, $micro->numberScore);
      $statement->bindValue(8, $micro->patrimony);
      $statement->bindValue(9, $micro->operationalSystem);
      $statement->bindValue(10, $micro->processor);
      $statement->bindValue(11, $micro->memory);
      $statement->bindValue(12, $micro->hd);
      $statement->bindValue(13, $micro->name);
      $statement->bindValue(14, $micro->mac);
      $statement->bindValue(15, $micro->ip);
      $statement->bindValue(16, $micro->warranty);
      $statement->bindValue(17, $micro->equityNumber);
      $statement->execute();
    } catch (PDOException $error) {
      echo "Erro ao cadastrar micro!" . $error;
    } //fecha catch

  } //fecha método cadastrar

  public function buscarMicro()
  {
    try {

      $statement = $this->conexao->query("SELECT * FROM micro");
      $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Micro');
      return $array;
    } catch (PDOException $error) {
      echo "Erro ao buscar cadastros!" . $error;
    } //fecha catch

  } //fecha método buscar

  public function filtrarMicro($pesquisa, $filtro)
  {
    try {

      $query = "";
      switch ($filtro) {
        case "idMicro":
          $query = "where idMicro = " . $pesquisa;
          break;
        case "numberComputer":
          $query = "where numberComputer like '%" . $pesquisa . "%'";
          break;
        case "setor":
          $query = "where setor like '%" . $pesquisa . "%'";
          break;
        case "patrimony":
          $query = "where patrimony like '%" . $pesquisa . "%'";
          break;
        case "name":
          $query = "where name like '%" . $pesquisa . "%'";
          break;
        case "ip":
          $query = "where ip like '%" . $pesquisa . "%'";
          break;
        case "numberScore":
          $query = "where numberScore like '%" . $pesquisa . "%'";
          break;
        default:
          $query = "";
          break;
      } //fecha switch

      if (empty($pesquisa)) {
        $query = "";
      } //fecha if

      $statement = $this->conexao->query("SELECT * from micro {$query}");
      $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Micro');
      return $array;
    } catch (PDOException $error) {
      echo "Erro ao filtrar!" . $error;
    } //fecha catch

  } //fecha método filtrar

  public function deletarMicro($idMicro)
  {
    try {

      $statement = $this->conexao->prepare("DELETE from micro WHERE idMicro = ?");
      $statement->bindValue(1, $idMicro);
      $statement->execute();
    } catch (PDOException $error) {
      echo "Erro ao deletar! " . $error;
    } //fecha catch

  } //fecha método deletar

  public function alterarMicro($micro)
  {
    try {

      $statement = $this->conexao->prepare("UPDATE micro SET numberComputer=?, setor=?, nameRoom=?, brand=?, model=?,
         serie=?, numberScore=?, patrimony=?, operationalSystem=?, processor=?, memory=?, hd=?, name=?, mac=?, ip=?,
          warranty=?, equityNumber=? WHERE idMicro = ?");
      $statement->bindValue(1, $micro->numberComputer);
      $statement->bindValue(2, $micro->setor);
      $statement->bindValue(3, $micro->nameRoom);
      $statement->bindValue(4, $micro->brand);
      $statement->bindValue(5, $micro->model);
      $statement->bindValue(6, $micro->serie);
      $statement->bindValue(7, $micro->numberScore);
      $statement->bindValue(8, $micro->patrimony);
      $statement->bindValue(9, $micro->operationalSystem);
      $statement->bindValue(10, $micro->processor);
      $statement->bindValue(11, $micro->memory);
      $statement->bindValue(12, $micro->hd);
      $statement->bindValue(13, $micro->name);
      $statement->bindValue(14, $micro->mac);
      $statement->bindValue(15, $micro->ip);
      $statement->bindValue(16, $micro->warranty);
      $statement->bindValue(17, $micro->equityNumber);
      $statement->bindValue(18, $micro->idMicro);
      $statement->execute();
    } catch (PDOException $error) {
      echo "Erro ao alterar micro!" . $error;
    } //fecha catch

  } //fecha método alterar

}//fecha classe
