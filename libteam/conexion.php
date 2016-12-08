<?php
	//declarar las variables
	$server = "localhost";
	$user_name = "root";
	$user_pass = "";
	$bd_name = "libteam";
	$table_name = "solicitud";

	//Hacer la conexion
	$con = mysqli_connect($server, $user_name, $user_pass, $bd_name);

	//Verificar la conexion
	if(!$con){
		die("Error" .mysqli_connect_errno());
	}

	//Establecer conjunto de caracteres utf8
	mysqli_set_charset($con, "utf8");

	//Obtener los valores del formulario
	$nombre= $_POST['nombre'];
	$operador = $_POST['operador'];
	$mail = $_POST['mail'];
	$pago = $_POST['mdp'];
	$imei = $_POST['imei'];
	$contacto = $_POST['contacto'];
	$marca = $_POST['marca'];
	$modelo = $_POST['model'];
	$fecha = date('Y-m-d H:i:s');


	mysqli_query($con, "INSERT INTO $table_name (Nombre_Solicitante, operador, Email, Forma_Pago, imei, Numero_Contacto, Marca, Modelo, fecha) VALUES ('$nombre', '$operador', '$mail', '$pago', '$imei', '$contacto', '$marca', '$modelo', '$fecha')");

	echo "<script lenguaje= 'javascript'> alert ('El formulario se ha enviado');</script>";
	echo "<script> window.location = 'index.php'</script>";
	//echo "Formulario enviado...";
	//header("Refresh: 2; url=index.php");

	/*orreo
	$subject = "Evío de formulario";

	$message = "Gracias por llenar el registro, estos son los datos que usted relleno: <br>
	nombre:";

	mail($mail, $subject, $message)*/

?>