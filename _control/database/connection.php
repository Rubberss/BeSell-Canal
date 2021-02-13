<?php
	$banco = "bemol";
	$username = "root";
	$senha  = "";
	$hostname = "localhost";
	$connect  = mysqli_connect($hostname, $username, $senha, $banco);
	
	if(!$connect){
		die(" Falha na conexão: ".mysqli_connect_error());
	}
?>