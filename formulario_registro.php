<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario Registro Docentes</title>
	<style>

		h1{
		text=align:center;
		color:#00F;
		border-bottom:dotted # 0000FF;
		width:50%;
		margin:auto;


		}

		table {
		border:1px slid #F00;
		padding: 20px 50px;
		margin-top: 50px;
		}

		body{
		background-color: #55b1f5;
		}

	</style>
</head>

<body>

	<?php
	session_start();// REanudar sesión en el caso que exista previamente. Para que si pe pega la dirección manualmente, redirija la login.
	if(!isset($_SESSION["usuario"])){//Si no se almaceno algo en la variable superglobal
		header("location:login.php");//Entonces lo redirije a la pagina del login

	}
	?>
	<h1 style="text-align: center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#0000FF;"><span style="font-family:comic sans ms,cursive;"><strong>&nbsp;&nbsp;&nbsp;<u><em>&nbsp;&nbsp; Registro de Pacientes</em></u></strong></span></span></h1>





	<form name="form1" method="get" action="insertar_registros.php">
		<table align="center" border="3" cellpadding="1" cellspacing="1" style="width:500px;">
	<caption>Datos Docentes</caption>

			<tr>
				<td>Código:</td>
				<td><label for ="codigo"></label>
				<input type="text" name="codigo" id="codigo"></td>
			</tr>

			<tr>
				<td>Nombre:</td>
				<td><label for ="Nombre"></label>
				<input type="text" name="Nombre" id="Nombre"></td>
			</tr>

			<tr>
				<td>Apellido:</td>
				<td><label for ="Apellido"></label>
				<input type="text" name="Apellido" id="Apellido"></td>
			</tr>

			<tr>
				<td>Facultad:</td>
				<td><label for ="Facultad"></label>
				<input type="text" name="Facultad" id="Facultad"></td>
			</tr>



			<tr>
				<td>Correo Electrónico:</td>
				<td><label for ="mail"></label>
				<input type="text" name="mail" id="mail"></td>
			</tr>

			<tr>
				<td>Celular:</td>
				<td><label for ="Celular"></label>
				<input type="text" name="Celular" id="Celular"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="Enviar" id="Enviar" value="Enviar"></td>
				<td align="center"><input type="reset" name="Borrar" id="Borrar" value="Borrar"></td>
			</tr>
			<tr>

			</tr>

			<hr />

			<a href="principal.php">Pagina Principal</a>
				 <p style="text-align: right;"><a href="cierre.php">Cerrar sesón</a></p>

				 <hr />
</table>

	</form>


</body>


<hr />
<hr />
<p style="text-align: right;">&nbsp;</p>

<p style="text-align: center;"><u><a href="javascript:window.history.go(-1);">Volver A La Pagina Anterior</a></u></p>

</html>
