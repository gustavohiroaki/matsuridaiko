-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Abr-2019 às 10:33
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

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
(28, 'Evento1', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:08:56'),
(29, 'Evento2', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:02'),
(30, 'Evento3', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:06'),
(31, 'Evento4', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:12'),
(32, 'Evento5', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:16'),
(33, 'Evento6', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:20'),
(34, 'Evento7', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:25'),
(35, 'Evento8', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:30'),
(36, 'Evento9', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:35'),
(37, 'Evento10', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:40'),
(38, 'Evento11', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:44'),
(39, 'Evento12', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:48'),
(40, 'Evento13', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:53'),
(41, 'Evento14', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:09:57'),
(42, 'Evento15', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:02'),
(43, 'Evento16', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:06'),
(44, 'Evento17', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:11'),
(45, 'Evento18', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:15'),
(46, 'Evento19', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:19'),
(47, 'Evento20', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', '', '123123', '123123', '1', '2019-04-25 01:10:24'),
(48, 'Evento1', '2019-04-01', '11:11:00', '2019-04-17', '22:22:00', '2019-04-01 11:11:00', '2019-04-17 22:22:00', 1414, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento Update', '123123', '123123', '1', '2019-04-27 00:34:00'),
(49, 'Evento de Hoje', '2019-04-26', '21:43:00', '2019-04-26', '22:00:00', '2019-04-26 21:43:00', '2019-04-26 22:00:00', 20, '07190023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacao', 'Eu', '1', '2019-04-27 00:46:01'),
(50, 'Evento de Hoje', '2019-04-26', '21:43:00', '2019-04-26', '22:00:00', '2019-04-26 21:43:00', '2019-04-26 22:00:00', 20, '07190023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', 'Anotacao', 'Eu', '2', '2019-04-27 00:47:03'),
(51, 'Los Angeles', '2019-05-09', '12:00:00', '2019-05-15', '14:00:00', '2019-05-09 12:00:00', '2019-05-15 14:00:00', 30, '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Teste', 'Teste', 'Katahira', '1', '2019-04-29 03:29:39'),
(52, 'Evento dia 2', '2019-05-02', '04:11:00', '2019-05-02', '11:11:00', '2019-05-02 04:11:00', '2019-05-02 11:11:00', 123, '07190023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Asdasdasd', 'asdadasda', 'sdasdasdasdasdas', '1', '2019-04-30 00:24:23'),
(53, 'Evento dia 4', '2019-05-04', '04:11:00', '2019-05-04', '11:11:00', '2019-05-04 04:11:00', '2019-05-04 11:11:00', 123, '07190023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Asdasdasd', 'asdadasda', 'sdasdasdasdasdas', '1', '2019-04-30 00:24:37'),
(54, '', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-04-30 02:09:03'),
(55, '', '1970-01-01', '00:00:00', '1970-01-01', '00:00:00', '1970-01-01 00:00:00', '1970-01-01 00:00:00', 0, '', '', '', '', '', '', '', '', '', '2019-04-30 02:11:14');

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_branch`
--

CREATE TABLE `event_branch` (
  `id_eventbranch` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Gustavo Hiroaki Imafuku', 'gustavo.hiroaki', '3', 'gus2019@', 100, 2, '1970-01-01', '1970-01-01', '', '', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-03-26 14:30:11'),
(2, NULL, 'hideki.katahira', NULL, 'hide2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-27 17:31:13'),
(5, 'Test1', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 11:45:46'),
(6, '', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 12:58:04'),
(7, 'Bruna Sueko Higa', 'bruna.sueko', '3', 'brubru', 1000, 1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-04 18:50:57'),
(8, 'Teste Cadastro', 'teste.cadastro', '3', '123456', 100, 1, '2019-04-03', '2019-04-03', '123456', '123456', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-04-14 03:54:18'),
(9, 'Angélica Nishiharo Kono', 'angelica.kono', '3', 'haichan00', 100, 1, '2017-10-25', '2000-08-13', '(11)97171-8424', '53.348.541-1', '07095-070', 'SP', 'Guarulhos', 'Jardim Zaira', 'Rua Doutor Miguel Vieira Ferreira 119', 'Apartamento', '1', '2019-04-16 23:10:33'),
(10, 'Mario Kenzo A', 'mario.kassai', '3', '123123', 100, 1, '2019-04-02', '2019-04-02', '123123', '123123', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-04-17 19:09:18'),
(11, 'Solange Noriko Tanoue Imafuku', 'solange.noriko', '3', 'nori100', 200, 1, '2019-04-29', '2018-11-14', '111111', '11111', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'asasdasdasdas', '1', '2019-04-29 03:34:07');

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
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id_music`);

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
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `event_branch`
--
ALTER TABLE `event_branch`
  MODIFY `id_eventbranch` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
