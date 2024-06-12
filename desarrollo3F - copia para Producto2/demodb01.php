<?php
    $miConexion = new mysqli("localhost","desarrollador","","pasteleria");
    if($miConexion->connect_errno){
        echo "Fallo al conectar con MySql";
    }
    print "Opcion 1:<br>";
    echo $miConexion->host_info;
    print "<br>";
    
    $miConexion = new mysqli("127.0.0.1", "desarrollador","","pasteleria");
    if($miConexion->connect_errno){
        echo "Fallo al conectar con MySql";
    }
    
    print "Opcion 2:<br>";
    echo $miConexion->host_info;
    print "<br>";
?>