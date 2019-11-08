<HTML LANG="ES">

<HEAD>
   <TITLE>John Ramirez Camacho</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>
<H1>Base de datos Citas Médicas</H1>
<P> TABLA Paciente</P>
<center><table>
  <?PHP
  include ('conexion.php');

  $conexion = conectar();

  $consulta = "SELECT * FROM Paciente";

  $resultado = mysqli_query($conexion, $consulta) or die ("Hay problemas con la consulta");

  echo "<table borde='2'>";
  echo "<tr>";
  echo "<th>Cod</th>";
  echo "<th>Nombre_paciente</th>";
  echo "<th>Direccion</th>";
  echo "<th>Telefono</th>";
  echo "<th>Clasificacion</th>";
  echo "</tr>";

  // Bucle while que recorre cada registro y muestra cada campo en la tabla.
  while ($columna = mysqli_fetch_array( $resultado ))
  {
    echo "<tr>";
    echo "<td>" . $columna['Cod'] . "</td><td>" . $columna['Nombre_paciente'] . "</td>";
    echo "<td>" . $columna['Direccion'] . "</td><td>" . $columna['Telefono'] . "</td>";
    echo "<td>" . $columna['Clasificacion'] . "</td><td>" ;
    echo "</tr>";
  }

  echo "</table>"; // Fin de la tabla

?>
  </BODY>

</HTML>
