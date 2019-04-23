
<?php
 header('Content-type:applicationjson');
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'utasalud');
 $select=mysqli_query($con,'select * from usuarios');
            
                while($row =mysqli_fetch_array($select)) {
                    $rows[] = $row;
                }
                echo json_encode($rows);        
?>