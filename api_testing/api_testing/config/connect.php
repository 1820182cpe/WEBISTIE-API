<?php

class db {

	//declaration of host, database name, and database password
	private $host = "localhost";
	private $db_name = "id21003528_bostoy";
	private $db_user = "id21003528_bostoyy";
	private $db_pass = "Ubian_2020";

	public $conn;


	//initiate connection to database		
	public function get_connection() {
		$this->conn = null;
		
		try {
			$this->conn = new PDO ("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
			$this->conn->exec("set names utf8");
			echo "Database connected";

		} catch (PDOException $e) {
			echo "Error: Database could not be connected: " . $e ->getMessage();
		}

		return $this->conn;
	}
}


?>