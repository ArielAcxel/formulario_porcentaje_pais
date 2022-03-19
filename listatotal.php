<?php
include('conexion.php');
$pais = $_POST['pais'];
$total= "SELECT count(lista_precios) as total FROM pruebatec.lista_precios where lista_precios = '$pais'";
$resultado = mysqli_query($conexion, $total);
$json = array();
while($row = mysqli_fetch_array($resultado)){
    $json[] = array(
        'total' => $row['total'],
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;

?>