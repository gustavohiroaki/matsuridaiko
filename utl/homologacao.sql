-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Abr-2019 às 05:22
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
(1, 'Guarulhos', 'Brazil', 'São Paulo', 'Guarulhos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) DEFAULT NULL,
  `date_init` date NOT NULL,
  `hour_init` time NOT NULL,
  `date_fin` date NOT NULL,
  `hour_fin` time NOT NULL,
  `dateinit_event` datetime DEFAULT NULL,
  `datefin_event` datetime DEFAULT NULL,
  `zip_event` varchar(9) DEFAULT NULL,
  `state_event` varchar(15) DEFAULT NULL,
  `city_event` varchar(60) DEFAULT NULL,
  `neighboorhood_event` varchar(60) DEFAULT NULL,
  `street_event` varchar(255) DEFAULT NULL,
  `complement_event` varchar(255) DEFAULT NULL,
  `annotation_event` text,
  `responsible_event` int(11) DEFAULT NULL,
  `status_event` varchar(1) DEFAULT NULL,
  `log_event` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `events`
--

INSERT INTO `events` (`id_event`, `name_event`, `date_init`, `hour_init`, `date_fin`, `hour_fin`, `dateinit_event`, `datefin_event`, `zip_event`, `state_event`, `city_event`, `neighboorhood_event`, `street_event`, `complement_event`, `annotation_event`, `responsible_event`, `status_event`, `log_event`) VALUES
(20, 'Test1', '0000-00-00', '00:00:00', '0000-00-00', '00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 1, '', '2019-04-01 13:29:59');

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
(1, 'Gustavo Hiroaki Imafuku', 'gustavo.hiroaki', '3', 'gus2019@', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-26 14:30:11'),
(2, NULL, 'hideki.katahira', NULL, 'hide2019', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-27 17:31:13'),
(4, 'Angelica Nishiharo Kono', 'angelica.kono', '3', 'asgduag', 1, 1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-03-29 13:36:02'),
(5, 'Test1', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 11:45:46'),
(6, '', '', '', '', 0, 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-01 12:58:04'),
(7, 'Bruna Sueko Higa', 'bruna.sueko', '3', 'brubru', 1000, 1, '0000-00-00', '0000-00-00', '', '', '', '', '', '', NULL, '', '', '2019-04-04 18:50:57');

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
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `responsible_event` (`responsible_event`);

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
  MODIFY `id_branch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id_music` int(11) NOT NULL AUTO_INCREMENT;

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
-- Limitadores para a tabela `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`responsible_event`) REFERENCES `members_rkmd` (`id_member`);

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
