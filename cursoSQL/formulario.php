<?php

if($_POST){
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $email = $_POST['email'];



  $servername= "localhost";
  $username= "root";
  $password= "";
  $dbname= "cursosql";


  $conn= new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {


    die ("Connection failed: " . $conn->connect_error);
}

$sql= "INSERT INTO usuario (nombre, apellido, email)
VALUES ('$nombre', '$apellido', '$email')";
if ($conn->query($sql) === TRUE) {
  echo "El formulario se ha enviado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    }

    ?>
  
