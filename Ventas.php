<?php

$CONEXIÓN = mysqli_connect("localhost", "root","","ejemplo") or die(mysql_error ($mysql));

function diferencia(){
   if(isset($_POST["Enviar"])){
    insertar($conexion);
   }
   if(isset($_POST["Eliminar"])){
    Eliminar($conexion);
}

function insertar($conexion){
 $Nombre =$_POST["Nombre"];
 $Password =$_POST["Password"];

  $consulta = "INSERT INTO datos(Nombre, Password) VALUES ($Nombre, $Password)";
  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
  header("Location: Ventas.php");
}
function eliminar($conexion){
  $Nombre =$_POST["Nombre"];
 
 
   $consulta = "DELETE FROM ejemplo WHERE Nombre='$Nombre'";
   mysqli_query($conexion, $consulta);
   mysqli_close($conexion);
   header("Location: Ventas.php");
} 
function cargarTbala($coenxion) {
  $consulta ="SELECT * FROM ejemplo";
  $resultado =mysqli_query($coenxion,$consulta);

  while($fila =mysqli_feth_array($resultado)){
    echo "<tr>";
    echo "<td>".$fila["Nombre"];
    echo "<td>".$fila["Password"];  
    echo "<tr>";
  }
  mysqli_close($conexion);
}
?> 