<?php
  include "modelo.php";

  if (isset($_GET['accion'])) {
		$accion = $_GET['accion'];
	} else {
		$accion = "add_candle";
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		$id = 1;
	}

  if($accion == "add_candle"){
    switch ($id):
      case 1:
        return addPrueba();
  }

  


?>
