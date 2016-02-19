-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Gen 18, 2016 alle 10:32
-- Versione del server: 5.5.46-0ubuntu0.14.04.2
-- Versione PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbfilm`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Film`
--

CREATE TABLE IF NOT EXISTS `Film` (
  `id_film` int(4) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(35) NOT NULL,
  `durata` int(5) NOT NULL,
  `url_immagine` varchar(100) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Prenotazioni`
--

CREATE TABLE IF NOT EXISTS `Prenotazioni` (
  `id_prenotazioni` int(4) NOT NULL,
  `film_id` int(4) NOT NULL,
  `utenti_id` int(4) NOT NULL,
  PRIMARY KEY (`id_prenotazioni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utenti`
--

CREATE TABLE IF NOT EXISTS `Utenti` (
  `id_utenti` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_utenti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `Utenti`
--

INSERT INTO `Utenti` (`id_utenti`, `nome`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'utente', 'utente');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
