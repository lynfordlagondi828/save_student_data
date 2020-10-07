<?php
	
	class DB_Functions{

		private $conn;

		function __construct(){

			require_once 'DB_Config.php';
			$database = new DB_Config();

			$this->conn = $database->dbConnect();

		}

		public function save_student_data($student_full_name){

			$SQL = "INSERT INTO student(student_full_name)VALUES(?)";
			$stmt = $this->conn->prepare($SQL);
			$stmt->execute(array($student_full_name));
			$res = $stmt->fetch();
			return $res;
		}
	}
?>