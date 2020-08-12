<?php
     $user = "root";
       $pass = "";
       $server = "localhost";
       $db = "mundofemenino";
       $table = "datos";

       $conexion = new mysqli($server,$user,$pass,$db) or die ("error al conectar a la base de datos".mysqli_error());
       
 ?>
