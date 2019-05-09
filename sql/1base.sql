DROP DATABASE homologacao;

CREATE DATABASE homologacao CHARACTER SET UTF8 collate utf8_general_ci;
USE homologacao;
SET foreign_key_checks = 0;

CREATE TABLE `branch` (
  `id_branch` int(11) NOT NULL AUTO_INCREMENT,
  `name_branch` varchar(255) DEFAULT NULL,
  `country_branch` varchar(50) DEFAULT NULL,
  `state_branch` varchar(15) DEFAULT NULL,
  `city_branch` varchar(60) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_branch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
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
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `event_branch` (
  `id_eventbranch` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) NOT NULL,
  `id_branch` int(11) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_eventbranch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE event_music;
CREATE TABLE `event_music` (
  `id_eventmusic` int(11) NOT NULL AUTO_INCREMENT,
  `id_event` int(11) DEFAULT NULL,
  `id_music` int(11) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_eventmusic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE members_music;
CREATE TABLE `members_music` (
  `id_membersmusic` int(11) NOT NULL AUTO_INCREMENT,
  `id_member` int(11) DEFAULT NULL,
  `id_music` int(11) DEFAULT NULL,
  `can` tinyint(1) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_membersmusic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE members_rkmd;
CREATE TABLE `members_rkmd` (
  `id_member` int(11) NOT NULL AUTO_INCREMENT,
  `name_member` varchar(50) DEFAULT NULL,
  `username_member` varchar(50) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `pass_member` varchar(50) DEFAULT NULL,
  `permission_member` int(10) DEFAULT NULL,
  `id_branch` int(11) DEFAULT NULL,
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
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_member`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `member_type` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(255) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `date_init` date NOT NULL,
  `date_fin` date NOT NULL,
  `message` text NOT NULL,
  `message_by` varchar(255) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `message_branch` (
  `id_messagebranch` int(11) NOT NULL AUTO_INCREMENT,
  `id_branch` int(11) NOT NULL,
  `id_message` int(11) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  primary key (`id_messagebranch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE music;
CREATE TABLE `music` (
  `id_music` int(11) NOT NULL AUTO_INCREMENT,
  `name_music` varchar(255) DEFAULT NULL,
  `singer_music` varchar(255) DEFAULT NULL,
  `repertoire_music` varchar(1) DEFAULT NULL,
  `path_music` varchar(255) DEFAULT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_music`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `next_training` (
  `id_training` int(11) NOT NULL AUTO_INCREMENT,
  `date_training` date NOT NULL,
  `place_training` varchar(255) NOT NULL,
  `annotation_training` text NOT NULL,
  `organizer_training` varchar(255) NOT NULL,
  `log` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_training`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE notification;
CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL AUTO_INCREMENT,
  `title_notification` text,
  `content_notification` text,
  `sentby_notification` int(11) DEFAULT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notification`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
DROP TABLE permission_user;
CREATE TABLE `permission_user` (
  `id_permission` int(11) NOT NULL AUTO_INCREMENT,
  `permission_level` int(11) NOT NULL,
  `role_member` varchar(255) NOT NULL,
  `description_permission` text,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`permission_level`),
  KEY (`id_permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `training_branch` (
  `id_trainingbranch` int(11) NOT NULL AUTO_INCREMENT,
  `id_branch` int(11) NOT NULL,
  `id_training` int(11) NOT NULL,
  `log` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_trainingbranch`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE event_music;
ALTER TABLE `event_music`
  ADD CONSTRAINT `event_music_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`),
  ADD CONSTRAINT `event_music_ibfk_2` FOREIGN KEY (`id_music`) REFERENCES `music` (`id_music`);
  
ALTER TABLE `members_music`
  ADD CONSTRAINT `members_music_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `members_rkmd` (`id_member`),
  ADD CONSTRAINT `members_music_ibfk_2` FOREIGN KEY (`id_music`) REFERENCES `music` (`id_music`);
  
ALTER TABLE branch
	ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `members_rkmd`(`id_branch`);
  
ALTER TABLE  `members_rkmd`
	ADD CONSTRAINT `members_rkmd_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
    ADD CONSTRAINT `members_rkmd_ibfk_2` FOREIGN KEY (`permission_member`) REFERENCES `permission_user` (`permission_level`),
    ADD CONSTRAINT `members_rkmd_ibfk_3` FOREIGN KEY (`id_type`) REFERENCES `member_type` (`id_type`);
    
ALTER TABLE `event_branch`
	ADD CONSTRAINT `event_branch_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `events` (`id_event`),
    ADD CONSTRAINT `event_branch_ibfk_2` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`);
    
ALTER TABLE `message_branch`
	ADD CONSTRAINT `message_branch_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
    ADD CONSTRAINT `message_branch_ibfk_2` FOREIGN KEY (`id_message`) REFERENCES `messages` (`id_message`);
    
ALTER TABLE `training_branch`
	ADD CONSTRAINT `next_training_ibfk_1` FOREIGN KEY (`id_branch`) REFERENCES `branch` (`id_branch`),
    ADD CONSTRAINT `next_training_ibfk_2` FOREIGN KEY (`id_training`) REFERENCES `next_training` (`id_training`);
    
INSERT INTO `branch` (`id_branch`, `name_branch`, `country_branch`, `state_branch`, `city_branch`) VALUES
(1, 'Guarulhos', 'Brazil', 'São Paulo', 'Guarulhos'),
(2, 'Carrão', 'Brazil', 'São Paulo', 'Vila Carrão');

INSERT INTO `members_rkmd` (`id_member`, `name_member`, `username_member`, `id_type`, `pass_member`, `permission_member`, `id_branch`, `entrydate_member`, `birth_member`, `tel_member`, `rg_member`, `zip_member`, `state_member`, `city_member`, `neighboorhood_member`, `street_member`, `complement_member`, `status_member`, `log`) VALUES
(1, 'Gustavo Hiroaki', 'gustavo.hiroaki', '3', 'gus2019@', 1500, 1, '1970-01-01', '1970-01-01', '', '', '07190-023', 'SP', 'Guarulhos', 'Parque Cecap', 'Rua Rubens Henrique Picchi', 'Complemento', '1', '2019-03-26 14:30:11');

INSERT INTO `member_type` (`id_type`, `name_type`) VALUES
(1, 'Shinjin'),
(2, 'Junior'),
(3, 'Membro');

INSERT INTO `permission_user` (`id_permission`, `permission_level`, `role_member`, `description_permission`) VALUES
(1, 100, 'Comum', 'Permissão comum, sem nenhuma autorização de alteração ou inclusão'),
(2, 200, 'Pais', 'Pai de Juniors ou Membros para ter acesso ao Dashboard, e visualizar informações.'),
(3, 500, 'Treinador(a)', 'Funções habilitadas para membros que passam treinos.'),
(4, 1000, 'Vice-Líder de Filial', 'Possui funções habilitadas para administração da filial'),
(5, 1500, 'Líder de Filial', 'Possui todas as funções habilitadas para administração de Filial.');

SELECT * FROM members_rkmd;

SELECT id_member,name_member,permission_member,name_branch,username_member,pass_member,members_rkmd.id_branch as branch_id FROM members_rkmd
INNER JOIN member_type ON members_rkmd.id_type = member_type.id_type
INNER JOIN branch ON members_rkmd.id_branch = branch.id_branch
WHERE members_rkmd.username_member = 'gustavo.hiroaki';
COMMIT;

SHOW ;
