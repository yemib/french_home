<?php

	class DatabaseConnection{

		public function connect(){
			try{
				$db = new PDO('mysql:host=localhost;dbname=frenchvi_database', 'frenchvi_admin', 'FrenchvillagE');
				return $db;
			}catch(PDOException $e){
				exit("database error");
			}
		}
	}
$class = new DatabaseConnection();
$get = $class->connect();
if($get){
    echo "good Database connection";
}