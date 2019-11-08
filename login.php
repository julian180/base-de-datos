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

<h1>Introduzca sus datos para acceder</h1>

<form action="comprueba_login.php" method="post">

	<table>
		<tr>
			<td class="izq">
			Login:</td><td class="der"><input "text" name="login"></td></tr>
			<tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
			<tr><td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td></tr></table>

		</form>




</body>
</html>