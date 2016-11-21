<?php
/* Insertar Datos*/
if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["album"]) &&isset($_POST["year"]) &&isset($_POST["categoria"])){
		if($_POST["name"]!=""&& $_POST["album"]!=""&&$_POST["year"]!=""&&$_POST["categoria"]!=""){
			include "conexion.php";

			$sql = "insert into discos(name,album,year,categoria,created_at) value (\"$_POST[name]\",\"$_POST[album]\",\"$_POST[year]\",\"$_POST[categoria]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
