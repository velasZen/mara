<?php

	function conexion () {
		$servidor = "viaduct.proxy.rlwy.net";
		$bd = "railwey";
		$user = "root";
		$password = "FugGrCWZSpKXmhJjhjlZbJVwixjNHGzm";

		$con = mysqli($servidor, $user, $password, $bd);

		if (!$con) {
			echo "Error de conexión de base de datos <br>";
			echo "Error número: " . mysqli_connect_errno();
			echo "Texto error: " . mysqli_connect_error();
			exit;
		}

		return $con;
	}

?>
