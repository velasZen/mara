<?php
require_once("conexion.php");
  function addCandle(){
    $con = conexion();
  	$stmt = $con->prepare("insert into CANDLES (name, price, height, weight, type, description) values (?,?,?,?,?,?)");
  	$stmt->bind_param("ssssss", $nom, $pri, $hei, $wei , $ty, $desc);
  
  	$nom = $_POST['name'];
  	$pri = $_POST['price'];
  	$hei = $_POST['height'];
    $wei = $_POST['weight'];
    $ty = $_POST['type'];
    $desc = $_POST['description'];
  
  	$stmt->execute();
  
  	if ($stmt->affected_rows) {
  		echo "Se ha insertado correctamente<br>";
  	} else {
  		echo "No se ha insertado la persona<br>";
  	}
    
  }

  function addPrueba(){
    $con = conexion();
  	$stmt = $con->prepare("insert into PRUEBA (id,nombre) values (?,?)");
  	$stmt->bind_param("ds",$id, $nom);
    $id = 0;
  	$nom = $_GET['name'];
    
  	$stmt->execute();
  
  	if ($stmt->affected_rows) {
  		return "Se ha insertado correctamente<br>";
  	} else {
  		return "No se ha insertado la persona<br>";
  	}
    
  }


?>
