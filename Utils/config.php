<?php

class config{
	
	public function connexion()
	{
		$server="localhost";
		$user="root";
		$pass="";
		$dbname="tp2";
		$conn= new PDO("mysql:host=$server;dbname=$dbname",$user,$pass);
		
		return $conn;
	}
	
}
?>