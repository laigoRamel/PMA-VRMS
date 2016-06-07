<?php
	class Database{
		private $database;
		private $result;
		
		function __construct(){
			$this->connect();
		}
		
		private function connect(){
			$host			= 'localhost';
			$username		= 'root';
			$password		= '';
			$database_name	= 'pma_registration';
			$port			= 3306;
			
			$this->database = mysqli_connect($host, $username, $password, $database_name, $port);
		}
		
		public function execute($query){
			$this->result = mysqli_query($this->database, $query) OR die('Error database');
		}
		
		public function getResult(){
			return $this->result;
		}
		
		public function disconnect(){
			mysqli_close($this->database);
		}
	}
?>