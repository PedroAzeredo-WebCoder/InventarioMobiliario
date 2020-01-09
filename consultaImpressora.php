<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <!--Abre cabeçalho-->
  <title>Inventário Mobiliário</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Inventario Mobiliario" />
  <meta name="keywords" content="cadastroMicro,cadastroImpressora,cadastroMonitor,InventarioMobiliario,Micro,Monitor,Impressora,PACS,Pacs" />
  <meta name="author" content="Pedro da Silveira Azeredo" />
  <meta http-equiv="refresh" content="300" />
  <meta name="generator" content="Atom" />
  <link rel="shortcut icon" href="img/icon.ico" type="img/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/docs/4.0/assets/js/docs.min.js"></script>
  <script src="js/mask.js"></script>
</head>
<!--Fecha Cabeçalho-->

<style>
      body{
          background: linear-gradient(to bottom right, #e1e9f7 , #82afff 20%);
          background-repeat:no-repeat;
          background-size:100% 100%;
      }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php" id="nomeMenu" title="Voltar ao Início">Inventário</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="cadastroImpressora.php">Cadastrar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="consultaImpressora.php">Consultar <span class="sr-only">(current)</span></a>
          </li>
      </ul>
    </div>
  </nav>

  <div id="tam">
      <h1 class="jumbotron" id="title" style="background-color: rgba(62, 206, 214, 0.01)">Consulta de Impressoras</h1>

  <div>
      <button class="btn btn-success float-right"><a style="color:black; text-decoration:none; font-size:17px;" href="cadastroImpressora.php"><strong>✚</strong></a></button>
    </div>

    <?php
    include 'dao/impressoradao.class.php';
    include 'modelo/impressora.class.php';

    $impressoraDAO = new ImpressoraDAO();
    $impressora = $impressoraDAO->buscarImpressora();

    if (count($impressora) == 0) {
      echo "<h2>Não há equipamentos cadastrados...</h2>";
      return;
    }
    ?>

    <form name="filtrar" method="post" action="consultaImpressora.php">

      <div class="row">
          <div class="form-group col-md-6">
            <input type="text" name="txtfiltro" placeholder="Digite a sua pesquisa" class="form-control">
          </div>

          <div class="form-group col-md-6">
            <select name="selfiltro" class="form-control">
              <option value="#">Selecione uma opção</option>
              <option value="setor">Setor</option>
              <option value="namePrinter">Nome da Impressora</option>
              <option value="brand">Marca</option>
              <option value="patrimony">Patrimônio</option>
              <option value="equityNumber">Número de Patrimônio</option>
            </select>
          </div>
      </div> <!-- fecha row -->

        <div class="form-group">
          <input type="submit" name="filtrar" value="Filtrar" class="btn btn-primary btn-block">
        </div>

    </form>
    <!--fecha formulario -->

    <?php
    if (isset($_POST['filtrar'])) {
      $pesquisa = $_POST['txtfiltro'];
      $filtro = $_POST['selfiltro'];

      if (!empty($pesquisa)) {
        $impressoraDAO = new ImpressoraDAO();
        $impressora = $impressoraDAO->filtrarImpressora($pesquisa, $filtro);

        if (count($impressora) == 0) {
          echo "<h3>Sua pesquisa não retornou nenhum impressora!</h3>";
          return;
        } //fecha if

      } //fecha if

    } //fecha if
    ?>

    <?php
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-bordered table-hover table-condensed jumbotron'>";
    echo "<thead class='thad'>";
    echo "<tr>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Nome da Impressora</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>N° do Ponto Lógico</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>IP:</th>";
    echo "<th>Garantia</th>";
    echo "<th>Nº de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tfoot class='thad'>";
    echo "<tr>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Nome da Impressora</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>N° do Ponto Lógico</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>IP:</th>";
    echo "<th>Garantia</th>";
    echo "<th>Nº de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    echo "</tfoot>";
    echo "<tbody>";

    foreach ($impressora as $impressora) {
      echo "<tr>";
      echo "<td class='inform'>$impressora->setor</td>";
      echo "<td class='inform'>$impressora->nameRoom</td>";
      echo "<td class='inform'>$impressora->namePrinter</td>";
      echo "<td class='inform'>$impressora->brand</td>";
      echo "<td class='inform'>$impressora->model</td>";
      echo "<td class='inform'>$impressora->serie</td>";
      echo "<td class='inform'>$impressora->numberScore</td>";
      echo "<td class='inform'>$impressora->patrimony</td>";
      echo "<td class='inform'>$impressora->ip</td>";
      echo "<td class='inform'>$impressora->warranty</td>";
      echo "<td class='inform'>$impressora->equityNumber</td>";
      echo "<td><a class='btn btn-warning' href='alterarImpressora.php?id={$impressora->idImpressora}'><strong>Alterar</strong></a></td>";
      echo "<td><a class='btn btn-danger' href='consultaImpressora.php?id={$impressora->idImpressora}'><strong>✘</strong></a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>"; //table responsive
    ?>
  </div>
</body>
<?php
//excluir
if (isset($_GET['id'])) {
  $impressoraDAO->deletarImpressora($_GET['id']);
  unset($_GET['id']);
  header("location:consultaImpressora.php");
  ob_end_flush();
}
?>
</html>

