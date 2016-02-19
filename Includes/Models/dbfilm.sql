
CREATE TABLE IF NOT EXISTS `Carrello` (
  `id_carrello` int(4) NOT NULL AUTO_INCREMENT,
  `film_id` int(4) NOT NULL,
  `utenti_id` int(4) NOT NULL,
  PRIMARY KEY (`id_carrello`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Film` (
  `id_film` int(5) NOT NULL AUTO_INCREMENT,
  `titolo` varchar(255) NOT NULL,
  `descrizione` varchar(8000) NOT NULL,
  `durata` int(5) NOT NULL,
  `prezzo` decimal(5) NOT NULL,
  `magazzino` int(4) NOT NULL,
  `url_immagine` varchar(255) NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `Film` (`id_film`, `titolo`, `descrizione`, `durata`, `prezzo`, `magazzino`, `url_immagine`) VALUES
(1, 'Balle Spaziali', 'Sul pianeta Druidia, la principessa Vespa è promessa sposa al catalettico principe Valium; riluttante alle nozze, fugge nello spazio, accompagnata dalla sua damigella-droide Dorothy.\r\n\r\nIn un''altra zona della galassia, il popolo del pianeta Spaceball ha completamente consumato la propria atmosfera ed è alla disperata ricerca di aria in altri mondi. Il presidente Scrocco ed il comandante militare Lord Casco, detentore del lato posteriore dello Sforzo, hanno elaborato con l''aiuto del colonnello Nunziatella un piano per rapire la principessa Vespa e chiedere come riscatto l''aria del pianeta Druidia.\r\n\r\nIl padre di Vespa, Re Rolando, assolda il contrabbandiere Stella Solitaria ed il suo fedele aiutante Rutto, un canuomo (metà cane e metà uomo) per ritrovare e riportare a casa la principessa fuggiasca. I due, in viaggio tra le stelle in un singolare camper spaziale, sono in debito con il boss mafioso Pizza Margherita e per ripagare tale debito utilizzeranno i soldi promessi dal padre di Vespa.\r\n\r\nStella Solitaria e Rutto raggiungono la principessa Vespa e Dorothy, prima che siano catturate con un raggio traente dall''astronave Spaceball One e condotte sulla loro nave. Si allontanano quindi a velocità iperattiva dagli Spaceballs. I quattro, però, sono costretti ad un atterraggio di fortuna sulla luna di Vega perché è finita la benzina.', 120, 13, 10, 'http://www.antoniogenna.net/doppiaggio/film/ballespaziali.jpg');

INSERT INTO `Film` (`id_film`, `titolo`, `descrizione`, `durata`, `prezzo`, `magazzino`, `url_immagine`) VALUES
(3, 'Kickass', 'Dave Lizewski è un normale studente di liceo senza alcuna particolare caratteristica, eccezion fatta per una grande passione per i fumetti di supereroi. Domandandosi spesso come mai, nonostante la vita di tutti i giorni non sia così eccitante, nessuno abbia mai provato a diventare un supereroe, decide di diventare un supereroe della vita reale di New York. Acquista una tuta verde su eBay e armato con due manganelli va a combattere il crimine con il nome di Kick-Ass. La sua prima uscita ufficiale non si rivela molto fortunata, infatti prima subisce una coltellata nello stomaco da un teppista per poi essere investito da . Allospedale, i medici gli inseriscono delle placche metalliche su tutte le ossa fratturate del corpo. Decide di ritornare a fare il supereroe e stavolta riesce eroicamente a salvare un uomo attaccato da una banda di teppisti. La scena è ripresa da uno dei presenti e caricata su YouTube, così Kick-Ass pian piano diventa un fenomeno mediatico. Dave riesce anche ad approfondire la sua amicizia con la ragazza dei suoi sogni, Katie Deaxuma, che gli si avvicina grazie ad alcuni pettegolezzi che lo spacciano per gay. Quando viene a sapere che Katie è tormentata da uno spacciatore di droga chiamato Rasul, Dave, nelle vesti di Kick-Ass, va a casa di Rasul ad intimargli di lasciar perdere Katie, ma la situazione presto degenera e subisce laccerchiamento degli uomini di Rasul. Improvvisamente, una ragazzina dal costume da supereroe viola irrompe in sala, massacra Rasul ed i suoi uomini e salva Kick-Ass. La ragazzina si presenta, il suo nome è Hit-Girl, divenuta anche lei una supereroina della vita reale insieme al padre: Big Daddy, uno strambo figuro dal costume nero simile a Batman.Big Daddy è in realtà Damon Macready, un ex-poliziotto appassionato di armi la cui vita è stata distrutta dal potente boss mafioso Frank DAmico, che incastrandolo in passato per spaccio di droga ne ha causato lespulsione dal corpo di polizia, il suo conseguente arresto, la depressione della moglie ed il suicidio della stessa. Questultima incinta, riuscì in punto di morte a dare alla luce la piccola Mindy la quale prima passò sotto la tutela di Marcus Williams, collega ed amico di Damon, e poi dal padre stesso una volta uscito di prigione. Dopo anni di addestramento, ora Damon vuole vendicarsi di DAmico con la figlia, iniziando già a farlo sotto le spoglie da supereroi.', 120, 12.33, 10, 'https://upload.wikimedia.org/wikipedia/it/thumb/c/c2/Kick-Ass_1.jpg/197px-Kick-Ass_1.jpg');

INSERT INTO `Film` (`id_film`, `titolo`, `descrizione`, `durata`, `prezzo`, `magazzino`, `url_immagine`) VALUES
(2, 'Balle Spaziali', 'Sul pianeta Druidia, la principessa Vespa è promessa sposa al catalettico principe Valium; riluttante alle nozze, fugge nello spazio, accompagnata dalla sua damigella-droide Dorothy.\r\n\r\nIn un''altra zona della galassia, il popolo del pianeta Spaceball ha completamente consumato la propria atmosfera ed è alla disperata ricerca di aria in altri mondi. Il presidente Scrocco ed il comandante militare Lord Casco, detentore del lato posteriore dello Sforzo, hanno elaborato con l''aiuto del colonnello Nunziatella un piano per rapire la principessa Vespa e chiedere come riscatto l''aria del pianeta Druidia.\r\n\r\nIl padre di Vespa, Re Rolando, assolda il contrabbandiere Stella Solitaria ed il suo fedele aiutante Rutto, un canuomo (metà cane e metà uomo) per ritrovare e riportare a casa la principessa fuggiasca. I due, in viaggio tra le stelle in un singolare camper spaziale, sono in debito con il boss mafioso Pizza Margherita e per ripagare tale debito utilizzeranno i soldi promessi dal padre di Vespa.\r\n\r\nStella Solitaria e Rutto raggiungono la principessa Vespa e Dorothy, prima che siano catturate con un raggio traente dall''astronave Spaceball One e condotte sulla loro nave. Si allontanano quindi a velocità iperattiva dagli Spaceballs. I quattro, però, sono costretti ad un atterraggio di fortuna sulla luna di Vega perché è finita la benzina.', 120, 13, 10, 'http://www.antoniogenna.net/doppiaggio/film/ballespaziali.jpg');

CREATE TABLE IF NOT EXISTS `Utenti` (
  `id_utenti` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utenti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `Utenti` (`id_utenti`, `nome`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'utente', 'utente');
