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
	session_start();// REanudar sesión en el caso que exista previamente. Para que si pe pega la dirección manualmente, redirija la login.
	session_destroy();
	header("location:login.php");//Entonces lo redirije a la pagina del login

	
	?>


</body>
</html>