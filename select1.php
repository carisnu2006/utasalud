<?php
require("Conexion.php");
$consulta = mysqli_query($conn, "select * from usuarios");
if (mysqli_num_rows($consulta) > 0)
{
    echo "
<p>"; while($row = mysqli_fetch_array($consulta, MYSQL_ASSOC)) 
{ echo "<tr>";
  echo "<<td>".$row['email']."</td>"; 
  echo "<td>".$row['nombre']."</td>"; 
  echo "<td>".$row['apellido']."</td>"; 
  echo "<td>".$row['sexo']."</td>"; 
  echo "<<td>".$row['edad']."</td>"; 
  echo "<td>".$row['peso']."</td>"; 
  echo "<td>".$row['estatura']."</td>"; 
  echo "<td>".$row['carrera']."</td>"; 
  echo "</tr>"; } 
  echo " <table> <thead> <tr> <th>Nº de Cédula</th> <th>Nombre</th> <th>Fecha Nacimiento</th> <th>Cargo</th> </tr> </thead> </table> 
} else { 
echo " <p>Aún no hay registros en la base de datos</p> 
}
?>