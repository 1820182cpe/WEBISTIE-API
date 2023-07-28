<?php

	class db_test {
		private $conn;
		private $db_table = "bostoy_tableq";
		
		private $id;
		private $lastname;
		private $firstname;
		private $address;
		private $gender;
		private $number;
		private $age;


		public function __construct($db) {
			$this->conn = $db;
		}
		
		public function setData() {
 
		}

		public function readData() {
			try {

				$query = "SELECT * FROM " . $this->db_table;	
				$stmt = $this->conn->prepare($query);
			
				if($stmt->execute()) {
					return $stmt;
			
				}
				return false;

			} catch (PDOException $e) {
				echo "Error in retrieving data: " . $e->getMessage(); 
			}

			
		}
	}
?>