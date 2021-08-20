<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Prueba Total_code</title>

</head>
<body>

<table class="table">  
          <tr>  
            <th>Fecha</th>
            <th>Nombre</th>  
            <th>Número de pedidos</th>  
            <th>Monto total</th>  
          </tr>  
        </thead>  
        <tbody>  

        <?php
            require_once "php/conexion.php";
            $conexion=conexion();
            if ($conexion->connect_errno) {
            printf("Conexión fallida: %s\n", $conexion->connect_error);
            exit();
}
            $sql="SELECT date_placed, last_name, first_name, ordered_quantity, cash_register from orders"; 
            $result=mysqli_query($conexion,$sql);
            while($row = $result->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo ($row['date_placed']); ?></td>  
            <td><?php echo ($row['last_name']." ".$row['first_name'] ); ?></td> 
            <td><?php echo ($row['ordered_quantity']); ?></td> 
            <td><?php echo ($row['cash_register']); ?></td> 
            </tr>
                
          <?php  } ?>

        
        
        </tbody>  
      </table> 



</body>
</html>