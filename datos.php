<?php
 
 include 'conexion.php';	

$contacto=$_POST['contacto'];
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];
 $sexo=$_POST['sexo'];
 $ubicacion=$_POST['ubicacion'];
 $correo=$_POST['correo'];
 $descripcion=$_POST['descripcion'];
 $entrega=$_POST['entrega'];

$registro="INSERT INTO datos (contacto,nombre,apellido,sexo,ubicacion,correo,descripcion,entrega) VALUES ('$contacto', '$nombre','$apellido','$sexo','$ubicacion','$correo','$descripcion','$entrega')";


mysqli_query($conexion,$registro); 

?>

 