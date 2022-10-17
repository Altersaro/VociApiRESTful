-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Ott 17, 2022 alle 11:49
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voci`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `surname` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `authors`
--

INSERT INTO `authors` (`id`, `name`, `surname`) VALUES
(1, 'Pat', 'Barker'),
(2, 'Caroline ', 'Criado Perez'),
(3, 'Francesca', 'Michielin'),
(4, 'Barbara', 'Schiavulli'),
(5, 'Nahid', 'Persson');

-- --------------------------------------------------------

--
-- Struttura della tabella `media_content`
--

CREATE TABLE `media_content` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `media_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `first_author` varchar(35) NOT NULL,
  `second_author` varchar(35) DEFAULT NULL,
  `third_author` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `media_content`
--

INSERT INTO `media_content` (`id`, `name`, `media_id`, `description`, `first_author`, `second_author`, `third_author`) VALUES
(1, 'Il silenzio delle ragazze', 6, 'Quando Lirnesso viene conquistata dai Greci, Briseide, sopravvissuta al massacro della sua famiglia, viene portata via dalla città come un trofeo e consegnata ad Achille.', 'Pat Barker', NULL, NULL),
(2, 'Invisibili.', 3, 'In una società costruita a immagine e somiglianza degli uomini, metà della popolazione, quella femminile, viene sistematicamente ignorata. A testimoniarlo, la sconvolgente assenza di dati disponibili sui corpi, le abitudini e i bisogni femminili. ', 'Caroline Criado Perez', NULL, NULL),
(3, 'Maschiacci', 5, 'Un uomo che scrive la sue canzoni è un cantautore, mentre una donna che scrive le sue canzoni per tutti è “solo” una cantante. Chi ha deciso che gli uomini si possono vestire solo di certi colori?', 'Francesca Michielin', NULL, NULL),
(4, 'Be My Voice ', 4, 'La giornalista e attivista Masih Alinejad ha esortato le donne iraniane a ribellarsi contro l\'hijab forzato sui social media. Il suo appello all\'azione è diventato uno dei più grandi atti di disobbedienza civile nell\'Iran di oggi', 'Nahid Persson.', NULL, NULL),
(5, 'Nadima, star afghana di TikTok ', 1, 'È tornata dal Canada perché questo è il suo posto e sente di poter fare la differenza. Con la sua alter ego Patinggala Kakai racconta sui social la storia divertente di una pashtun. ', 'Barbara Schiavulli', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `type_of_media`
--

CREATE TABLE `type_of_media` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `type_of_media`
--

INSERT INTO `type_of_media` (`id`, `name`) VALUES
(1, 'Articolo'),
(2, 'Video'),
(3, 'Libro '),
(4, 'Film '),
(5, 'Podcast '),
(6, 'Audiolibro');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `media_content`
--
ALTER TABLE `media_content`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `type_of_media`
--
ALTER TABLE `type_of_media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `media_content`
--
ALTER TABLE `media_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT per la tabella `type_of_media`
--
ALTER TABLE `type_of_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
