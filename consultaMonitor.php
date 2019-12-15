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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="vendor/components/jquery/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.0/assets/js/vendor/jquery-slim.min.js"><\/script>')
  </script>
  <script src="/docs/4.0/assets/js/vendor/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
  <script src="/docs/4.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
  <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/docs/4.0/assets/js/docs.min.js"></script>
  <script src="js/mask.js"></script>

  <title>Consulta de Monitores</title>
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
          <a class="nav-link" href="cadastroMonitor.php">Cadastrar</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="consultaMonitor.php">Consultar <span class="sr-only">(current)</span></a>
        </li>
      </ul>

    </div>
  </nav>
  <div id="tam">
    <h1 class="jumbotron" id="title" style="background-color: rgba(62, 206, 214, 0.01)">Consulta de Monitores</h1>

    <div style="margin:1%;">
      <button class="btn btn-success float-right" ><a style="color:black; text-decoration:none; font-size:18px;" href="cadastroMonitor.php"><strong>✚</strong></a></button></div>
  </div>

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
      echo "<td><a class='btn btn-danger' href='consultaMonitor.php?id={$monitor->idMonitor}'><strong>✘</strong></a></td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>"; //table responsive
    ?>

    


    <?php
    if (isset($_POST['id'])) {
      ?>

      <!--Modal-->

      <div role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
        ob_end_flush();
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