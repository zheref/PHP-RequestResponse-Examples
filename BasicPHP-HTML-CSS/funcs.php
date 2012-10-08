<?php
	/*
	* FACILITIES
	* El presente archivo carga algunas funciones que ayudan a reducir codigo en las plantillas PHP
	*/

	// Ejecuta el codigo del archivo con el nombre $name especificado
	function load($name)
	{  
		require_once("inc/" . $name . ".php");
	}

	// Renderiza el HTML del archivo con el nombre $name especificado dentro de la carpeta de Includes "inc"
	function renderinc($name)
	{
		include("inc/" . $name . ".php");
	}

	// Renderiza el HTML del archivo con el nombre $name especificado
	function render($name)
	{
		include("/" . $name . ".php");
	}

	// Redirecciona al archivo con el nombre $name especificado y con los parametros de error $error
	function redirect($name, $error)
	{
		if(isset($error))
			header("Location: " . basepath() . "/" . $name . ".php?error=" . $error);
		else
			header("Location: " . basepath() . "/" . $name . ".php");
	}

	// Determina si en este momento existe un usuario autentificado en la sesion o no
	function islogged()
	{
		if(isset($_SESSION['username']))
			return true;
		else 
			return false;
	}

	function basepath()
	{
		//return "/PHP-RequestResponse-Examples/BasicPHP-HTML-CSS"; // Apache HTTP Server
		return ""; // Microsoft WebMatrix
	}
?>