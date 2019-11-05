<?php
ob_start();
 ?>
<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">
  <head>
      <meta charset="utf-8">
      <title>Alterar Micro</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="shortcut icon" href="img/icon.ico" type="img/x-icon">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="vendor/components/jquery/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.3/js/tether.min.js"></script>
      <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
  </head><!--Fecha Cabeçalho-->

    <body class="back">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="index.php">Inventário</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item ">
                    <a class="nav-link" href="cadastroMicro.php">Cadastro</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="consultaMicro.php">Consulta</a>
                  </li>
                </ul>
              </div>
            </nav>
    <?php

      if(isset($_GET['id'])) {
        include 'dao/microdao.class.php';
        include 'modelo/micro.class.php';

        $microDAO = new MicroDAO();
        $array = $microDAO->filtrarMicro($_GET['id'], "idMicro");
        $micro = $array[0];

      }
    ?>
    <div class="cd">
        <form name="cad" method="post" action="alterarMicro.php">
                  <h1 id="title">Alterar Micro</h1>

         <div class="form-group">

                <div class="box">
                    <input type="hidden" name="idMicro" class="form-control" value="<?php if(isset($micro)) echo $micro->idMicro; ?>" required>
                </div>

         </div>

        <hr>

         <div class="form-group">
                 <label>Número do computador:</label>
                 <div class="box">
                     <input type="text" name="numberComputer" class="form-control" pattern="^[1-6]{1}$" style="width: 15%;" required autofocus value="<?php if(isset($micro)) echo $micro->numberComputer; ?>" required>
                 </div>
         </div>

        <hr>

            <div class="form-group">
                  <label>Setor:</label>
                  <div class="box">
                        <select name="setor" class="form-control">
                                <option value="ADMINISTRAÇÃO RECEPÇÃO"<?php if(isset($micro)) if($micro->setor=='ADMINISTRAÇÃO RECEPÇÃO') echo 'selected=selected'; ?>>ADMINISTRAÇÃO RECEPÇÃO</option>
                                <option value="ADMINISTRAÇÃO SIHO"<?php if(isset($micro)) if($micro->setor=='ADMINISTRAÇÃO SIHO') echo 'selected=selected'; ?>>ADMINISTRAÇÃO SIHO</option>
                                <option value="ALMOXARIFADO"<?php if(isset($micro)) if($micro->setor=='ALMOXARIFADO') echo 'selected=selected'; ?>>ALMOXARIFADO</option>
                                <option value="ATIVIDADE CIRÚRGICA"<?php if(isset($micro)) if($micro->setor=='ATIVIDADE CIRÚRGICA') echo 'selected=selected'; ?>>ATIVIDADE CIRÚRGICA</option>
                                <option value="CHEFIA MANUTENÇÃO PREDIAL"<?php if(isset($micro)) if($micro->setor=='CHEFIA MANUTENÇÃO PREDIAL') echo 'selected=selected'; ?>>CHEFIA MANUTENÇÃO PREDIAL</option>
                                <option value="CLASSIFICAÇÃO DE RISCO"<?php if(isset($micro)) if($micro->setor=='CLASSIFICAÇÃO DE RISCO') echo 'selected=selected'; ?>>CLASSIFICAÇÃO DE RISCO</option>
                                <option value="CME"<?php if(isset($micro)) if($micro->setor=='CME') echo 'selected=selected'; ?>>CME</option>
                                <option value="COLETA E ECG"<?php if(isset($micro)) if($micro->setor=='COLETA E ECG') echo 'selected=selected'; ?>>COLETA E ECG</option>
                                <option value="CONSULTÓRIOS"<?php if(isset($micro)) if($micro->setor=='CONSULTÓRIOS') echo 'selected=selected'; ?>>CONSULTÓRIOS</option>
                                <option value="CONTRATOS TERCEIRIZADOS"<?php if(isset($micro)) if($micro->setor=='CONTRATOS TERCEIRIZADOS') echo 'selected=selected'; ?>>CONTRATOS TERCEIRIZADOS</option>
                                <option value="DIREÇÃO"<?php if(isset($micro)) if($micro->setor=='DIREÇÃO') echo 'selected=selected'; ?>>DIREÇÃO</option>
                                <option value="ESTOQUE"<?php if(isset($micro)) if($micro->setor=='ESTOQUE') echo 'selected=selected'; ?>>ESTOQUE</option>
                                <option value="FARMÁCIA"<?php if(isset($micro)) if($micro->setor=='FARMÁCIA') echo 'selected=selected'; ?>>FARMÁCIA</option>
                                <option value="FATURAMENTO"<?php if(isset($micro)) if($micro->setor=='FATURAMENTO') echo 'selected=selected'; ?>>FATURAMENTO</option>
                                <option value="FINANCEIRO"<?php if(isset($micro)) if($micro->setor=='FINANCEIRO') echo 'selected=selected'; ?>>FINANCEIRO</option>
                                <option value="INFORMÁTICA"<?php if(isset($micro)) if($micro->setor=='INFORMÁTICA') echo 'selected=selected'; ?>>INFORMÁTICA</option>
                                <option value="LABORATÓRIO"<?php if(isset($micro)) if($micro->setor=='LABORATÓRIO') echo 'selected=selected'; ?>>LABORATÓRIO</option>
                                <option value="MANUTENÇÃO BIOMÉTRICA"<?php if(isset($micro)) if($micro->setor=='MANUTENÇÃO BIOMÉTRICA') echo 'selected=selected'; ?>>MANUTENÇÃO BIOMÉTRICA</option>
                                <option value="MANUTENÇÃO PREDIAL"<?php if(isset($micro)) if($micro->setor=='MANUTENÇÃO PREDIAL') echo 'selected=selected'; ?>>MANUTENÇÃO PREDIAL</option>
                                <option value="MONITORAMENTO SEGURANÇA"<?php if(isset($micro)) if($micro->setor=='MONITORAMENTO SEGURANÇA') echo 'selected=selected'; ?>>MONITORAMENTO SEGURANÇA</option>
                                <option value="NUTRIÇÃO"<?php if(isset($micro)) if($micro->setor=='NUTRIÇÃO') echo 'selected=selected'; ?>>NUTRIÇÃO</option>
                                <option value="ODONTOLOGIA"<?php if(isset($micro)) if($micro->setor=='ODONTOLOGIA') echo 'selected=selected'; ?>>ODONTOLOGIA</option>
                                <option value="PORTARIA"<?php if(isset($micro)) if($micro->setor=='PORTARIA') echo 'selected=selected'; ?>>PORTARIA</option>
                                <option value="POSTO DA ENFERMAGEM"<?php if(isset($micro)) if($micro->setor=='POSTO DA ENFERMAGEM') echo 'selected=selected'; ?>>POSTO DA ENFERMAGEM</option>
                                <option value="PSIQUIATRIA"<?php if(isset($micro)) if($micro->setor=='PSIQUIATRIA') echo 'selected=selected'; ?>>PSIQUIATRIA</option>
                                <option value="RAIO X"<?php if(isset($micro)) if($micro->setor=='RAIO X') echo 'selected=selected'; ?>>RAIO X</option>
                                <option value="RECEPÇÃO"<?php if(isset($micro)) if($micro->setor=='RECEPÇÃO') echo 'selected=selected'; ?>>RECEPÇÃO</option>
                                <option value="RH"<?php if(isset($micro)) if($micro->setor=='RH') echo 'selected=selected'; ?>>RH</option>
                                <option value="ROUPARIA"<?php if(isset($micro)) if($micro->setor=='ROUPARIA') echo 'selected=selected'; ?>>ROUPARIA</option>
                                <option value="SALA 2 MEDICAÇÃO"<?php if(isset($micro)) if($micro->setor=='SALA 2 MEDICAÇÃO') echo 'selected=selected'; ?>>SALA 2 MEDICAÇÃO</option>
                                <option value="SALA DE CONVIVÊNCIA"<?php if(isset($micro)) if($micro->setor=='SALA DE CONVIVÊNCIA') echo 'selected=selected'; ?>>SALA DE CONVIVÊNCIA</option>
                                <option value="SALA DE ESPERA AMARELA"<?php if(isset($micro)) if($micro->setor=='SALA DE ESPERA AMARELA') echo 'selected=selected'; ?>>SALA DE ESPERA AMARELA</option>
                                <option value="SALA DE OBSERVAÇÃO ADULTA"<?php if(isset($micro)) if($micro->setor=='SALA DE OBSERVAÇÃO ADULTA') echo 'selected=selected'; ?>>SALA DE OBSERVAÇÃO ADULTA</option>
                                <option value="SALA DOS MÉDICOS"<?php if(isset($micro)) if($micro->setor=='SALA DOS MÉDICOS') echo 'selected=selected'; ?>>SALA DOS MÉDICOS</option>
                                <option value="SALA PEDIATRIA (LARANJA)"<?php if(isset($micro)) if($micro->setor=='SALA PEDIATRIA (LARANJA)') echo 'selected=selected'; ?>>SALA PEDIATRIA (LARANJA)</option>
                                <option value="SALA VERMELHA"<?php if(isset($micro)) if($micro->setor=='SALA VERMELHA') echo 'selected=selected'; ?>>SALA VERMELHA</option>
                                <option value="SERVIÇO SOCIAL"<?php if(isset($micro)) if($micro->setor=='SERVIÇO SOCIAL') echo 'selected=selected'; ?>>SERVIÇO SOCIAL</option>
                                <option value="SERVIDORES"<?php if(isset($micro)) if($micro->setor=='SERVIDORES') echo 'selected=selected'; ?>>SERVIDORES</option>
                                <option value="TRAUMATOLOGIA"<?php if(isset($micro)) if($micro->setor=='TRAUMATOLOGIA') echo 'selected=selected'; ?>>TRAUMATOLOGIA</option>
                        </select>
                    </div>
              </div>

        <hr>

            <div class="form-group">
                   <label>Nome da sala:</label>
                   <div class="box">
                       <input type="text" name="nameRoom" class="form-control" pattern="^[a-zA-ZàÀèÈìÌòÒáÁéÉíÍóÓúÚôÔãÃõÕç ]{2,40}[0-9]{0,2}$" value="<?php if(isset($micro)) echo $micro->nameRoom; ?>" required>
                   </div>
            </div>

        <hr>

            <div class="form-group">
                  <label>Marca:</label>
                  <div class="box">
                      <input type="text" name="brand" class="form-control" pattern="^[a-zA-ZàÀèÈìÌòÒáÁéÉíÍóÓúÚôÔãÃõÕç ]{3,10}$" value="<?php if(isset($micro)) echo $micro->brand; ?>"required>
                  </div>
           </div>

        <hr>

            <div class="form-group">
                  <label>Modelo:</label>
                  <div class="box">
                      <input type="text" name="model" class="form-control" value="<?php if(isset($micro)) echo $micro->model; ?>" required>
                  </div>
           </div>

        <hr>

            <div class="form-group">
                  <label>Série:</label>
                  <div class="box">
                      <input type="text" name="serie" class="form-control" value="<?php if(isset($micro)) echo $micro->serie; ?>" required>
                  </div>
           </div>

        <hr>

          <div class="form-group">
              <label>Ponto Lógico:</label>
              <div class="box">
                  <input type="text" name="numberScore" class="form-control" style="width: 15%;" value="<?php if(isset($micro)) echo $micro->numberScore; ?>" required>
              </div>
           </div>

        <hr>

          <div class="form-group">
              <label>Patrimônio:</label>
              <div class="box">
                  <select name="patrimony" class="form-control">
                        <option value="PMPA" <?php if(isset($micro)) if($micro->patrimony=='PMPA') echo 'selected=selected'; ?>>PMPA</option>
                        <option value="Procempa" <?php if(isset($micro)) if($micro->patrimony=='Procempa') echo 'selected=selected'; ?>>Procempa</option>
                        <option value="Ilha Service" <?php if(isset($micro)) if($micro->patrimony=='Ilha Service') echo 'selected=selected'; ?>>Ilha Service</option>
                  </select>
            </div>
          </div>

        <hr>

          <div class="form-group">
              <label>Sistema Operacional:</label>
              <div class="box">
                  <input type="text" name="operationalSystem" class="form-control" patter="^[Windows|windows|linux|Linux|x|p ]{5,10}[7|8|10]{0,2}$" value="<?php if(isset($micro)) echo $micro->operationalSystem; ?>"required>
              </div>
          </div>

       <hr>

           <div class="form-group">
              <label>Processador:</label>
              <div class="box">
                  <input type="text" name="processor" class="form-control" value="<?php if(isset($micro)) echo $micro->processor; ?>" required>
              </div>
          </div>

       <hr>

           <div class="form-group">
              <label>Memória:</label>
              <div class="box">
                  <input type="text" name="memory" class="form-control" value="<?php if(isset($micro)) echo $micro->memory; ?>" required>
              </div>
          </div>

      <hr>

          <div class="form-group">
              <label>HD:</label>
              <div class="box">
                  <input type="text" name="hd" class="form-control" value="<?php if(isset($micro)) echo $micro->hd; ?>"required>
              </div>
          </div>

      <hr>

          <div class="form-group">
              <label>Nome do Computador:</label>
              <div class="box">
                  <input type="text" name="name" class="form-control" value="<?php if(isset($micro)) echo $micro->name; ?>"required>
              </div>
          </div>

      <hr>

          <div class="form-group">
              <label>MAC:</label>
              <div class="box">
                  <input type="text" name="mac" class="form-control" value="<?php if(isset($micro)) echo $micro->mac; ?>" required>
              </div>
          </div>

      <hr>

          <div class="form-group">
                <label>IP:</label>
                <div class="box">
                    <input type="text" name="ip" class="form-control" value="<?php if(isset($micro)) echo $micro->ip; ?>" required>
                </div>
          </div>

      <hr>

          <div class="form-group">
            <label>Garantia :</label>
              <table id="tlb">
                  <tr>
                    <td><input type="radio" name="warranty" value="Sim"<?php if(isset($micro)) if($micro->warranty=='Sim') echo 'checked'; ?>><label>Sim</label></td>
                    <td><input type="radio" name="warranty" value="Não"<?php if(isset($micro)) if($micro->warranty=='Não') echo 'checked'; ?>><label>Não</label></td>
                  </tr>
              </table>
          </div>

      <hr>

          <div class="form-group">
               <label>Número de Patrimônio:</label>
                <div class="box">
                    <input type="text" name="equityNumber" class="form-control" pattern="^[0-9]{5,6}$" value="<?php if(isset($micro)) echo $micro->equityNumber; ?>" required>
                </div>
          </div>

      <hr>

              <div class="form-group">
                  <input type="submit" class="alterar" name="alterar" value="Alterar">
              </div>
          </form>
        </div>

              <?php
                    if(isset($_POST['alterar'])) {
                      include 'modelo/micro.class.php';
                      include 'dao/microdao.class.php';
                      include 'util/padronizacao.class.php';
                      include 'util/validacao.class.php';

                      $erros = [];
                              if(!Validacao::validarNumberRoom($_POST['numberComputer'])){
                                   $erros[] = '<h3 style="color:red;">Numero inválido *</h3>';

                             } //fecha if validar numero do equipamento

                               if(!Validacao::validarNameRoom($_POST['nameRoom'])){
                                     $erros[] = '<h3 style="color:red; margin:1%;">Nome da sala inválido *</h3>';

                             } //fecha if validar nome do setor
                              if(!Validacao::validarBrand($_POST['brand'])){
                                   $erros[] = '<h3 style="color:red;">Marca inválida *</h3>';

                             } //fecha if validar marca

                               if(!Validacao::validarOperationalSystem($_POST['operationalSystem'])){
                                   $erros[] = '<h3 style="color:red;">Sistema inválido *</h3>';

                             } //fecha if validar sistema operacional

                               if(!Validacao::validarEquityNumber($_POST['equityNumber'])){
                                     $erros[] = '<h3 style="color:red;">patrimonio invalido *</h3>';

                             } //fecha if validar numero partrimonio

                             if(count($erros) != 0){
                             $_SESSION['erros'] = serialize($erros);
                             header("location:consultaMicro.php");
                             ob_enf_fluch();
                             die();

                             } //fecha if de erros

                            $micro = new Micro();
                            $micro->idMicro = $_POST['idMicro'];
                            $micro->numberComputer = $_POST['numberComputer'];
                            $micro->setor = $_POST['setor'];
                            $micro->patrimony = $_POST['patrimony'];
                            $micro->memory = $_POST['memory'];
                            $micro->hd = $_POST['hd'];
                            $micro->ip = $_POST['ip'];
                            $micro->warranty = $_POST['warranty'];
                            $micro->equityNumber= $_POST['equityNumber'];
                            $micro->numberScore = $_POST['numberScore'];
                            $micro->nameRoom = Padronizacao::padronizarNome($_POST['nameRoom'])?? 'error';
                            $micro->brand = Padronizacao::padronizarNome($_POST['brand'])?? 'error';
                            $micro->model = Padronizacao::padronizarNome($_POST['model'])?? 'error';
                            $micro->serie = Padronizacao::padronizarSerie($_POST['serie'])?? 'error';
                            $micro->operationalSystem = Padronizacao::padronizarNome ($_POST['operationalSystem'])?? 'error';
                            $micro->processor = Padronizacao::padronizarNome($_POST['processor'])?? 'error';
                            $micro->name = Padronizacao::padronizarNome($_POST['name'])?? 'error';
                            $micro->mac = Padronizacao::padronizarMac($_POST['mac'])?? 'error';


                            $microDAO = new MicroDAO();
                            $microDAO->alterarMicro($micro);

                            header("location:consultaMicro.php");
                            ob_enf_fluch();

                            unset($_POST['alterar']);
                            unset($_GET['id']);
                            unset($micro);

                          }
                    ?>
        </body>
      </html>
