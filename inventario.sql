-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Out-2019 às 19:17
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `inventario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `impressora`
--

CREATE TABLE `impressora` (
  `idImpressora` int(3) UNSIGNED ZEROFILL NOT NULL,
  `setor` varchar(40) NOT NULL,
  `nameRoom` varchar(40) NOT NULL,
  `namePrinter` varchar(40) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(25) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `numberScore` varchar(10) NOT NULL,
  `patrimony` varchar(15) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `warranty` char(3) NOT NULL,
  `equityNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `micro`
--

CREATE TABLE `micro` (
  `idMicro` int(3) UNSIGNED ZEROFILL NOT NULL,
  `numberComputer` int(2) UNSIGNED ZEROFILL NOT NULL,
  `setor` varchar(40) NOT NULL,
  `nameRoom` varchar(40) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(25) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `numberScore` varchar(10) NOT NULL,
  `patrimony` varchar(15) NOT NULL,
  `operationalSystem` varchar(15) NOT NULL,
  `processor` varchar(10) NOT NULL,
  `memory` varchar(5) DEFAULT NULL,
  `hd` varchar(10) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `warranty` char(3) NOT NULL,
  `equityNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE `monitor` (
  `idMonitor` int(3) UNSIGNED ZEROFILL NOT NULL,
  `numberScreen` int(2) UNSIGNED ZEROFILL DEFAULT NULL,
  `setor` varchar(40) NOT NULL,
  `nameRoom` varchar(40) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(25) NOT NULL,
  `serie` varchar(30) NOT NULL,
  `patrimony` varchar(15) NOT NULL,
  `warranty` char(4) NOT NULL,
  `equityNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `monitor`
--

INSERT INTO `monitor` (`idMonitor`, `numberScreen`, `setor`, `nameRoom`, `brand`, `model`, `serie`, `patrimony`, `warranty`, `equityNumber`) VALUES
(001, 02, 'ALMOXARIFADO', 'Chefia Almoxarifado', 'Positivo', 'W1946pw', '20432525', 'PMPA', 'NÃ£o', 705908),
(002, 01, 'ALMOXARIFADO', 'Chefia Almoxarifado', 'Positivo', 'E2011PX', '31123526', 'PMPA', 'NÃ£o', 733784),
(003, 02, 'ALMOXARIFADO', 'Administrativo Almoxarifado', 'Positivo', '20M35PDM', '510016030', 'PMPA', 'NÃ£o', 753818),
(004, 01, 'ATIVIDADE CIRÃšRGICA', 'Consultorio 2', 'Positivo', '20M35PDM', '401510D15913', 'PMPA', 'NÃ£o', 753821),
(005, 01, 'ATIVIDADE CIRÃšRGICA', 'Consultorio 1', 'Positivo', '20M35PDM', '510016147', 'PMPA', 'NÃ£o', 753810),
(006, 01, 'ATIVIDADE CIRÃšRGICA', 'Chefia', 'Aoc', 'F19l', 'N1215XA002722', 'PMPA', 'NÃ£o', 671376),
(007, 01, 'CLASSIFICAÃ‡ÃƒO DE RISCO', 'ClassificaÃ§Ã£o De Risco', 'Positivo', '22MP55PK', '804E01887', 'PMPA', 'NÃ£o', 775158),
(008, 02, 'CLASSIFICAÃ‡ÃƒO DE RISCO', 'ClassificaÃ§Ã£o De Risco', 'Positivo', 'W1946PW', '20314334', 'PMPA', 'NÃ£o', 705910),
(009, 03, 'CLASSIFICAÃ‡ÃƒO DE RISCO', 'ClassificaÃ§Ã£o De Risco', 'Positivo', 'W1946PW', '20433449', 'PMPA', 'NÃ£o', 705912),
(010, 01, 'CME', 'Cme', 'Aoc', 'F19L', 'N1215XA003103', 'PMPA', 'NÃ£o', 671375),
(011, 01, 'COLETA E ECG', 'Sala 3', 'Positivo', '20M35PDM', '510015933', 'PMPA', 'Sim', 753804),
(012, 02, 'COLETA E ECG', 'Sala 3', 'Positivo', 'E2811PE', 'TCH3551350831123250', 'PMPA', 'NÃ£o', 727010),
(013, 01, 'CONSULTÃ“RIOS', 'Sala 4', 'Positivo', 'E2011PX', '40582381', 'PMPA', 'NÃ£o', 733719),
(014, 01, 'CONSULTÃ“RIOS', 'Sala 5', 'Aoc', 'F19L', 'N1215XA003082', 'PMPA', 'NÃ£o', 671369),
(015, 01, 'CONSULTÃ“RIOS', 'Sala 6', 'Positivo', 'E2011PX', '31123756', 'PMPA', 'NÃ£o', 733783),
(016, 01, 'CONSULTÃ“RIOS', 'Sala 7', 'Positivo', 'E2011PX', '31123275', 'PMPA', 'NÃ£o', 733716),
(017, 01, 'CONSULTÃ“RIOS', 'Sala 8', 'Positivo', 'E2011PX', '31122927', 'PMPA', 'NÃ£o', 733713),
(018, 01, 'CONSULTÃ“RIOS', 'Sala 9', 'Positivo', 'W1946PW', '20327478', 'PMPA', 'NÃ£o', 705907),
(019, 01, 'ADMINISTRAÃ‡ÃƒO RECEPÃ‡ÃƒO', 'Contratos Tercerizados', 'Aoc', 'F19L', 'T8ACM6NQX8R57N', 'PMPA', 'NÃ£o', 671371),
(020, 01, 'DIREÃ‡ÃƒO', 'RecepÃ§Ã£o', 'Positivo', '22MP55PK', '804E02259', 'PMPA', 'NÃ£o', 775191),
(021, 02, 'DIREÃ‡ÃƒO', 'RecepÃ§Ã£o', 'Positivo', 'W1946PW', '20330967', 'PMPA', 'NÃ£o', 705751),
(022, 03, 'DIREÃ‡ÃƒO', 'DireÃ§Ã£o Geral', 'Positivo', 'E2011PX', 'TCH33551350831123919', 'PMPA', 'NÃ£o', 727006),
(023, 02, 'DIREÃ‡ÃƒO', 'DireÃ§Ã£o Geral', 'Positivo', '22MP55PK', '804E02389', 'PMPA', 'NÃ£o', 775188),
(024, 03, 'DIREÃ‡ÃƒO', 'DireÃ§Ã£o Geral', 'Positivo', 'W1946PW', '20327490', 'PMPA', 'NÃ£o', 705891),
(025, 01, 'DIREÃ‡ÃƒO', 'DireÃ§Ã£o Geral', 'Positivo', '20M35PDM', '401510D15874', 'PMPA', 'NÃ£o', 753820),
(026, 04, 'DIREÃ‡ÃƒO', 'DireÃ§Ã£o Geral', 'Positivo', 'W1946PW', '20328632', 'PMPA', 'NÃ£o', 705892),
(027, 01, 'FARMÃCIA', 'FarmÃ¡cia Estoque', 'Lenovo', 'THINKVISION', 'V1HRC36', 'PMPA', 'NÃ£o', 653825),
(028, 01, 'FARMÃCIA', 'Chefia FarmÃ¡cia', 'Lenovo', 'THINKVISION', 'V1KNH46', 'PMPA', 'NÃ£o', 655894),
(029, 01, 'FARMÃCIA', 'Chefia FarmÃ¡cia', 'Positivo', 'W1946PW', '4700124162420', 'PMPA', 'NÃ£o', 717518),
(030, 01, 'FARMÃCIA', 'FarmÃ¡cia Chefia', 'Positivo', 'E2011PX', '31123757', 'PMPA', 'NÃ£o', 725954),
(031, 01, 'FATURAMENTO', 'Chefia Faturamento E PatrimÃ´nio', 'Positivo', 'W2043S', 'TCH3519330220432827', 'PMPA', 'NÃ£o', 705903),
(032, 03, 'FATURAMENTO', 'Chefia Faturamento E PatrimÃ´nio', 'Dell', 'P190S', 'CN068D2174445138BAKT', 'PMPA', 'NÃ£o', 668317),
(033, 01, 'FINANCEIRO', 'Eliane', 'Lenovo', 'THINKVISION', 'VFF0457', 'PMPA', 'NÃ£o', 676936),
(034, 01, 'FINANCEIRO', 'Elaine', 'Lenovo', 'THINKVISION', 'VFF0441', 'PMPA', 'NÃ£o', 676937),
(035, 01, 'INFORMÃTICA', 'AdministraÃ§Ã£o InformÃ¡tica', 'Positivo', 'W1946PW', '20327501', 'PMPA', 'NÃ£o', 765906),
(036, 02, 'ADMINISTRAÃ‡ÃƒO RECEPÃ‡ÃƒO', 'AdministraÃ§Ã£o InformÃ¡tica', 'Positivo', 'E2011PX', '31126764', 'PMPA', 'NÃ£o', 11965),
(037, 03, 'INFORMÃTICA', 'AdministraÃ§Ã£o InformÃ¡tica', 'Positivo', '22MP55PK', '602E83397', 'PMPA', 'NÃ£o', 753808),
(038, 01, 'INFORMÁTICA', 'Terceirizado', 'Positivo', '20M35PDM', '510016095', 'PMPA', 'Não', 753806),
(039, 05, 'INFORMÁTICA', 'Informática', 'Positivo', '22MP55Pk', '303602E833391', 'PMPA', 'Sim', 753825),
(040, 01, 'MANUTENÇÃO BIOMÉTRICA', 'Manutenção Biomédica', 'Positivo', 'W1946PW', '20328127', 'PMPA', 'Não', 705899),
(041, 02, 'MANUTENÇÃO BIOMÉTRICA', 'Manutenção Biomédica', 'Positivo', 'W1946PW', '20432820', 'PMPA', 'Não', 705901),
(042, 03, 'MANUTENÇÃO BIOMÉTRICA', 'Manutenção Biomédica', 'Lenovo', 'ThinkVision', '1S4434HE1VFF2586', 'PMPA', 'Não', 676934),
(043, 02, 'MANUTENÇÃO PREDIAL', 'Chefia', 'Lenovo', '712SAL', 'T76CNMNQFLG08P', 'PMPA', 'Não', 635901),
(044, 01, 'MANUTENÇÃO PREDIAL', 'Chefia', 'AOC', 'F19L', 'N1215XA002358', 'PMPA', 'Não', 671370),
(045, 01, 'MANUTENÇÃO PREDIAL', 'Manutenção predial', 'Dell', 'E176FPC', 'CN0MC0406418062S164S', 'Procempa', 'Não', 14972),
(046, 01, 'NUTRIÇÃO', 'Chefia', 'Positivo', '20M35PDM', '401510D16060', 'PMPA', 'Não', 753813),
(047, 02, 'NUTRIÇÃO', 'Chefia', 'Positivo', '20M35PDM', '401510D16019', 'PMPA', 'Não', 753819),
(048, 03, 'NUTRIÇÃO', 'Chefia', 'Positivo', 'E2011PX', 'TCH3551350831123884', 'PMPA', 'Não', 727012),
(049, 01, 'ODONTOLOGIA', 'Consultório 16', 'Lenovo', '20M35PDM', '510015924', 'PMPA', 'Sim', 753800),
(050, 01, 'ODONTOLOGIA', 'Consultório 17', 'Positivo', '20M35PD', '401510D16138', 'PMPA', 'Sim', 753798),
(051, 01, 'ODONTOLOGIA', 'Consultório 14', 'Positivo', 'L197WA', 'V1ZB409', 'PMPA', 'Não', 647838),
(052, 01, 'ODONTOLOGIA', 'Consultorio 15', 'Positivo', '20M35PDM', '401510D15896', 'PMPA', 'Sim', 753799),
(053, 01, 'ODONTOLOGIA', 'Estar', 'AOC', 'F19L', 'N1215XA002504', 'PMPA', 'Não', 671363),
(054, 01, 'PORTARIA', 'Impressão de Altas', 'Aoc', 'F19L', 'N1215XA002772', 'PMPA', 'Não', 671359),
(055, 01, 'POSTO DA ENFERMAGEM', 'SOP', 'Positivo', '20M35PDM', '510015775', 'PMPA', 'Sim', 753817),
(056, 02, 'POSTO DA ENFERMAGEM', 'SOP', 'AOC', 'F19L', 'N215XA002388', 'PMPA', 'Não', 671357),
(057, 02, 'PSIQUIATRIA', 'Administração', 'Positivo', '20M35PDM', '510015755', 'PMPA', 'Não', 753797),
(058, 01, 'PSIQUIATRIA', 'Administração', 'Positivo', '20M35PDM', '401510D15928', 'PMPA', 'Sim', 753826),
(059, 03, 'PSIQUIATRIA', 'Administração', 'Positivo', 'E2011PX', '40595277', 'PMPA', 'Não', 733721),
(060, 06, 'PSIQUIATRIA', 'Administração', 'ThinkVision', 'L197WA', 'VFF0453', 'PMPA', 'Não', 676940),
(061, 04, 'PSIQUIATRIA', 'Administração', 'Positivo', 'E2011PX', '31123073', 'PMPA', 'Não', 725956),
(062, 01, 'PSIQUIATRIA', 'Portaria', 'Lenovo', 'L197WA', 'VFF0436', 'PMPA', 'Não', 676935),
(063, 01, 'PSIQUIATRIA', 'Enfermagem', 'Positivo', 'W1946PW', '20432558', 'PMPA', 'Não', 705904),
(064, 03, 'PSIQUIATRIA', 'Enfermagem', 'Positivo', '20M35PDM', '510015875', 'PMPA', 'Sim', 753812),
(065, 01, 'RAIO X', 'Recepção', 'Positivo', '22MP55PK', '804E02235', 'PMPA', 'Sim', 775207),
(066, 01, 'RAIO X', 'Chefia RX', 'AOC', 'F19L', 'T8ACM6NQX8R57NE', 'PMPA', 'Não', 671373),
(067, 01, 'RAIO X', 'Técnicos', 'Aoc', 'F19L', 'N1215XA003104', 'PMPA', 'Não', 671372),
(068, 01, 'RAIO X', 'Radiologista', 'Positivo', 'W1946PW', '20433455', 'PMPA', 'Não', 705911),
(069, 03, 'RECEPÇÃO', 'Recepção', 'Infoway', 'W1946PW', '4700124162595', 'PMPA', 'Não', 717505),
(070, 01, 'RECEPÇÃO', 'Recepção', 'Positivo', 'W1946PW', '20327520', 'PMPA', 'Não', 705889),
(071, 04, 'RECEPÇÃO', 'Recepção', 'Positivo', 'E2011px', '31123817', 'PMPA', 'Não', 733786),
(072, 02, 'RECEPÇÃO', 'Recepção', 'Positivo', '20M35POM', '5100166250', 'PMPA', 'Não', 753815),
(073, 02, 'RECEPÇÃO', 'Chefia', 'Positivo', 'E2011PX', '31123896', 'PMPA', 'Não', 726995),
(074, 02, 'RH', 'Recepção RH', 'Samsung', 'S19C301F', 'Y1X9HXHF815230R', 'S/PATRIMÔNIO', 'Não', 0),
(075, 02, 'RH', 'Administração RH', 'Positivo', 'E2011PX', '31123386', 'PMPA', 'Não', 733780),
(076, 01, 'RH', 'Administração RH', 'Positivo', 'W1946PW', '20432810', 'PMPA', 'Não', 705902),
(077, 01, 'RH', 'Recepção RH', 'Dell', 'E176FPC', 'CN0MC0406418065C0URS', 'Procempa', 'Não', 15626),
(078, 01, 'ROUPARIA', 'Rouparia', 'HP', 'VP15S', 'BRC841N3LT', 'PMPA', 'Não', 653607),
(079, 01, 'SAC', 'SAC', 'AOC', 'F19L', 'T8ACM6NQ8R57NE', 'PMPA', 'Não', 671361),
(080, 01, 'SALA 2 MEDICAÇÃO', 'Medicação', 'Positivo', '22MP55PK', '602E83389', 'PMPA', 'Sim', 753823),
(081, 01, 'SALA DE CONVIVÊNCIA', 'Sala Convivência', 'Lenovo', 'Thinkvision', 'VFF0459', 'PMPA', 'Não', 676939),
(082, 04, 'SALA DE OBSERVAÇÃO', 'Adulta SOA', 'Pisitivo', '20M35PDM', '401510015932', 'PMPA', 'Não', 705894),
(083, 04, 'SALA DE OBSERVAÇÃO', 'Adulta SOA', 'Positivo', 'W1946PW', '20433458', 'PMPA', 'Não', 705900),
(084, 03, 'SALA DE OBSERVAÇÃO', 'Adulta SOA', 'Positivo', 'W1946PW', '20121405', 'PMPA', 'Não', 694223),
(085, 02, 'SALA DE OBSERVAÇÃO', 'Adulta SOA', 'Positivo', '20M35PDM', '401510D15870', 'PMPA', 'Sim', 753801),
(086, 01, 'SALA DE OBSERVAÇÃO', 'Adulta SOA', 'Positivo', '20M35PDM', '401510D15938', 'PMPA', 'Sim', 753802),
(087, 01, 'Sala dos Enfermeiros', 'Sala dos Enfermeiros', 'Positivo', 'W1946PW', '20326712', 'PMPA', 'Não', 705895),
(088, 01, 'SALA DOS MÉDICOS', 'Sala dos Médicos', 'AOC', 'F19L', 'T8ACM6NQX8R57N3', 'PMPA', 'Não', 671374),
(089, 01, 'SALA LARANJA', 'Sala Laranja', 'Positivo', 'W1946PW', '*******', 'PMPA', 'Não', 705905),
(090, 01, 'SALA VERMELHA', 'SALA VERMELHA', 'Positivo', '20M35PDM', '401510D15932', 'PMPA', 'Sim', 753805),
(091, 01, 'SERVIÇO SOCIAL', 'Administração Serviço Social', 'Positivo', 'W1946PW', '20328630', 'PMPA', 'Não', 705898),
(092, 02, 'SERVIÇO SOCIAL', 'Administração Serviço Social', 'Positivo', '22MP55PK', '804E01959', 'PMPA', 'Não', 775196),
(093, 01, 'SERVIÇO SOCIAL', 'Serviço Social', 'Positivo', 'W1946PW', '20328297', 'PMPA', 'Não', 705906),
(094, 02, 'SERVIDORES', 'Servidor Madya', 'Lenovo', 'Thinkvision', 'VFF0433', 'PMPA', 'Não', 676933),
(095, 01, 'TRAUMATOLOGIA', 'Chamada', 'Positivo', '20M35PD', '401510D15806', 'PMPA', 'Sim', 753807),
(096, 01, 'TRAUMATOLOGIA', 'Chefia Enfermagem', 'Positivo', 'W1946PW', '203282', 'PMPA', 'Não', 705890),
(097, 01, 'TRAUMATOLOGIA', 'Enfermagem', 'Positivo', '20M35PD', '510015853', 'PMPA', 'Sim', 753809),
(098, 01, 'TRAUMATOLOGIA', 'Consultório 2', 'Positivo', 'Master D480', '401510D15787', 'PMPA', 'Sim', 753816),
(099, 01, 'TRAUMATOLOGIA', 'Enfermagem', 'Positivo', '20M35PD', '510016024', 'PMPA', 'Sim', 753811),
(100, 01, 'TRAUMATOLOGIA', 'Chefia', 'AOC', 'F19L', 'T8A6M6NQX8R57NE', 'PMPA', 'Não', 671365),
(101, 01, 'TRAUMATOLOGIA', 'Consultório 1', 'Positivo', '20M35PD', '510015925', 'PMPA', 'Sim', 753822),
(102, 01, 'ADMINISTRAÃ‡ÃƒO RECEPÃ‡ÃƒO', 'Estar', 'Aoc', 'F19l', 'T8ACM6NQXBR57NE', 'PMPA', 'NÃ£o', 673662);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `impressora`
--
ALTER TABLE `impressora`
  ADD PRIMARY KEY (`idImpressora`),
  ADD UNIQUE KEY `namePrinter` (`namePrinter`),
  ADD UNIQUE KEY `serie` (`serie`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD UNIQUE KEY `equityNumber` (`equityNumber`);

--
-- Índices para tabela `micro`
--
ALTER TABLE `micro`
  ADD PRIMARY KEY (`idMicro`),
  ADD UNIQUE KEY `serie` (`serie`),
  ADD UNIQUE KEY `numberScore` (`numberScore`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `mac` (`mac`),
  ADD UNIQUE KEY `ip` (`ip`),
  ADD UNIQUE KEY `equityNumber` (`equityNumber`);

--
-- Índices para tabela `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`idMonitor`),
  ADD UNIQUE KEY `serie` (`serie`),
  ADD UNIQUE KEY `equityNumber` (`equityNumber`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `impressora`
--
ALTER TABLE `impressora`
  MODIFY `idImpressora` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `micro`
--
ALTER TABLE `micro`
  MODIFY `idMicro` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `monitor`
--
ALTER TABLE `monitor`
  MODIFY `idMonitor` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
