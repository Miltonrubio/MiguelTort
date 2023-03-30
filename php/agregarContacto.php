<?php


include("conexion.php");
$con=conectar();

// Tomar los datos del formulario
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$comments = $_POST["comments"];

// Agregar los datos a una base de datos o hacer cualquier otra cosa con ellos
// ...

$query = "INSERT INTO `contacto`(`nombre`, `correo`, `mensaje`, `asunto`, `fecha`) VALUES ('$name','$email','$comments','$subject',NOW())";


if (mysqli_query($con, $query)) {


  echo "<script>  
  history.back();
  alert('Se enviaron los datos');
  </script>";

} else {
  //Si la consulta no se logro completar, se nos mostrara un mensaje de error
  echo "Error: " . mysqli_error($co);
}



?>

