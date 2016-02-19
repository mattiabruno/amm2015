<?php

session_start();

class Database
{
	public $conn;
	protected function DbConnect()
	{
	$this->conn = mysql_connect("localhost","root","bruno") OR die("Impossibile connettersi al database");
	mysql_select_db("dbfilm", $this->conn);
	}
	
	public function VerificaLogin($nome,$password)
	{
		$this->DbConnect();
		$sql = "SELECT * FROM Utenti WHERE nome='$nome' AND password='$password'";
		$res = mysql_query($sql,$this->conn);
		if($row = mysql_fetch_array($res))
		{
			return $row['id_utenti'];
		}
		else
		{
			return false;
		}  
	}

 	public function QueryNumeroFilm()
  	{
		$this->DbConnect();
		$sql = "SELECT * FROM Film;";
		$res = mysql_query($sql,$this->conn);
		$num = mysql_num_rows($res);
		mysql_close($this->conn);
		if($num == NULL){return 0;}
		return $num;
	}
	
	public function QueryRecuperaDatiFilm($i)
  	{
		$this->DbConnect();
		$sql = 'SELECT * FROM Film LIMIT 1 OFFSET '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}  

	public function AggiungiFilm($titolo,$durata,$prezzo,$magazzino,$descrizione,$url_immagine)
	{
		$this->DbConnect();
		$sql = "INSERT INTO Film (id_film, titolo, descrizione, durata, prezzo, magazzino, url_immagine) VALUES (DEFAULT,'$titolo','$descrizione','$durata','$prezzo','$magazzino','$url_immagine');";
		$res = mysql_query($sql,$this->conn);
		mysql_close($this->conn);
		if(!$res)
		{
			return false;
		}else{
			return true;
		}
	}
	
	public function ModificaFilm($id,$titolo,$durata,$prezzo,$magazzino,$descrizione,$url_immagine)
	{
		$this->DbConnect();
		$sql = "UPDATE Film SET titolo =' $titolo ', descrizione ='$descrizione ', durata =' $durata ', prezzo =' $prezzo ', magazzino = ' $magazzino', url_immagine =' $url_immagine ' WHERE id_film = '$id';";
		$res = mysql_query($sql,$this->conn);
		mysql_close($this->conn);
		if(!$res)
		{
			return false;
		}else{
			return true;
		}
	}
	
	public function QueryRecuperaDatiFilmCertoId($i)
  	{
		$this->DbConnect();
		$sql = 'SELECT * FROM Film WHERE id_film = '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
		public function QueryRecuperaDatiCarrelloCertoId($i)
  	{
		$this->DbConnect();
		$sql = 'SELECT * FROM Carrello WHERE id_carrello = '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
	public function QueryNumeroCarrello()
  	{
		$this->DbConnect();
		$utente = $_SESSION['utenti_id'];
		$sql = "SELECT * FROM Carrello WHERE utenti_id = '$utente';";
		$res = mysql_query($sql,$this->conn);
		$num = mysql_num_rows($res);
		mysql_close($this->conn);
		if($num == NULL){return 0;}
		return $num;
	}
	
	public function QueryRecuperaDatiCarrello($i)
  	{
		$this->DbConnect();
		$utente = $_SESSION['utenti_id'];
		$sql = 'SELECT * FROM Film INNER JOIN Carrello ON Film.id_film = Carrello.film_id AND Carrello.utenti_id = '. $utente .' LIMIT 1 OFFSET '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}  
	
	public function EliminaFilm($i)
  	{
		$this->DbConnect();
		$sql = 'DELETE FROM Film WHERE id_film = '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
	public function AggiungiCarrello($i)
	{
		$this->DbConnect();
		$utente = $_SESSION['utenti_id']; 
		$sql = "INSERT INTO Carrello (id_carrello, film_id, utenti_id) VALUES (DEFAULT,'$i', '$utente');";
		$res = mysql_query($sql,$this->conn);
		mysql_close($this->conn);
		
		if(!$res)
		{
			return false;
		}else{
			return true;
		}
	}

	
		public function EliminaFilmCarrelloUtente($id)
  	{
		$this->DbConnect();
		$sql = 'DELETE FROM Carrello WHERE film_id = '. $id .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
	public function EliminaCarrello($i)
  	{
		$this->DbConnect();
		$sql = 'DELETE FROM Carrello WHERE id_carrello = '. $i .';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
		public function Compra()
  	{
		$this->DbConnect();
		$utente = $_SESSION['utenti_id']; 
		$sql = 'DELETE FROM Carrello WHERE utenti_id = '.$utente.';';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
	
	public function AggiornaNumeroProdotti($i, $n){
		$this->DbConnect();
		$sql = "UPDATE Film SET magazzino = ' $n ' WHERE id_film = ' $id ';";
		$res = mysql_query($sql,$this->conn);
		mysql_close($this->conn);
		if(!$res)
		{
			return false;
		}else{
			return true;
		}
	}
}

?>
