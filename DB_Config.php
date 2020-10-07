<?php
	
	class DB_Config {

		private $conn;

		function __construct(){

		}

		function dbConnect(){

			$this->conn = new PDO("mysql:host=localhost;dbname=db_data","root","");
			return $this->conn;
		}
	}
?>