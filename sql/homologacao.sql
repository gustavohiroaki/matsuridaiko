-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2019 às 20:17
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
  `city_branch` varchar(60) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `numbermember_event` int(11) NOT NULL,
  `zip_event` varchar(9) DEFAULT NULL,
  `state_event` varchar(15) DEFAULT NULL,
  `city_event` varchar(60) DEFAULT NULL,
  `neighboorhood_event` varchar(60) DEFAULT NULL,
  `street_event` varchar(255) DEFAULT NULL,
  `complement_event` varchar(255) DEFAULT NULL,
  `annotation_event` text,
  `responsible_event` varchar(255) DEFAULT NULL,
  `status_event` varchar(1) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_branch`
--

CREATE TABLE `event_branch` (
  `id_eventbranch` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `members_rkmd`
--

CREATE TABLE `members_rkmd` (
  `id_member` int(11) NOT NULL,
  `name_member` varchar(50) DEFAULT NULL,
  `username_member` varchar(50) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
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
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `member_type`
--

CREATE TABLE `member_type` (
  `id_type` int(11) NOT NULL,
  `name_type` varchar(255) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `message_branch`
--

CREATE TABLE `message_branch` (
  `id_messagebranch` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_user`
--

CREATE TABLE `permission_user` (
  `id_permission` int(11) NOT NULL,
  `permission_level` int(11) NOT NULL,
  `role_member` varchar(255) NOT NULL,
  `description_permission` text,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `training_branch`
--

CREATE TABLE `training_branch` (
  `id_trainingbranch` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `id_training` int(11) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP
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
  ADD PRIMARY KEY (`id_eventbranch`),
  ADD KEY `event_branch_ibfk_1` (`id_event`),
  ADD KEY `event_branch_ibfk_2` (`id_branch`);

--
-- Indexes for table `members_rkmd`
--
ALTER TABLE `members_rkmd`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `members_rkmd_ibfk_1` (`id_branch`),
  ADD KEY `members_rkmd_ibfk_2` (`permission_member`),
  ADD KEY `members_rkmd_ibfk_3` (`id_type`);

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
  ADD PRIMARY KEY (`id_messagebranch`),
  ADD KEY `message_branch_ibfk_1` (`id_branch`),
  ADD KEY `message_branch_ibfk_2` (`id_message`);

--
-- Indexes for table `next_training`
--
ALTER TABLE `next_training`
  ADD PRIMARY KEY (`id_training`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_level`),
  ADD KEY `id_permission` (`id_permission`);

--
-- Indexes for table `training_branch`
--
ALTER TABLE `training_branch`
  ADD PRIMARY KEY (`id_trainingbranch`),
  ADD KEY `next_training_ibfk_1` (`id_branch`),
  ADD KEY `next_training_ibfk_2` (`id_training`);

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
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_branch`
--
ALTER TABLE `event_branch`
  MODIFY `id_eventbranch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members_rkmd`
--
ALTER TABLE `members_rkmd`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_type`
--
ALTER TABLE `member_type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_branch`
--
ALTER TABLE `message_branch`
  MODIFY `id_messagebranch` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `next_training`
--
ALTER TABLE `next_training`
  MODIFY `id_training` int(11) NOT NULL AUTO_INCREMENT;

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
-- Limitadores para a tabela `event_branch`
--
ALTER TABLE `event_branch`
  ADD CONSTRAINT `event_branch_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`),
  ADD CONSTRAINT `event_branch_ibfk_2` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`);

--
-- Limitadores para a tabela `members_rkmd`
--
ALTER TABLE `members_rkmd`
  ADD CONSTRAINT `members_rkmd_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
  ADD CONSTRAINT `members_rkmd_ibfk_2` FOREIGN KEY (`permission_member`) REFERENCES `permission_user` (`permission_level`),
  ADD CONSTRAINT `members_rkmd_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `member_type` (`id_type`);

--
-- Limitadores para a tabela `message_branch`
--
ALTER TABLE `message_branch`
  ADD CONSTRAINT `message_branch_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
  ADD CONSTRAINT `message_branch_ibfk_2` FOREIGN KEY (`id_message`) REFERENCES `messages` (`id_message`);

--
-- Limitadores para a tabela `training_branch`
--
ALTER TABLE `training_branch`
  ADD CONSTRAINT `next_training_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
  ADD CONSTRAINT `next_training_ibfk_2` FOREIGN KEY (`id_training`) REFERENCES `next_training` (`id_training`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
