<?php
/* Actualizacion de Datos*/
if(!empty($_POST)){
	if(isset($_POST["name"]) &&isset($_POST["album"]) &&isset($_POST["year"]) &&isset($_POST["categoria"])){
		if($_POST["name"]!=""&& $_POST["album"]!=""&&$_POST["year"]!=""&&$_POST["categoria"]!=""){
			include "conexion.php";

			$sql = "update discos set name=\"$_POST[name]\",album=\"$_POST[album]\",year=\"$_POST[year]\",categoria=\"$_POST[categoria]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>
