<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Inventario Mobiliario" />
  <meta name="keywords" content="cadastroMicro,cadastroImpressora,cadastroMonitor,InventarioMobiliario,Micro,Monitor,Impressora,PACS,Pacs" />
  <meta name="author" content="Pedro da Silveira Azeredo" />
  <meta http-equiv="refresh" content="300" />
  <meta name="generator" content="Atom" />
  <link rel="shortcut icon" href="img/icon.ico" type="img/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!--<script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>-->
  <title>Consulta de Monitores</title>
</head>
<!--Fecha Cabeçalho-->

<style>
  body {
    background: linear-gradient(to bottom right, #e1e9f7, #82afff 20%);
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
          <a class="nav-link" href="cadastroMonitor.php">Cadastro</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="consultaMonitor.php">Consulta</a>
        </li>
      </ul>
    </div>
  </nav>
  <div id="tam">
    <h1 class="jumbotron" id="title" style="background-color: rgba(62, 206, 214, 0.01)">Consulta de Monitores</h1>

    <?php
    include 'dao/monitordao.class.php';
    include 'modelo/monitor.class.php';
    $monitorDAO = new MonitorDAO();
    $monitor = $monitorDAO->buscarMonitor();
    if (count($monitor) == 0) {
      echo "<h2>Não há equipamentos cadastrados...</h2>";
      return;
    }
    ?>

    <form name="filtrar" method="post" action="consultaMonitor.php">
      <div class="row">
        <div class="form-group col-md-6">
          <input type="text" name="txtfiltro" placeholder="Digite a sua pesquisa" class="form-control">
        </div>

        <div class="form-group col-md-6">
          <select name="selfiltro" class="form-control">
            <option value="idMonitor">Código</option>
            <option value="numberScreen">Numero do Monitor</option>
            <option value="setor">Setor</option>
            <option value="brand">Marca</option>
            <option value="serie">Série</option>
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
        $monitorDAO = new MonitorDAO();
        $monitor = $monitorDAO->filtrarMonitor($pesquisa, $filtro);
        if (count($monitor) == 0) {
          echo "<h3>Sua pesquisa não retornou nenhum monitor!</h3>";
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
    echo "<th>Código</th>";
    echo "<th>Nº do Monitor</th>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>Garantia</th>";
    echo "<th>Nº de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";

    echo "</thead>";
    echo "<tfoot class='thad'>";

    echo "<tr>";
    echo "<th>Código</th>";
    echo "<th>Nº do Monitor</th>";
    echo "<th>Setor</th>";
    echo "<th>Nome da sala</th>";
    echo "<th>Marca</th>";
    echo "<th>Modelo</th>";
    echo "<th>Série</th>";
    echo "<th>Patrimônio</th>";
    echo "<th>Garantia</th>";
    echo "<th>Nº de Patrimônio</th>";
    echo "<th>Alterar</th>";
    echo "<th>Excluir</th>";
    echo "</tr>";

    echo "</tfoot>";
    echo "<tbody>";

    foreach ($monitor as $monitor) {
      echo "<tr>";
      echo "<td class='inform' style='font-weight:bold;'>$monitor->idMonitor</td>";
      echo "<td class='inform'>$monitor->numberScreen</td>";
      echo "<td class='inform'>$monitor->setor</td>";
      echo "<td class='inform'>$monitor->nameRoom</td>";
      echo "<td class='inform'>$monitor->brand</td>";
      echo "<td class='inform'>$monitor->model</td>";
      echo "<td class='inform'>$monitor->serie</td>";
      echo "<td class='inform'>$monitor->patrimony</td>";
      echo "<td class='inform'>$monitor->warranty</td>";
      echo "<td class='inform'>$monitor->equityNumber</td>";
      echo "<td><a class='btn btn-warning'href='alterarMonitor.php?id={$monitor->idMonitor}'><strong>Alterar</strong></a></td>";
      echo "<td><a class='btn btn-danger' href='consultaMonitor.php?id={$monitor->idMonitor}'><strong>X</strong></a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>"; //table responsive
    ?>

    <div style="margin:1%;">
      <button class="btn btn-primary"><a style="color:#ffffff;text-decoration:none;" href="cadastroMonitor.php"><strong>Novo cadastro</strong></a></button>
    </div>


    <?php
    if (isset($_POST['id'])) {
      ?>

      <!--Modal-->

      <div role="dialog" aria-hidden="true">
        <div class="modal fade modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="TituloModalCentralizado">Digite a senha de exclusão</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Cancelar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form name="cad" method="post" action="consultaMonitor.php?id=<?php echo $_POST['id']; ?>">

              <div class="modal-body">
                <input type="password" class="form-control" name="senha" style="width:60%;margin-left:auto;margin-right:auto;" required>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" name="verificar" class="btn btn-primary">Verificar</button>
              </div>

            </form>
          </div>
        </div>
      </div>

    <?php
    }
    if (isset($_POST['verificar'])) {
      include 'util/validacao.class.php';

      $erros = [];
      if (!Validacao::validarPassword($_POST['senha'])) {
        $erros[] = '<h3 style="color:red; margin:1%;">Senha inválida *</h3>';
      } //fecha if validar senha
      if (count($erros) != 0) {
        die("Senha Inválida");
        $_SESSION['erros'] = serialize($erros);
        header("location:consultaMonitor.php");
        ob_enf_fluch();
        die(count($erros));
      } else {
        $monitorDAO->deletarMonitor($_POST['id']);
        unset($_POST['id']);
        die("Excluido com Sucesso!");
      }
    }
    ?>

  </div>
</body>

</html>