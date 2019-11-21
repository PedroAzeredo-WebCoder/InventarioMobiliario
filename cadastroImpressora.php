<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
<title>Inventário Mobiliário</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="Inventario Mobiliario" />
<meta name="keywords" content="cadastroMicro,cadastroImpressora,cadastroMonitor,InventarioMobiliario,Micro,Monitor,Impressora,PACS,Pacs" />
<meta name="author" content="Pedro da Silveira Azeredo" />
<meta http-equiv="pragma" content="no-cache" />
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
<script src="js/jquery.mask.min.js"></script>
	<script>
		$(document).ready(function() {
      $("#ip").mask("00.00.00.999")
		})
	</script>

</head>
<!--Fecha Cabeçalho-->

<body class="back">
  <!--Abre Body-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Inventário</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="consultaImpressora.php">Consultar <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastroImpressora.php">Cadastrar</a>
        </li>
      </ul>

    </div>
  </nav>

  <?php
  if (isset($_SESSION['erros'])) {
    $erros = unserialize($_SESSION['erros']);
    foreach ($erros as $erro) {
      echo "<br>$erro";
    }
    unset($_SESSION['erros']);
  }
  ?>

<div class="jumbotron jumbotron-fluid" style="width:80%; background-color:rgba(252, 245, 245, 1); border-radius: 10px; box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77); margin-left: auto; margin-right: auto; margin-top: 7%; margin-bottom:1%;">
    <form name="cad" method="post" action="cadastroImpressora.php">
      <h1 id="title"><i>Cadastro de Impressora</i></h1>

      <div class="form-group">
        <label>Setor :</label>
        <div class="box">
          <select name="setor" class="form-control">
            <option value=""> </option>
            <option value="ADMINISTRAÇÃO RECEPÇÃO">ADMINISTRAÇÃO RECEPÇÃO</option>
            <option value="ADMINISTRAÇÃO SIHO">ADMINISTRAÇÃO SIHO</option>
            <option value="ALMOXARIFADO">ALMOXARIFADO</option>
            <option value="ATIVIDADE CIRÚRGICA">ATIVIDADE CIRÚRGICA</option>
            <option value="CHEFIA MANUTENÇÃO PREDIAL">CHEFIA MANUTENÇÃO PREDIAL</option>
            <option value="CLASSIFICAÇÃO DE RISCO">CLASSIFICAÇÃO DE RISCO</option>
            <option value="CME">CME</option>
            <option value="COLETA E ECG">COLETA E ECG</option>
            <option value="CONSULTÓRIOS">CONSULTÓRIOS</option>
            <option value="CONTRATOS TERCEIRIZADOS">CONTRATOS TERCEIRIZADOS</option>
            <option value="DIREÇÃO">DIREÇÃO</option>
            <option value="ESTOQUE">ESTOQUE</option>
            <option value="FARMÁCIA">FARMÁCIA</option>
            <option value="FATURAMENTO">FATURAMENTO</option>
            <option value="FINANCEIRO">FINANCEIRO</option>
            <option value="INFORMÁTICA">INFORMÁTICA</option>
            <option value="LABORATÓRIO">LABORATÓRIO</option>
            <option value="MANUTENÇÃO BIOMÉTRICA">MANUTENÇÃO BIOMÉTRICA</option>
            <option value="MANUTENÇÃO PREDIAL">MANUTENÇÃO PREDIAL</option>
            <option value="MONITORAMENTO SEGURANÇA">MONITORAMENTO SEGURANÇA</option>
            <option value="NUTRIÇÃO">NUTRIÇÃO</option>
            <option value="ODONTOLOGIA">ODONTOLOGIA</option>
            <option value="PORTARIA">PORTARIA</option>
            <option value="POSTO DA ENFERMAGEM">POSTO DA ENFERMAGEM</option>
            <option value="PSIQUIATRIA">PSIQUIATRIA</option>
            <option value="RAIO X">RAIO X</option>
            <option value="RECEPÇÃO">RECEPÇÃO</option>
            <option value="RH">RH</option>
            <option value="ROUPARIA">ROUPARIA</option>
            <option value="SALA 2 MEDICAÇÃO">SALA 2 MEDICAÇÃO</option>
            <option value="SALA DE CONVIVÊNCIA">SALA DE CONVIVÊNCIA</option>
            <option value="SALA DE ESPERA AMARELA">SALA DE ESPERA AMARELA</option>
            <option value="SALA DE OBSERVAÇÃO ADULTA">SALA DE OBSERVAÇÃO ADULTA</option>
            <option value="SALA DOS MÉDICOS">SALA DOS MÉDICOS</option>
            <option value="SALA PEDIATRIA (LARANJA)">SALA PEDIATRIA (LARANJA)</option>
            <option value="SALA VERMELHA">SALA VERMELHA</option>
            <option value="SERVIÇO SOCIAL">SERVIÇO SOCIAL</option>
            <option value="SERVIDORES">SERVIDORES</option>
            <option value="TRAUMATOLOGIA">TRAUMATOLOGIA</option>
          </select>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Nome da sala :</label>
        <div class="box">
          <input type="text" name="nameRoom" class="form-control" pattern="^[a-zA-ZàÀèÈìÌòÒáÁéÉíÍóÓúÚôÔãÃõÕç ]{2,40}[0-9]{0,2}$" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Nome da Impressora :</label>
        <div class="box">
          <input type="text" name="namePrinter" class="form-control" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Marca :</label>
        <div class="box">
          <input type="text" name="brand" class="form-control" pattern="^[a-zA-ZàÀèÈìÌòÒáÁéÉíÍóÓúÚôÔãÃõÕç ]{2,10}$" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Modelo :</label>
        <div class="box">
          <input type="text" name="model" class="form-control" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Série :</label>
        <div class="box">
          <input type="text" name="serie" class="form-control" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>N° Ponto Lógico :</label>
        <div class="box">
          <input type="text" name="numberScore" class="form-control" style="width: 15%;">
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Patrimônio :</label>
        <div class="box">
          <select name="patrimony" class="form-control">
            <option value="PMPA">PMPA</option>
            <option value="Procempa">Procempa</option>
            <option value="Ilha Service">Ilha Service</option>
          </select>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>IP :</label>
        <div class="box">
          <input type="text" name="ip" class="form-control" required>
        </div>
      </div>

      <hr>

      <div class="form-group">
        <label>Garantia :</label>
        <table id="tlb">
          <tr>
            <td><input type="radio" name="warranty" value="Sim"><label>Sim</label></td>
            <td><input type="radio" name="warranty" value="Não" checked><label>Não</label></td>
          </tr>
        </table>
      </div>

      <hr>

      <div class="form-group">
        <label>Número de Patrimônio :</label>
        <div class="box">
          <input type="text" name="equityNumber" class="form-control" pattern="^[a-zA-Z0-9]{4,6}$" required>
        </div>
      </div>

      <hr>

      <div class="form-group" style="margin-top:4% ; margin-bottom:-4%">
        <input type="submit" name="cadastrar" value="Cadastrar ✔" class="cadastrar"><input type="reset" class="limpar" value="Limpar ✘">
      </div>
    </form> <!-- fecha formulario-->
  </div>

  <?php
  if (isset($_POST['cadastrar'])) {
    include 'modelo/impressora.class.php';
    include 'dao/impressoradao.class.php';
    include 'util/validacao.class.php';
    include 'util/padronizacao.class.php';

    $erros = [];
    if (!Validacao::validarNameRoom($_POST['nameRoom'])) {
      $erros[] = '<h3 style="color:red; margin:1%;">Nome da sala inválido *</h3>';
    } //fecha if validar nome do setor


    if (!Validacao::validarBrand($_POST['brand'])) {
      $erros[] = '<h3 style="color:red;">Marca inválida *</h3>';
    } //fecha if validar marca

    if (!Validacao::validarEquityNumber($_POST['equityNumber'])) {
      $erros[] = '<h3 style="color:red;">Marca inválida *</h3>';
    } //fecha if validar numero de patrimonio


    if (count($erros) != 0) {
      $_SESSION['erros'] = serialize($erros);
      header("location:cadastroImpressora.php");
      ob_enf_fluch();
      die();
    } //fecha if de erros

    $impressora = new Impressora();
    $impressora->setor = $_POST['setor'];
    $impressora->nameRoom = Padronizacao::padronizarNome($_POST['nameRoom']) ?? 'error';
    $impressora->namePrinter = $_POST['namePrinter'];
    $impressora->brand = Padronizacao::padronizarNome($_POST['brand']) ?? 'error';
    $impressora->model = Padronizacao::padronizarNome($_POST['model']) ?? 'error';
    $impressora->serie = Padronizacao::padronizarSerie($_POST['serie']) ?? 'error';
    $impressora->numberScore = $_POST['numberScore'];
    $impressora->patrimony = $_POST['patrimony'];
    $impressora->ip = $_POST['ip'];
    $impressora->warranty = $_POST['warranty'];
    $impressora->equityNumber = $_POST['equityNumber'];


    $impressoraDAO = new ImpressoraDAO();
    $impressoraDAO->cadastrarImpressora($impressora);


    header("location:consultaImpressora.php");
    ob_enf_fluch();
  } //fecha if

  ?>
</body>

</html>