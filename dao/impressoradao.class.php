<?php
require 'conexaobanco.class.php';
class ImpressoraDAO
{ //abre classe ImpressoraDAO

  private $conexao = null;

  public function __construct()
  {
    $this->conexao = ConexaoBanco::getInstance();
  }

  public function __destruct()
  { }

  public function cadastrarImpressora($impressora)
  {
    try {
      $numberScore = $impressora->numberScore;
      $ip = $impressora->ip;

        $statement = $this->conexao->prepare(
          "INSERT into impressora(idImpressora,setor,nameRoom,namePrinter,brand,model,serie,numberScore,patrimony,ip,warranty,equityNumber)
              values(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
        );
        $statement->bindValue(1, $impressora->setor);
        $statement->bindValue(2, $impressora->nameRoom);
        $statement->bindValue(3, $impressora->namePrinter);
        $statement->bindValue(4, $impressora->brand);
        $statement->bindValue(5, $impressora->model);
        $statement->bindValue(6, $impressora->serie);
        $statement->bindValue(7, (! empty($numberScore) ? $numberScore : null));
        $statement->bindValue(8, $impressora->patrimony);
        $statement->bindValue(9, (! empty($ip) ? $ip : null));
        $statement->bindValue(10, $impressora->warranty);
        $statement->bindValue(11, $impressora->equityNumber);
        return $statement->execute();

       
    } catch (PDOException $error) {
      echo "Erro ao cadastrar impressora!" . $error;
    } //fecha catch

  } //fecha método cadastrar

  public function buscarImpressora()
  {
    try {

      $statement = $this->conexao->query("SELECT * FROM impressora ORDER BY setor ASC");
      $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Impressora');
      return $array;
    } catch (PDOException $error) {
      echo "Erro ao buscar cadastros!" . $error;
    } //fecha catch

  } //fecha método buscar

  public function filtrarImpressora($pesquisa, $filtro)
  {
    try {
      $query = "";
      switch ($filtro) {
        case "idImpressora":
          $query = "where idImpressora = " . $pesquisa;
          break;
        case "setor":
          $query = "where setor like '%" . $pesquisa . "%'";
          break;
        case "namePrinter":
          $query = "where namePrinter like '%" . $pesquisa . "%'";
          break;
        case "brand":
          $query = "where brand like '%" . $pesquisa . "%'";
          break;
        case "patrimony":
          $query = "where patrimony like '%" . $pesquisa . "%'";
          break;
        case "equityNumber":
          $query = "where equityNumber like '%" . $pesquisa . "%'";
          break;
        default:
          $query = "";
          break;
      } //fecha switch

      if (empty($pesquisa)) {
        $query = "";
      } //fecha if

      $statement = $this->conexao->query("SELECT * from impressora {$query}");
      $array = $statement->fetchAll(PDO::FETCH_CLASS, 'Impressora');
      return $array;
    } catch (PDOException $error) {
      echo "Erro ao filtrar!" . $error;
    } //fecha catch

  } //fecha método filtrar

  public function deletarImpressora($idImpressora)
  {
    try {

      $statement = $this->conexao->prepare("DELETE from impressora WHERE idImpressora = ?");
      $statement->bindValue(1, $idImpressora);
      $statement->execute();
    } catch (PDOException $error) {
      echo "Erro ao deletar! " . $error;
    } //fecha catch

  } //fecha método deletar

  public function alterarImpressora($impressora)
  {
    try {
      $statement = $this->conexao->prepare("UPDATE impressora SET setor=?, nameRoom=?, namePrinter=?, brand=?, model=?,
            serie=?,  numberScore=?, patrimony=?, ip=?, warranty=?, equityNumber=? WHERE idImpressora=?");
      $statement->bindValue(1, $impressora->setor);
      $statement->bindValue(2, $impressora->nameRoom);
      $statement->bindValue(3, $impressora->namePrinter);
      $statement->bindValue(4, $impressora->brand);
      $statement->bindValue(5, $impressora->model);
      $statement->bindValue(6, $impressora->serie);
      $statement->bindValue(7, $impressora->numberScore);
      $statement->bindValue(8, $impressora->patrimony);
      $statement->bindValue(9, $impressora->ip);
      $statement->bindValue(10, $impressora->warranty);
      $statement->bindValue(11, $impressora->equityNumber);
      $statement->bindValue(12, $impressora->idImpressora);
      $statement->execute();
    } catch (PDOException $error) {
      echo "Erro ao alterar impressora!" . $error;
    } //fecha catch

  } //fecha método alterar

} //fecha classe DAO
