<?php
    $db_host = "localhost";	// Host de la BD 
    $db_user = "root";		// Usuario de la BD 
    $db_pass = "root";		// Contraseña de la BD 
    $db_name = "admin_mario";	// Nombre de la BD

    $mysql_connect_link =    mysql_connect($db_host, $db_user, $db_pass);
    $mysql_connect_db	=    mysql_select_db($db_name);
	
	//Nos retornara cualquier dato de la sesion de un administrador
	if(isset($_COOKIE["session"])){
		$uinfo=mysql_query("SELECT * FROM site_admins WHERE SESSION='".$_COOKIE["session"]."'");
		$user = mysql_fetch_assoc($uinfo);
	}
	
	//Config de roles
	if(isset($min_role_required) && $min_role_required=="full"){
		if($user["role"]=="full"){
			//NO hacer nada
		} else {
			header("Location: index.php"); 
		}
	}
?>