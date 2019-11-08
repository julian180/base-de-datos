<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Identificación del usuario</title>
	<style>

		h1{
		text=align:center;
		color: #4b1717;
		border-bottom:dotted # 0FF0FF;
		width:40%;
		margin:auto;


		}

		table {

		width:25%;
		background-color: #f5faf9 ;
		border: 5px double #1a0e0b ;
		padding: 20px 50px;
		margin:auto;
			}
			.izq{text-align:right;}
			.der{text-align:left;}
			td{

				text-align: center;
				padding:10px;
			}

		body{
		background-color: #55b1f5;	
		}

	</style>
</head>

<body>
<?php

try{  //Conexion
	$base=new PDO("mysql:host=localhost; dbname=Citas_medicas", "root","");
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql="SELECT * FROM usuarios_pass WHERE Usuarios= :login AND Password= :password";
	$resultado=$base->prepare($sql);
	$login=htmlentities(addslashes($_POST["login"]));
	$password=htmlentities(addslashes($_POST["password"]));
	$resultado->bindValue(":login", $login);
	$resultado->bindValue(":password", $password);
	$resultado->execute();
	$numero_registro=$resultado->rowCount();

	if($numero_registro !=0){
		session_start();// Si el usuario en la base de datos, se crea la sesion
		$_SESSION["usuario"]=$_POST["login"];// Se almacena en la variable superglobal el usuario registrado, lo que permite usuarla en cualquier otra pagina
		header("Location:usuarios_registrados1.php");// Lo redirige a una nueva pagina



	}else{
       
        header("Location:usuarios_noregistrados1.php");// Lo redirige a una nueva pagina
      

	}




}catch(Exception $e){ //En caso de que la conexion no tenga exito
die('Error: '. $e->GetMessage());

}
?>
</body>
</html>