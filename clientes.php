<?php
	$conectar=@mysql_connect('localhost','root','');
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{
		$base=mysql_select_db('formulario-sierrahuacha');
		if(!$base){
			echo"No Se Encontro La Base De Datos";
		}
	}
	$Nombre=$_POST['Nombre'];
	$Email=$_POST['Email'];
	$Comentarios=$_POST['Comentarios'];

$sql="INSERT INTO clientes VALUES('$Nombre','$Email','$Comentarios')";
$agregar=mysql_query($sql);
	if(!$agregar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
