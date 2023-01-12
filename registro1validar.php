<?php
$conexion= mysqli_connect("localhost", "root", "", "r_user");

if(isset($_POST['registrar1'])){

    if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
    && strlen($_POST['password'])  >=1 ){

    $nombre = trim($_POST['nombre']);
    $correo = trim($_POST['correo']);
    $telefono = trim($_POST['telefono']);
    $password = trim($_POST['password']);
   

    $consulta= "INSERT INTO `user` (`nombre`, `correo`, `telefono`, `password`,`rol` )
    VALUES ('$nombre', '$correo','$telefono','$password', '2' )";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);

    header('Location: login.php');
  }
}
if(isset($_POST['registrar'])){

  if(strlen($_POST['nombre']) >=1 && strlen($_POST['correo'])  >=1 && strlen($_POST['telefono'])  >=1 
  && strlen($_POST['password'])  >=1 && strlen($_POST['rol']) >= 1){

  $nombre = trim($_POST['nombre']);
  $correo = trim($_POST['correo']);
  $telefono = trim($_POST['telefono']);
  $password = trim($_POST['password']);
  $rol = trim($_POST['rol']);

  $consulta= "INSERT INTO `user` (`nombre`, `correo`, `telefono`, `password`,`rol` )
  VALUES ('$nombre', '$correo','$telefono','$password', '$rol' )";

  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);

  header('Location: user.php');
}
}








?>