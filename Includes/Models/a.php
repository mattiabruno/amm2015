<?php

session_start();

class a
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

 	public function RecuperaFilm()
  	{
		$this->DbConnect();
		$sql = "SELECT * FROM Film;";
		$res = mysql_query($sql,$this->conn);
		$num = mysql_num_rows($res);
		mysql_close($this->conn);
		return $num;
	}  
   
	public function RecuperaDatiFilm($nriga)
	{ 
		$this->DbConnect();
		$sql = 'SELECT * FROM Film LIMIT 1 OFFSET '. $nriga .' ;';
		$res = mysql_query($sql,$this->conn);
		$row = mysql_fetch_array($res);
		mysql_close($this->conn);
		return $row;
	}
}


?>