<<<<<<< HEAD
<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=db_galo;charset=utf8",
				"root",
				"" 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo "ERRO BD : ".$e;
		}
	}
}

=======
<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=db_galo;charset=utf8",
				"root",
				"root" 
			);

			return $conn;

		} catch (\PDOException $e) {
			echo "ERRO BD : ".$e;
		}
	}
}

>>>>>>> e162ad5c20c160202d27bbd980f667c0f5adf1e1
?>