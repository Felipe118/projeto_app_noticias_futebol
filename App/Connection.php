<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=db_galo;charset=utf8",
				"root",
				"201218" 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo "ERRO BD : ".$e;
		}
	}
}

?>