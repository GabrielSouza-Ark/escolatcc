-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 14:43
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `escolatcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `falta`
--

CREATE TABLE `falta` (
  `id_falta` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `falta` varchar(100) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `falta`
--

INSERT INTO `falta` (`id_falta`, `id`, `falta`, `data`) VALUES
(3, 23, 'Atestado', '2018-10-10'),
(4, 33, 'Injustificado', '2018-11-16'),
(5, 40, 'Virose', '2018-11-29');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `turma` varchar(5) NOT NULL,
  `foto` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`id`, `turma`, `foto`) VALUES
(1, '3B', '_up/6.jpg'),
(2, '3b', '_up/8.jpg'),
(8, '3b', '_up/2.jpg'),
(9, '3b', '_up/2.jpg'),
(10, '3b', '_up/2.jpg'),
(11, '3b', '_up/2.jpg'),
(13, '4b', '_up/5.jpg'),
(15, '1b', '_up/2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informativos`
--

CREATE TABLE `informativos` (
  `id` int(11) NOT NULL,
  `informativo` varchar(1000) NOT NULL,
  `data` date NOT NULL,
  `turma` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `informativos`
--

INSERT INTO `informativos` (`id`, `informativo`, `data`, `turma`) VALUES
(21, 'Passeio para o Parque da Cidade.', '2018-09-03', '3B');

-- --------------------------------------------------------

--
-- Estrutura da tabela `listaaluno`
--

CREATE TABLE `listaaluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `idade` int(3) NOT NULL,
  `turma` varchar(11) NOT NULL,
  `nomeresponsavel` varchar(50) NOT NULL,
  `datadenascimento` date NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `escrita` varchar(2000) NOT NULL,
  `avancos` varchar(1000) NOT NULL,
  `dificuldades` varchar(1000) NOT NULL,
  `providencias` varchar(1000) NOT NULL,
  `encaminhamentos` varchar(1000) NOT NULL,
  `portugues` varchar(2) NOT NULL,
  `matematica` varchar(2) NOT NULL,
  `historia` varchar(2) NOT NULL,
  `geografia` varchar(2) NOT NULL,
  `ciencias` varchar(2) NOT NULL,
  `arte` varchar(2) NOT NULL,
  `edfisica` varchar(2) NOT NULL,
  `ingles` varchar(2) NOT NULL,
  `ocorrencia` varchar(1000) NOT NULL,
  `dataocorrencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `listaaluno`
--

INSERT INTO `listaaluno` (`id`, `nome`, `tipo`, `idade`, `turma`, `nomeresponsavel`, `datadenascimento`, `senha`, `email`, `telefone`, `escrita`, `avancos`, `dificuldades`, `providencias`, `encaminhamentos`, `portugues`, `matematica`, `historia`, `geografia`, `ciencias`, `arte`, `edfisica`, `ingles`, `ocorrencia`, `dataocorrencia`) VALUES
(23, 'Thacyara', 'Aluno', 9, '3B', 'FlÃ¡via Gomes de Oliveira', '2018-08-14', '123', 'flavia@gmail.com', '987654325', 'AlfabÃ©tica', 'Apresenta facilidade na interpretaÃ§Ã£o textual.', 'NÃ£o possui habilidade em acentuar corretamente, pois nÃ£o reconhece sonoridade.', 'Livro especÃ­fico para trabalho em sala.', 'FonoaudiÃ³logo.', '6', '9', '8', '9', '10', '10', '10', '7', 'teste', '2018-10-10'),
(33, 'Joana', 'Aluno', 9, '4B', 'Beatriz Gisele', '2018-09-18', '123', 'beatriz@gmail.com', '897362845', 'AlfabÃ©tica SilÃ¡bica.', 'Apresenta facilidade na escrita e na oralidade.', 'NÃ£o possui habilidade em raciocÃ­nio lÃ³gico.', 'Aprimoramento de atividades.', 'Nenhum', '10', '6', '8', '9', '10', '10', '10', '9', 'testeabc', '0000-00-27'),
(40, 'Clara', 'Aluno', 7, '1B', 'ClÃ¡udia', '2018-11-29', '123', 'claudia@gmail.com', '982345421', 'Boa', 'Ok', 'Nenhuma', 'Nenhuma', 'MÃ©dico', '8', '9', '7', '9', '6', '8', '4', '6', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `listaprofessor`
--

CREATE TABLE `listaprofessor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `idade` int(3) NOT NULL,
  `especialista` varchar(50) NOT NULL,
  `datadenascimento` date NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `listaprofessor`
--

INSERT INTO `listaprofessor` (`id`, `nome`, `tipo`, `idade`, `especialista`, `datadenascimento`, `senha`, `email`, `telefone`) VALUES
(9, 'Joyce', 'Professor', 34, 'Comum', '2018-11-07', '123', 'joyce@gmail.com', '99780973');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginsecretaria`
--

CREATE TABLE `loginsecretaria` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `datadenascimento` date NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `loginsecretaria`
--

INSERT INTO `loginsecretaria` (`id`, `nome`, `telefone`, `email`, `cargo`, `senha`, `datadenascimento`, `tipo`) VALUES
(1, 'Marina ', '9239983', 'marina@gmail', 'Diretora', '123', '2000-10-29', 'Secretaria'),
(5, 'Fabiana', '23232342', 'fabiana@gmail.com', 'Coordenadora', '123', '2018-11-29', 'Secretaria');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(3, 'Lais Mirelly', 'lais@gmail.com', '11 94792873', 'Tenho dÃºvidas acerca da Ã©poca de matrÃ­cula escolar.'),
(4, 'Willian Santos', 'willian@gmail.com', '23 687994737', 'Gostaria de saber quais as faixas etÃ¡rias contempladas na escola.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id_ocorrencia` int(11) NOT NULL,
  `id` int(100) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `ocorrencia` varchar(1000) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id_ocorrencia`, `id`, `nome`, `ocorrencia`, `data`) VALUES
(4, 23, 'Thacyara de Oliveira', 'Desentendimento com colega em sala de aula.', '2018-11-05'),
(5, 33, 'Joana', 'Apresentou estado febril.', '2018-11-10'),
(6, 40, 'Clara', 'Bateu no colega', '2018-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `falta`
--
ALTER TABLE `falta`
  ADD PRIMARY KEY (`id_falta`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informativos`
--
ALTER TABLE `informativos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listaaluno`
--
ALTER TABLE `listaaluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `listaprofessor`
--
ALTER TABLE `listaprofessor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loginsecretaria`
--
ALTER TABLE `loginsecretaria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `falta`
--
ALTER TABLE `falta`
  MODIFY `id_falta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `informativos`
--
ALTER TABLE `informativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `listaaluno`
--
ALTER TABLE `listaaluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `listaprofessor`
--
ALTER TABLE `listaprofessor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `loginsecretaria`
--
ALTER TABLE `loginsecretaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id_ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
