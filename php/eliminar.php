<?php
/* Eliminar Datos*/
if(!empty($_GET)){
			include "conexion.php";

			$sql = "DELETE FROM discos WHERE id=".$_GET["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Eliminado Correctamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar u_u.\");window.location='../ver.php';</script>";

			}
}

?>