<?php
include('conexion.php');
$pais = $_POST['pais'];
$porcentaje = $_POST['porcentaje'];
$query= "UPDATE pruebatec.lista_precios SET precio = precio*'$porcentaje' WHERE lista_precios = '$pais'";
$result = mysqli_query($conexion, $query);

?>