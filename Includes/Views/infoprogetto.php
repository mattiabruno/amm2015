<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>Compra DvD</title>
    </head>
    <body>
		
        <h2> Descrizione dell'applicazione </h2>
        <p>
        Il sito che ho realizzato gestisce un negozio di film.<br>
	Le funzionalità dell'admin comprendono la creazione, la modifica e l'eliminazione di film dal database.<br>
        Le funzionalità dell'utente comprendono l'aggiunta dei film sul carrello, e l'acquisto di quest'utlimi.<br>
        I dati presenti all'interno del database sono i seguenti:
        </p>
        <ul>
            <li>Id_utente, nome, password della tabella utente</li>
            <li>Id_film, titolo, prezzo, durata film, descrizione e magazzino della tabella film </li>
	    <li>Id_carrello, film_id e utente_id per la tabella carrello</li>
        </ul>
        <p>Inoltre, l'utente &egrave; in grado di visualizzare 
        i film presenti nel database direttamente dalla home, dove vengono
	visualizzati i seguenti dati:
        </p>
        <ul>
            <li>L'immagine relativa al film caricato nel database tramite una url.</li>
            <li>Un titolo</li>
	    <li>La durata del film</li>
            <li>Il prezzo</li>
            <li>La quantità disponibile in magazzino</li>
            <li>Una descrizione</li>			
        </ul>

        <h2> Requisiti del progetto </h2>
        <ul>
            <li>Utilizzo di HTML e CSS</li>
            <li>Utilizzo di PHP e MySQL</li>
            <li>Utilizzo del pattern MVC </li>
            <li>Due ruoli (utente e admin)</li>
            <li>Transazioni:</li>
            <li>	Lato User: Transazione per la compravendità dei film, funzione per l'aggiunta e l'eliminazione di un film dal carrello.  </li>
            <li>	Lato Admin: Funzione per l'aggiunta, l'eliminazione e la modifica di un film.</li>
            <li>Utilizzo Jajax, con il caricamento dei dati relativi al film da eliminare, i dati vengono estrappolati dal database.(ruolo admin)</li>
            <li>Utilizzo di jQuery per la realizzazione dello slideshow, nel quale vengono visualizzate varie immagini caricate nella cartella
            immagini.</li>
        </ul>
    </ul>

    <h2>Accesso al progetto</h2>
    <p>
        La homepage del progetto si trova sulla URL <a href="../../index.php" </a> Sito AMM 2015</a>
    <p>
    <p>Si pu&ograve; accedere alla applicazione con le seguenti credenziali</p>
    <ul>
        <li>Ruolo admin:</li>
        <ul>
            <li>username: admin</li>
            <li>password: admin</li>
        </ul>
        <li>Ruolo utente:</li>
        <ul>
            <li>username: utente</li>
            <li>password: utente</li>
        </ul>
    </ul>
</body>
</html>
