<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: token, Content-Type');
header('Access-Control-Max-Age: 1728000');
header('Content-Length: 0');
header('Content-Type: application/json');
include 'Conexion.php';
$op=  $_POST['op'] ;
if( $op===null)
{
    echo "Error";
}
else
{
    switch ($op) {
        case 'select':
          $sqllogin="select  * from usuarios  ";
            $myArray = array();
            if ($result = $mysqli->query($sqllogin)) {
                while($row = $result->fetch_array(MYSQL_ASSOC)) {
                    $myArray[] = $row;
                }
                echo json_encode($myArray);
            }
            $result->close();
            $mysqli->close();
        break;
        case 'selectsi':
        header('Content-Type: application/json');
              $email= $_POST['vv'];
        $sqllogin="select * from usuarios where email='$email'; ";
          $myArray = array();
          if ($result = $mysqli->query($sqllogin)) {
              while($row = $result->fetch_array(MYSQL_ASSOC)) {
                  $myArray[] = $row;
              }
              echo json_encode($myArray);
          }
          $result->close();
          $mysqli->close();
      break;
        case 'insert':
            header('Content-Type: application/json');
              $email= $_POST['email'];
              $nombre= $_POST['nombre'];
              $apellido= $_POST['apellido'];
              $sexo= $_POST['sexo'];
              $edad= $_POST['edad'];
              $peso= $_POST['peso'];
              $estatura= $_POST['estatura'];  
              $carrera= $_POST['carrera'];  
              $masa= $_POST['mas'];  
                       
           $sqlInsert="INSERT INTO usuarios( email,nombre,apellido,sexo,edad,peso,estatura,carrera,masa) 
                        value ( '$email','$nombre','$apellido','$sexo','$edad','$peso','$estatura','$carrera','$masa')";
            if ($mysqli->query($sqlInsert) === TRUE) {
                echo json_encode ("Informaci&oacute;n registrada correctamente");
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $mysqli->error;
            }
            $mysqli->close();
            break;
        case 'delete':
            $sqlDelete="delete from anio_lectivo where Cod_Docente='$Cod_Docente'";
            if ($mysqli->query($sqlDelete) === TRUE) {
                echo "Informaci&oacute;n eliminada correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
            $mysqli->close();
        break;
        case 'update':
           
              $email= $_POST['email'];
              $nombre= $_POST['nombre'];
              $apellido= $_POST['apellido'];
              $sexo= $_POST['sexo'];
              $edad= $_POST['edad'];
              $peso= $_POST['peso'];
              $estatura= $_POST['estatura'];
              $carrera= $_POST['carrera'];
              $masa= $_POST['mas']; 
              

            $sqlUpdate="UPDATE usuarios SET nombre = '$nombre',apellido = '$apellido',sexo = '$sexo',edad = '$edad',peso = '$peso',estatura = '$estatura',carrera = '$carrera',masa = '$masa' WHERE email = '$email';";
            if ($mysqli->query($sqlUpdate) === TRUE) {
                echo "Informaci&oacute;n actualizada correctamente";
            } else {
                echo "Error: " . $sql . "<br>" . $mysqli->error;
            }
            $mysqli->close();
        break;

        default:
            echo "Error no existe la opcion ".$op;
    }
}

?>
