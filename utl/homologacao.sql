-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Maio-2019 às 22:24
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homologacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `branch`
--

CREATE TABLE `branch` (
  `id_branch` int(11) NOT NULL,
  `name_branch` varchar(255) DEFAULT NULL,
  `country_branch` varchar(50) DEFAULT NULL,
  `state_branch` varchar(15) DEFAULT NULL,
  `city_branch` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `branch`
--

INSERT INTO `branch` (`id_branch`, `name_branch`, `country_branch`, `state_branch`, `city_branch`) VALUES
(1, 'Guarulhos', 'Brazil', 'São Paulo', 'Guarulhos'),
(2, 'Carrão', 'Brazil', 'São Paulo', 'Vila Carrão');

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `date_init` date NOT NULL,
  `hour_init` time NOT NULL,
  `date_fin` date NOT NULL,
  `hour_fin` time NOT NULL,
  `dateinit_event` datetime DEFAULT NULL,
  `datefin_event` datetime DEFAULT NULL,
  `numbermember_event` int(11) NOT NULL,
  `zip_event` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `state_event` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `city_event` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `neighboorhood_event` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `street_event` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `complement_event` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `annotation_event` text CHARACTER SET utf8,
  `responsible_event` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `status_event` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `log_event` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id_event`, `name_event`, `date_init`, `hour_init`, `date_fin`, `hour_fin`, `dateinit_event`, `datefin_event`, `numbermember_event`, `zip_event`, `state_event`, `city_event`, `neighboorhood_event`, `street_event`, `complement_event`, `annotation_event`, `responsible_event`, `status_event`, `log_event`) VALUES
(20, 'Test1', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '', '', '', '', '', '', '1', '', '2019-04-01 13:29:59'),
(21, 'Teste111', '2019-04-12', '12:00:00', '2019-04-13', '12:15:00', '2019-04-12 12:00:00', '2019-04-13 12:15:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacao', '1', '1', '2019-04-13 01:39:18'),
(22, 'Evento passado', '2019-02-01', '12:00:00', '2019-02-21', '14:00:00', '2019-02-01 12:00:00', '2019-02-21 14:00:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Test', 'Batata', '1', '2019-04-14 01:06:07'),
(23, 'Evento Futuro', '2019-08-09', '12:00:00', '2019-08-16', '14:00:00', '2019-08-09 12:00:00', '2019-08-16 14:00:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Test', 'Batata', '1', '2019-04-14 01:06:29'),
(24, 'Tesde de evento após git commit', '2019-04-01', '12:13:00', '2019-04-17', '14:14:00', '2019-04-01 12:13:00', '2019-04-17 14:14:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'anotacoes', 'Katahira', '1', '2019-04-15 03:38:49'),
(25, 'Aniversário Argentina', '2019-04-19', '08:00:00', '2019-04-20', '20:00:00', '2019-04-19 08:00:00', '2019-04-20 20:00:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Batata', 'N sei', 'Filial Argentina', '1', '2019-04-16 23:11:53'),
(26, 'Los Angeles', '2019-04-24', '12:00:00', '2019-04-25', '14:00:00', '2019-04-24 12:00:00', '2019-04-25 14:00:00', 0, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Teste', 'N sei', '1', '2019-04-23 12:20:42'),
(27, 'Evento teste numero membros', '2019-04-26', '14:44:00', '2019-04-27', '14:44:00', '2019-04-26 14:44:00', '2019-04-27 14:44:00', 1, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '', '', '1', '2019-04-24 18:58:11'),
(56, 'Evento do Lucas', '2019-05-01', '12:00:00', '2019-05-02', '12:00:00', '2019-05-01 12:00:00', '2019-05-02 12:00:00', 5, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'asdasdasd', 'asdasdsa', 'Katahira', '1', '2019-04-30 13:46:05'),
(57, 'Evento do Lucas', '2019-05-01', '12:00:00', '2019-05-02', '12:00:00', '2019-05-01 12:00:00', '2019-05-02 12:00:00', 5, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'asdasdasd', 'asdasdsa', 'Katahira', '1', '2019-04-30 13:46:48'),
(58, 'Evento do Lucas', '2019-05-01', '12:00:00', '2019-05-02', '12:00:00', '2019-05-01 12:00:00', '2019-05-02 12:00:00', 5, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'asdasdasd', 'asdasdsa', 'Katahira', '1', '2019-04-30 13:47:43'),
(59, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 14:24:07'),
(60, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 14:26:52'),
(61, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 14:27:18'),
(62, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 14:30:59'),
(63, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:15:55'),
(64, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:18:00'),
(65, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:18:54'),
(66, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:19:08'),
(67, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:36:12'),
(68, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:37:45'),
(69, 'Teste Definitivo', '2019-05-08', '11:11:00', '2019-05-08', '12:22:00', '2019-05-08 11:11:00', '2019-05-08 12:22:00', 12, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacoes', 'Responsavel', '1', '2019-04-30 17:38:48'),
(70, 'Cadastro de Evento Teste', '2019-05-03', '12:22:00', '2019-05-04', '12:22:00', '2019-05-03 12:22:00', '2019-05-04 12:22:00', 22, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'iyfiufuifuifuifuifuifuif', 'guigigiuguigiug', 'Resoibsave', '1', '2019-05-02 16:59:35'),
(71, 'Cadastro de Evento Teste', '2019-05-03', '12:22:00', '2019-05-04', '12:22:00', '2019-05-03 12:22:00', '2019-05-04 12:22:00', 22, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'iyfiufuifuifuifuifuifuif', 'guigigiuguigiug', 'Resoibsave', '1', '2019-05-02 17:01:38'),
(72, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:03:06'),
(73, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:06:14'),
(74, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:06:30'),
(75, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:07:18'),
(76, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:24:03'),
(77, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:24:22'),
(78, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:25:06'),
(79, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:29:12'),
(80, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:38:39'),
(81, 'teste', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-05-02 17:39:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_branch`
--

CREATE TABLE `event_branch` (
  `id_eventbranch` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `event_branch`
--

INSERT INTO `event_branch` (`id_eventbranch`, `id_event`, `id_branch`) VALUES
(3, 27, 2),
(4, 27, 1),
(5, 27, 2),
(6, 27, 1),
(7, 27, 2),
(8, 27, 1),
(9, 27, 2),
(10, 27, 1),
(11, 27, 2),
(12, 27, 1),
(13, 27, 2),
(14, 56, 1),
(15, 56, 2),
(16, 58, 1),
(17, 58, 2),
(18, 62, 1),
(19, 62, 2),
(20, 64, 1),
(21, 64, 2),
(22, 67, 1),
(23, 67, 2),
(24, 68, 1),
(25, 68, 2),
(26, 69, 1),
(27, 69, 2),
(28, 69, 1),
(29, 69, 2),
(30, 69, 1),
(31, 69, 2),
(32, 69, 1),
(33, 69, 2),
(34, 69, 1),
(35, 69, 2),
(36, 69, 1),
(37, 69, 2),
(38, 1, 70),
(39, 2, 70),
(40, 71, 1),
(41, 71, 2),
(42, 72, 1),
(43, 72, 2),
(44, 73, 1),
(45, 73, 2),
(46, 74, 1),
(47, 74, 2),
(48, 75, 1),
(49, 75, 2),
(50, 77, 1),
(51, 77, 2),
(52, 78, 1),
(53, 78, 2),
(54, 100, 100),
(55, 100, 100),
(56, 100, 100),
(57, 100, 100),
(58, 81, 1),
(59, 81, 2),
(60, 81, 1),
(61, 81, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_music`
--

CREATE TABLE `event_music` (
  `id_eventmusic` int(11) NOT NULL,
  `id_event` int(11) DEFAULT NULL,
  `id_music` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `members_music`
--

CREATE TABLE `members_music` (
  `id_membersmusic` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `id_music` int(11) DEFAULT NULL,
  `can` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `members_rkmd`
--

CREATE TABLE `members_rkmd` (
  `id_member` int(11) NOT NULL,
  `name_member` varchar(50) DEFAULT NULL,
  `username_member` varchar(50) DEFAULT NULL,
  `id_type` varchar(2) DEFAULT NULL,
  `pass_member` varchar(50) DEFAULT NULL,
  `permission_member` int(10) DEFAULT NULL,
  `id_branch` int(10) DEFAULT NULL,
  `entrydate_member` date DEFAULT NULL,
  `birth_member` date DEFAULT NULL,
  `tel_member` varchar(14) DEFAULT NULL,
  `rg_member` varchar(12) DEFAULT NULL,
  `zip_member` varchar(9) DEFAULT NULL,
  `state_member` varchar(15) DEFAULT NULL,
  `city_member` varchar(60) DEFAULT NULL,
  `neighboorhood_member` varchar(60) DEFAULT NULL,
  `street_member` varchar(255) DEFAULT NULL,
  `complement_member` varchar(255) DEFAULT NULL,
  `status_member` varchar(1) DEFAULT NULL,
  `log_member` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `members_rkmd`
--

INSERT INTO `members_rkmd` (`id_member`, `name_member`, `username_member`, `id_type`, `pass_member`, `permission_member`, `id_branch`, `entrydate_member`, `birth_member`, `tel_member`, `rg_member`, `zip_member`, `state_member`, `city_member`, `neighboorhood_member`, `street_member`, `complement_member`, `status_member`, `log_member`) VALUES
(1, 'Gustavo Hiroaki', 'gustavo.hiroaki', '3', 'gus2019@', 100, 1, '1970-01-01', '1970-01-01', '', '', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-03-26 14:30:11'),
(2, NULL, 'hideki.katahira', NULL, 'hide2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-27 17:31:13'),
(5, 'Test1', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 11:45:46'),
(6, '', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 12:58:04'),
(7, 'Bruna Sueko Higa', 'bruna.sueko', '3', 'brubru', 1000, 1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-04 18:50:57'),
(8, 'Teste Cadastro', 'teste.cadastro', '3', '123456', 100, 1, '2019-04-03', '2019-04-03', '123456', '123456', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-04-14 03:54:18'),
(9, 'Angélica Nishiharo Kono', 'angelica.kono', '3', 'haichan00', 100, 1, '2017-10-25', '2000-08-13', '(11)97171-8424', '53.348.541-1', '07095-070', 'SP', 'Guarulhos', 'Jardim Zaira', 'Rua Doutor Miguel Vieira Ferreira 119', 'Apartamento', '1', '2019-04-16 23:10:33'),
(10, 'Mario Kenzo A', 'mario.kassai', '1', '123123', 100, 1, '2019-04-02', '2019-04-02', '123123', '123123', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-04-17 19:09:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `member_type`
--

CREATE TABLE `member_type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `member_type`
--

INSERT INTO `member_type` (`id_type`, `name_type`) VALUES
(1, 'Shinjin'),
(2, 'Junior'),
(3, 'Membro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `messages`
--

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL,
  `date_init` date NOT NULL,
  `date_fin` date NOT NULL,
  `message` text NOT NULL,
  `message_by` varchar(255) NOT NULL,
  `log_message` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `messages`
--

INSERT INTO `messages` (`id_message`, `date_init`, `date_fin`, `message`, `message_by`, `log_message`) VALUES
(1, '0000-00-00', '0000-00-00', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 12:56:15'),
(2, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:04:06'),
(3, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:27:38'),
(4, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:27:55'),
(5, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:28:21'),
(6, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:29:56'),
(7, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:30:53'),
(8, '2019-05-03', '2019-05-06', 'asdadasd', 'Gustavo Hiroaki', '2019-05-02 13:31:06'),
(9, '2019-05-03', '2019-05-06', 'asdasdas', 'Gustavo Hiroaki', '2019-05-02 19:27:50'),
(10, '2019-05-03', '2019-05-06', 'asdasdas', 'Gustavo Hiroaki', '2019-05-02 19:30:46'),
(11, '2019-05-03', '2019-05-06', 'asdasdas', 'Gustavo Hiroaki', '2019-05-02 19:31:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `message_branch`
--

CREATE TABLE `message_branch` (
  `id_messagebranch` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `id_message` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `message_branch`
--

INSERT INTO `message_branch` (`id_messagebranch`, `id_branch`, `id_message`) VALUES
(1, 11, 1),
(2, 11, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `music`
--

CREATE TABLE `music` (
  `id_music` int(11) NOT NULL,
  `name_music` varchar(255) DEFAULT NULL,
  `singer_music` varchar(255) DEFAULT NULL,
  `repertoire_music` varchar(1) DEFAULT NULL,
  `path_music` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `music`
--

INSERT INTO `music` (`id_music`, `name_music`, `singer_music`, `repertoire_music`, `path_music`) VALUES
(1, 'Teste', NULL, NULL, NULL),
(3, 'Sanshin no Hana.mp3', NULL, NULL, NULL),
(4, 'Sanshin no Hana.mp3', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `next_training`
--

CREATE TABLE `next_training` (
  `id_training` int(11) NOT NULL,
  `date_training` date NOT NULL,
  `place_training` varchar(255) NOT NULL,
  `annotation_training` text NOT NULL,
  `organizer_training` varchar(255) NOT NULL,
  `log_message` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `title_notification` text,
  `content_notification` text,
  `sentby_notification` int(11) DEFAULT NULL,
  `log_notification` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_user`
--

CREATE TABLE `permission_user` (
  `id_permission` int(11) NOT NULL,
  `permission_level` int(10) DEFAULT NULL,
  `role_member` varchar(255) DEFAULT NULL,
  `description_permission` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `permission_user`
--

INSERT INTO `permission_user` (`id_permission`, `permission_level`, `role_member`, `description_permission`) VALUES
(1, 100, 'Comum', 'Permissão comum, sem nenhuma autorização de alteração ou inclusão'),
(2, 200, 'Pais', 'Pai de Juniors ou Membros para ter acesso ao Dashboard, e visualizar informações.'),
(3, 500, 'Treinador(a)', 'Funções habilitadas para membros que passam treinos.'),
(4, 1000, 'Vice-Líder de Filial', 'Possui funções habilitadas para administração da filial'),
(5, 1500, 'Líder de Filial', 'Possui todas as funções habilitadas para administração de Filial.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `training_branch`
--

CREATE TABLE `training_branch` (
  `id_trainingbranch` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `id_training` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id_branch`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `event_branch`
--
ALTER TABLE `event_branch`
  ADD PRIMARY KEY (`id_eventbranch`);

--
-- Indexes for table `event_music`
--
ALTER TABLE `event_music`
  ADD PRIMARY KEY (`id_eventmusic`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id_music` (`id_music`);

--
-- Indexes for table `members_music`
--
ALTER TABLE `members_music`
  ADD PRIMARY KEY (`id_membersmusic`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_music` (`id_music`);

--
-- Indexes for table `members_rkmd`
--
ALTER TABLE `members_rkmd`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `member_type`
--
ALTER TABLE `member_type`
  ADD PRIMARY KEY (`id_type`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `message_branch`
--
ALTER TABLE `message_branch`
  ADD PRIMARY KEY (`id_messagebranch`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id_music`);

--
-- Indexes for table `next_training`
--
ALTER TABLE `next_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`),
  ADD KEY `sentby_notification` (`sentby_notification`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id_permission`);

--
-- Indexes for table `training_branch`
--
ALTER TABLE `training_branch`
  ADD PRIMARY KEY (`id_trainingbranch`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id_branch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `event_branch`
--
ALTER TABLE `event_branch`
  MODIFY `id_eventbranch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `event_music`
--
ALTER TABLE `event_music`
  MODIFY `id_eventmusic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_music`
--
ALTER TABLE `members_music`
  MODIFY `id_membersmusic` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_rkmd`
--
ALTER TABLE `members_rkmd`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message_branch`
--
ALTER TABLE `message_branch`
  MODIFY `id_messagebranch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `next_training`
--
ALTER TABLE `next_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id_permission` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training_branch`
--
ALTER TABLE `training_branch`
  MODIFY `id_trainingbranch` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `event_music`
--
ALTER TABLE `event_music`
  ADD CONSTRAINT `event_music_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`),
  ADD CONSTRAINT `event_music_ibfk_2` FOREIGN KEY (`id_music`) REFERENCES `music` (`id_music`);

--
-- Limitadores para a tabela `members_music`
--
ALTER TABLE `members_music`
  ADD CONSTRAINT `members_music_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members_rkmd` (`id_member`),
  ADD CONSTRAINT `members_music_ibfk_2` FOREIGN KEY (`id_music`) REFERENCES `music` (`id_music`);

--
-- Limitadores para a tabela `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`sentby_notification`) REFERENCES `members_rkmd` (`id_member`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
