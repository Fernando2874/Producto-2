<?php
$miConexion = new mysqli("localhost","desarrollador","","pasteleria");
if($miConexion->connect_errno){
    echo "Fallo al connectar con MySql";
}
//realizar consulta sql
$resultado= $miConexion->query("SELECT  * FROM clietes ORDER BY id ASC");

echo "<h3>Orden iverso</h3>";
for($num_fila = $resultado->num_rows-1; $num_fila >=0; $num_fila--){
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo "id =" .$fila["id"];
    echo "nombres =" .$fila["nombres"];
    echo "apellidos =" .$fila["apellidos"];
    echo "usuario =" .$fila["usuario"]."<br>";
}
echo "<h3>Orden del conjunto de resultados</h3> <br>";
$resultado->data_seek(0);
while($file =$resultado->fetch_assoc()){
    echo "id =" .$fila["id"];
    echo "nombres =" .$fila["nombres"];
    echo "apellidos =" .$fila["apellidos"];
    echo "usuario =" .$fila["usuario"]."<br>";
}
?>