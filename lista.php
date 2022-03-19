<?php

include('conexion.php');

$query= "SELECT * FROM pruebatec.lista_precios ";
$result =mysqli_query($conexion, $query);

if(!$result){
    die('Query Failed'. mysqli_error($conexion));
}


$json = array();
while($row = mysqli_fetch_array($result)){
    $json[] = array(
        'precio' => $row['precio'],
        'cod_producto' => $row['cod_producto'],
        'lista_precios' => $row['lista_precios'],
        'id_lista_precios' => $row['id_lista_precios']
    );
}
$jsonstring = json_encode($json);
echo $jsonstring;

?>