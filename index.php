<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <!-- <div class="card-body">
                        <ul id="container"></ul>
    </div> -->
    
    <div class="cabecera">
    <img src="CoronaLogo.webp" heigth="220" width="220">
    <h1 class='cabecera'>Bienvenido de nuevo</h1>
   

    <form id="formulario">
    <input type="number" min="1" max="100" step="0.01" id="porcentaje" value="1">
    <input class="pais" type="text" name="pais" id="pais" placeholder="ingrese pais:">
    <button type="submit" class="btn btn-primary btnAction" >Calcular porcentaje</button>
    </form>  
    <br><br>
  </div>
   
    <table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">id_lista_precios</th>
      <th scope="col">lista_precios</th>
      <th scope="col">cod_producto</th>
      <th scope="col">precio</th>
    </tr>
  </thead>
  <tbody id="lista">
  
    </tbody>
</table>
    

</body>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <script src="funcion.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
