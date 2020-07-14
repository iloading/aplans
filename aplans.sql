-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2020 at 05:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplans`
--

-- --------------------------------------------------------

--
-- Table structure for table `amigos`
--

CREATE TABLE `amigos` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  `ref_status_id` int(11) NOT NULL,
  `ref_last_action_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `amigos`
--

INSERT INTO `amigos` (`user_id1`, `user_id2`, `ref_status_id`, `ref_last_action_user_id`) VALUES
(16, 59, 1, 59),
(59, 12, 1, 59),
(59, 21, 1, 18),
(59, 61, 1, 59);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `ref_event_type_id` int(11) NOT NULL DEFAULT 1,
  `ref_creator_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `date` datetime NOT NULL,
  `slots` int(11) NOT NULL,
  `short_description` mediumtext DEFAULT NULL,
  `last_message_update` timestamp NULL DEFAULT current_timestamp(),
  `local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `ref_event_type_id`, `ref_creator_id`, `name`, `date`, `slots`, `short_description`, `last_message_update`, `local`) VALUES
(1, 1, 8, 'Ca', '2020-07-16 14:50:29', 10, 'es noob', '2020-06-14 16:23:16', 'Universidade de Aveiro'),
(2, 1, 8, 'Ida ao Cinema', '2020-07-24 06:29:34', 5, 'Blablabla', '2020-06-14 18:32:31', 'Universidade de Braga'),
(3, 1, 59, 'Churrascada', '2020-07-18 03:39:25', 10, 'blabla', '2020-06-26 18:29:29', 'Universidade de Coimbra'),
(4, 1, 59, 'Praia', '2020-07-16 09:33:46', 10, 'blabla', '2020-06-26 18:52:43', 'Universidade dos Açores'),
(5, 1, 61, 'Entrega de LAB', '2020-07-04 19:50:51', 10, 'blabla', '2020-06-26 22:38:52', 'Universidade de Coimbra'),
(6, 1, 12, 'Praia', '2020-08-13 14:50:54', 50, 'para todos os meninos', '2020-07-01 21:04:42', 'Universidade de Lisboa'),
(7, 1, 56, 'SkipeBall', '2020-07-02 14:50:58', 2, 'bom jogo', '2020-07-01 21:06:07', ''),
(8, 1, 59, 'Carts', '2020-08-07 14:51:01', 4, 'bom race', '2020-07-01 21:06:07', ''),
(9, 1, 13, 'roof', '2020-08-13 14:51:04', 1, 'la voiu', '2020-07-01 21:06:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`id`, `type`, `url`) VALUES
(1, 'Gastronómico', '/tipos_evento/Vector.png'),
(2, 'Desportivo', '/tipos_evento/Vector-2.png'),
(3, 'Musical', '/tipos_evento/Vector-3.png'),
(4, 'Cinematográfico', '/tipos_evento/Vector-4.png'),
(5, 'Fotográfico', '/tipos_evento/bx_bxs-camera.png'),
(6, 'Tecnológico', '/tipos_evento/bx_bxs-mouse-alt.png'),
(7, 'Cultural', '/tipos_evento/ic_round-school.png');

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`id`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Feminino'),
(3, 'Não Definido');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `ref_sender_id` int(11) NOT NULL,
  `ref_event_id` int(11) NOT NULL,
  `ref_chat_room_id` int(11) NOT NULL,
  `content` varchar(45) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `preferencias`
--

CREATE TABLE `preferencias` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pref_dos_users`
--

CREATE TABLE `pref_dos_users` (
  `id` int(11) NOT NULL,
  `ref_user_id` int(11) NOT NULL,
  `ref_preferencias_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'completa');

-- --------------------------------------------------------

--
-- Table structure for table `tasks_de_users`
--

CREATE TABLE `tasks_de_users` (
  `id` int(11) NOT NULL,
  `ref_users_nos_eventos_id` int(11) NOT NULL,
  `ref_tasks_do_evento_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks_de_users`
--

INSERT INTO `tasks_de_users` (`id`, `ref_users_nos_eventos_id`, `ref_tasks_do_evento_id`) VALUES
(1, 1, 1),
(3, 5, 1),
(4, 6, 1),
(5, 8, 1),
(6, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tasks_do_evento`
--

CREATE TABLE `tasks_do_evento` (
  `id` int(11) NOT NULL,
  `ref_event_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `cor` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks_do_evento`
--

INSERT INTO `tasks_do_evento` (`id`, `ref_event_id`, `name`, `short_description`, `cor`) VALUES
(1, 1, 'Levar Bebidas', 'Encarregue de levar bubida para atarrachar', 'rgb(123,234,111)'),
(2, 1, 'Levar Coluna', 'Para pôr aquele Funk fdd', 'rgb(0,0,0)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ref_genero_id` int(11) NOT NULL DEFAULT 3,
  `ref_roles_id` int(11) NOT NULL DEFAULT 1,
  `nome` varchar(45) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telemovel` varchar(13) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `codigo_postal` varchar(45) DEFAULT NULL,
  `url` varchar(256) NOT NULL DEFAULT '/people/avatar_default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ref_genero_id`, `ref_roles_id`, `nome`, `password_hash`, `email`, `telemovel`, `morada`, `codigo_postal`, `url`) VALUES
(8, 3, 2, 'samuel', '$2y$10$jvnP6DgEvbo0MQNcN6xl4.n7cRwSJ.xzLenmeaPSk649xUySA.PW2', 'sam@ua.pt', '932823954', 'Tábua d\'AÇO', '5120-372', '/people/avatar1.jpg'),
(10, 3, 1, 'João Mota', '$2y$10$Ni/N6LY.DX7EVTXYw9aGnurBOcDnILRbwuEb8VEXyn5Q/H.SmSydS', 'joao.mickey.mota@hotmail.com', '912823954', 'Caminho para lado nenhum', '1234-531', '/people/avatar1.jpg'),
(12, 3, 1, 'David', '$2y$10$KQlG20sdWmQAcQlE.scQLOwW7dHh27GlLkEfDY60P1OR/qpcNlDQu', 'ad@ua.pt', '917234823', 'Rua', '1234-123', '/people/avatar1.jpg'),
(13, 3, 1, 'Luís Joca', '$2y$10$kT8/5cv1tqKNfJ8yzGpBoOnmkc2X/QGxX1wZF.uCMRmiPRKqY0WDi', 'joca@yia.com', '912823954', 'NO MUNDO', '1234-531', '/people/avatar2.jpg'),
(15, 3, 1, 'martim Armado até às botas', '$2y$10$cCwLu3o69dVJEYQ.lWz.d.vqV7j0.xZfxMVVG43hXzA6jIOuoPume', 'martin@noob.pt', '912378183', 'Entre o Norte e o Sul', '1283-847', '/people/avatar2.jpg'),
(16, 3, 1, 'Ivo', '$2y$10$e73Y41o1fEqj6ZGLQ5zIpOsybUjzX3wFqkt60OIEkuS..zOdFz3Iq', 'ivaDaSica@sic.pt', '967852334', 'Algures no mundo dos mémés', '8474-999', '/people/avatar1.jpg'),
(18, 3, 1, 'Luanaaa', '$2y$10$khI8FH6xSE.uZcwmY8BTZ.os758uK8.j5D33ch5dQlG8CBrXcVJOq', 'luA@uc.pt', '912384022', 'Coimbra', '1245-111', '/people/avatar2.jpg'),
(19, 3, 1, 'Zé das Coibess', '$2y$10$bSZdzUH0Vp43ktZzYU44K.TFPTPON5wLZnHhnh7x/xS.BUjKZnrMG', 'ze@dascoibes.pt', '912222222', 'A cair de um telhado', '1234-222', '/people/avatar2.jpg'),
(21, 3, 1, 'Mucha Da Gata', '$2y$10$kZfolldSoyYfc/SouBVnt.F5PMGonq3iZip.eMdpz/ZZAXzQGb5OG', 'mucha@gata.pt', 'NULL', 'NULL', 'NULL', '/people/avatar2.jpg'),
(22, 3, 1, 'zorlakokas', '$2y$10$uaz2qJNJLJb43Eiq/76cYeGQMH9ilpvUgBpx12TnqWVD279Jn0zNO', 'zorlak@noob.pt', '922337384', 'Odivelas city', '1293-234', '/people/avatar2.jpg'),
(56, 3, 1, 'Joquinha', '$2y$10$XmX2ZeLx06IJue966s5RqObbqlAS54bcDHcAv8INov3Nu9fr0f22.', 'joquinha@ua.pt', '932723844', 'Ruaaaaa', '1234-123', '/people/avatar2.jpg'),
(57, 3, 1, 'samaaa', '$2y$10$bHxQjrjVXvD/kz7ZlxydCu71LYHmy.9qsfLlvoBn3ac5rugHdfphq', 'a1@teste.pt', '932823954', 'Rua das Camélias', '5120-374', '/people/avatar2.jpg'),
(58, 3, 1, 'MIGUELI', '$2y$10$x./ieMNA4DTQ2mVHiB.byuxpQp/.7CIith3bKorklHmi/tGFwD3d.', 'migueloiiiiii@ua.pt', '922337384', 'Odivelas city', '1293-234', '/people/avatar2.jpg'),
(59, 3, 1, 'Mie', '$2y$10$te4109r8ILBX/FmGT/KJyudfDdQ59iSXUnnexkefrq0os9mUzo9Vy', 'mie@ua.pt', 'NULL', 'NULL', 'NULL', '/people/avatar_default.png'),
(60, 3, 1, 'Samuel', '$2y$10$Vn.dz42601NS.JGR0bPlfeioByPyUf7qh78up8Vp/1Rq7gi4OOSka', 'samuele@ua.pt', 'NULL', 'NULL', 'NULL', '/people/avatar2.jpg'),
(61, 3, 1, 'pedrooo', '$2y$10$pQYwzPiuUXKXW3HEvc.tgOfTuIL9zzcLMJDIAZ/13mxJB7YnoU5.u', 'pedrooo@gmail.com', 'NULL', 'NULL', 'NULL', '/people/avatar1.jpg'),
(62, 3, 1, 'um teste de imagem ok', '$2y$10$OYYkgBFbuXFlvAwuvanu7u5V6bGEqaIjkd0dWYxG/S0yAKQvVjoxy', 'imagem@ua.pt', 'NULL', 'NULL', 'NULL', '/people/avatar_default.png'),
(63, 3, 1, 'Teste', '$2y$10$xn.WKHNkryrdU.zjC0J6DuwKgqzcmH9mlYayqZHpoy.4KEPuGAUqG', 'teste@gmail.com', 'NULL', 'NULL', 'NULL', '/people/avatar_default.png'),
(64, 3, 1, 'Lu', '$2y$10$IEhpGNVZ8/7tK1a5Q3ZdN.V9gQeKVghAzz6Y88.EcuQWsLsLwONVe', 'lu@uc.pt', '932823954', 'Rua', '5100-234', '/people/avatar_default.png'),
(65, 3, 1, 'Teste', '$2y$10$7B2N0xqPxUPt1ejabxlPguZ2B./bzpYXpj3EA/KSbAk5CDUpfgaym', 'teste@teste.pt', 'NULL', 'NULL', 'NULL', '/people/avatar_default.png'),
(66, 3, 1, 'saaaa', '$2y$10$wcZ9Naa2FVpDZ8U8skydsuLgdE0ANzI0Vv3xvqeD3NGSSo1vev/Ii', 'po@ua.pt', 'NULL', 'NULL', 'NULL', '/people/avatar_default.png');

-- --------------------------------------------------------

--
-- Table structure for table `users_nos_eventos`
--

CREATE TABLE `users_nos_eventos` (
  `id` int(11) NOT NULL,
  `ref_user_id` int(11) NOT NULL,
  `ref_event_id` int(11) NOT NULL,
  `last_online` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_nos_eventos`
--

INSERT INTO `users_nos_eventos` (`id`, `ref_user_id`, `ref_event_id`, `last_online`) VALUES
(1, 59, 3, '2020-06-27 10:14:15'),
(2, 59, 4, '2020-06-27 15:41:53'),
(3, 59, 2, '2020-06-27 15:41:53'),
(4, 8, 1, '2020-07-10 11:53:00'),
(5, 10, 3, '2020-07-11 10:04:07'),
(6, 16, 3, '2020-07-11 12:42:49'),
(7, 18, 3, '2020-07-11 12:43:14'),
(8, 22, 3, '2020-07-11 12:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`user_id1`,`user_id2`),
  ADD KEY `fk_amigos_status1_idx` (`ref_status_id`),
  ADD KEY `fk_amigos_user1_idx` (`ref_last_action_user_id`),
  ADD KEY `fk_amigos_user2_idx` (`user_id2`),
  ADD KEY `fk_amigos_user3_idx` (`user_id1`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_event_event_type1_idx` (`ref_event_type_id`),
  ADD KEY `fk_event_user1_idx` (`ref_creator_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_message_user1_idx` (`ref_sender_id`),
  ADD KEY `fk_message_event1_idx` (`ref_event_id`);

--
-- Indexes for table `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pref_dos_users`
--
ALTER TABLE `pref_dos_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_pref_do_user_user1_idx` (`ref_user_id`),
  ADD KEY `fk_pref_do_user_preferencias1_idx` (`ref_preferencias_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idroles_UNIQUE` (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks_de_users`
--
ALTER TABLE `tasks_de_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tasks_de_users_users/event/room_id1_idx` (`ref_users_nos_eventos_id`),
  ADD KEY `fk_tasks_de_users_tasks_do_evento1_idx` (`ref_tasks_do_evento_id`);

--
-- Indexes for table `tasks_do_evento`
--
ALTER TABLE `tasks_do_evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tasks_do_evento_event1_idx` (`ref_event_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_genero_idx` (`ref_genero_id`),
  ADD KEY `fk_user_roles1_idx` (`ref_roles_id`);

--
-- Indexes for table `users_nos_eventos`
--
ALTER TABLE `users_nos_eventos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users/event/room_id_user1_idx` (`ref_user_id`),
  ADD KEY `fk_users/event/room_id_event1_idx` (`ref_event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `preferencias`
--
ALTER TABLE `preferencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pref_dos_users`
--
ALTER TABLE `pref_dos_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks_de_users`
--
ALTER TABLE `tasks_de_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tasks_do_evento`
--
ALTER TABLE `tasks_do_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users_nos_eventos`
--
ALTER TABLE `users_nos_eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amigos`
--
ALTER TABLE `amigos`
  ADD CONSTRAINT `fk_amigos_status1` FOREIGN KEY (`ref_status_id`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_amigos_user1` FOREIGN KEY (`ref_last_action_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_amigos_user2` FOREIGN KEY (`user_id2`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_amigos_user3` FOREIGN KEY (`user_id1`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_event_type1` FOREIGN KEY (`ref_event_type_id`) REFERENCES `event_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_user1` FOREIGN KEY (`ref_creator_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_event1` FOREIGN KEY (`ref_event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_user1` FOREIGN KEY (`ref_sender_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pref_dos_users`
--
ALTER TABLE `pref_dos_users`
  ADD CONSTRAINT `fk_pref_do_user_preferencias1` FOREIGN KEY (`ref_preferencias_id`) REFERENCES `preferencias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pref_do_user_user1` FOREIGN KEY (`ref_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tasks_de_users`
--
ALTER TABLE `tasks_de_users`
  ADD CONSTRAINT `fk_tasks_de_users_tasks_do_evento1` FOREIGN KEY (`ref_tasks_do_evento_id`) REFERENCES `tasks_do_evento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tasks_de_users_users/event/room_id1` FOREIGN KEY (`ref_users_nos_eventos_id`) REFERENCES `users_nos_eventos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tasks_do_evento`
--
ALTER TABLE `tasks_do_evento`
  ADD CONSTRAINT `fk_tasks_do_evento_event1` FOREIGN KEY (`ref_event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_genero` FOREIGN KEY (`ref_genero_id`) REFERENCES `genero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_roles1` FOREIGN KEY (`ref_roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_nos_eventos`
--
ALTER TABLE `users_nos_eventos`
  ADD CONSTRAINT `fk_users/event/room_id_event1` FOREIGN KEY (`ref_event_id`) REFERENCES `event` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users/event/room_id_user1` FOREIGN KEY (`ref_user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
