
CREATE TABLE IF NOT EXISTS `Carrello` (
  `id_carrello` int(4) NOT NULL AUTO_INCREMENT,
  `film_id` int(4) NOT NULL,
  `utenti_id` int(4) NOT NULL,
  PRIMARY KEY (`id_carrello`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Film` (
  `id_film` int(5) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `descrizione` varchar(2000) NOT NULL,
  `durata` int(5) NOT NULL,
  `prezzo` decimal(5,2) NOT NULL,
  `magazzino` int(4) NOT NULL,
  `url_immagine` varchar(255) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `Utenti` (
  `id_utenti` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utenti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `Utenti` (`id_utenti`, `nome`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'utente', 'utente');
