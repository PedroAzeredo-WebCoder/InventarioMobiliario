<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
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
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <title>Consulta de Micros</title>
</head>
<style>
  body {
    background: linear-gradient(180deg, rgba(255, 255, 255, 0) 3.65%,
        rgba(23, 13, 13, 0.2) 99.99%, rgba(23, 13, 13, 0.2) 100%),
      linear-gradient(180deg, rgba(67, 40, 40, 0.25) 0%,
        rgba(255, 255, 255, 0) 100%), #71E3BD;
    background-repeat: no-repeat;
    background-size: 100% 100%;
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Inventário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="cadastroMicro.php">Cadastro</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="consultaMicro.php">Consulta</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="tam">
    <h1 class="jumbotron" id="title" style="background-color: rgba(62, 206, 214, 0.01)">Consulta de Micros</h1>
    <?php
    include 'dao/microdao.class.php';
    include 'modelo/micro.class.php';
    $microDAO = new MicroDAO();
    $micro = $microDAO->buscarMicro();

    if (count($micro) == 0) {
      echo "<h2>Não há equipamentos cadastrados...</h2>";
      return;
    }
    ?>

    <form name="filtrar" method="post" action="consultaMicro.php">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="txtfiltro" placeholder="Digite a sua pesquisa" class="form-control">
        </div>

        <div class="form-group col-md-6">
          <select name="selfiltro" class="form-control">
            <option value="idMicro">Código</option>
            <option value="numberComputer">Numero do Computador</option>
            <option value="setor">Setor</option>
            <option value="brand">Marca</option>
            <option value="model">Modelo</option>
            <option value="serie">Série</option>
            <option value="numberScore">Ponto Lógico</option>
            <option value="name">Nome do Computador</option>
            <option value="mac">Mac</option>
            <option value="ip">IP</option>
            <option value="equityNumber">Número de Patrimônio</option>
          </select>
        </div>
      </div> <!-- fecha row -->

      <div class="form-group">
        <input type="submit" name="filtrar" value="Filtrar" class="btn btn-primary btn-block">
      </div>
    </form>
    <?php
    if (isset($_POST['filtrar'])) {
      $pesquisa = $_POST['txtfiltro'];
      $filtro = $_POST['selfiltro'];

      if (!empty($pesquisa)) {
        $microDAO = new MicroDAO();
        $micro = $microDAO->filtrarMicro($pesquisa, $filtro);

        if (count($micro) == 0) {
          echo "<h3>Sua pesquisa não retornou nenhum computador!</h3>";
          return;
        }
      }
    } //fecha if
    ?>

    <?php
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-bordered table-hover table-condensed jumbotron'>";
    echo "<thead class='thad'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>N° do Computador</th>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>N° Ponto Lógico</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>S.O</th>";
    echo "<th>Processador</th>";
    echo "<th>Memória</th>";
    echo "<th>HD</th>";
    echo "<th>Nome do Computador</th>";
    echo "<th>MAC</th>";
    echo "<th>IP</th>";
    echo "<th>Garantia</th>";
    echo "<th>N° de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tfoot class='thad'>";
    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>N° do Computador</th>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>N° Ponto Lógico</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>S.O</th>";
    echo "<th>Processador</th>";
    echo "<th>Memória</th>";
    echo "<th>HD</th>";
    echo "<th>Nome do Computador</th>";
    echo "<th>MAC</th>";
    echo "<th>IP</th>";
    echo "<th>Garantia</th>";
    echo "<th>N° de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";
    echo "</tfoot>";
    echo "<tbody>";

    foreach ($micro as $micro) {
      echo "<tr>";
      echo "<td class='inform' style='font-weight:bold;'>$micro->idMicro</td>";
      echo "<td class='inform'>$micro->numberComputer</td>";
      echo "<td class='inform'>$micro->setor</td>";
      echo "<td class='inform'>$micro->nameRoom</td>";
      echo "<td class='inform'>$micro->brand</td>";
      echo "<td class='inform'>$micro->model</td>";
      echo "<td class='inform'>$micro->serie</td>";
      echo "<td class='inform'>$micro->numberScore</td>";
      echo "<td class='inform'>$micro->patrimony</td>";
      echo "<td class='inform'>$micro->operationalSystem</td>";
      echo "<td class='inform'>$micro->processor</td>";
      echo "<td class='inform'>$micro->memory</td>";
      echo "<td class='inform'>$micro->hd</td>";
      echo "<td class='inform'>$micro->name</td>";
      echo "<td class='inform'>$micro->mac</td>";
      echo "<td class='inform'>$micro->ip</td>";
      echo "<td class='inform'>$micro->warranty</td>";
      echo "<td class='inform'>$micro->equityNumber</td>";
      echo "<td><a class='btn btn-warning' href='alterarMicro.php?id={$micro->idMicro}'>Alterar</a></td>";
      echo "<td><a class='btn btn-danger' href='consultaMicro.php?id={$micro->idMicro}'>Excluir</a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>"; //table responsive
    ?>
    <div style="margin:1%;">
      <button class="btn btn-warning"><a style="color:black; text-decoration:none;" href="cadastroMicro.php"><strong>Novo cadastro</strong></a></button></div>
  </div>
</body>

</html>

<?php
//excluir
if (isset($_GET['id'])) {
  $microDAO->deletarMicro($_GET['id']);
  header("location:consultaMicro.php");
  unset($_GET['id']);
}
?>