<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$asunto = $_POST['asunto'];
$numeroTelefono = $_POST['numeroTelefono'];
$numeroCelular = $_POST['$numeroCelular'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];

echo "Recibimos... <br>";
echo "Nombre: ".$nombre."<br>";
echo "Apellido: ".$apellido."<br>";
echo "Asunto: ".$asunto."<br>";
echo "Numero de telefono: ".$numeroTelefono."<br>";
echo "Numero de celular: ".$numeroCelular."<br>";
echo "Email: ".$email."<br>";
echo "Comentario: ".$comentario."<br>";
