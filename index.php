
<body class="bg-dark text-white">
    <?php
    include ("menu.php");
    ?>
    <div class="text-center">
        <h1>PERSONAS REGISTRADAS</h1>
    </div>
    <br>
    <table class="table text-white">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">DNI</th>
      <th scope="col">Cargo</th>
      <th scope="col">ID_huella</th>
    </tr>
    <?php
    require("conexion.php");
    $sql= "SELECT * FROM usuario";
    $resultado= mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($resultado)){
        ?>

    <tr>
        <td> <?php echo $mostrar['id']?></td>
        <td> <?php echo $mostrar['Nombre']?></td>
        <td> <?php echo $mostrar['Apellido']?></td>
        <td> <?php echo $mostrar['Correo']?></td>
        <td> <?php echo $mostrar['DNI']?></td>
        <td> <?php echo $mostrar['Cargo']?></td>
        <td> <?php echo $mostrar['id_huella']?></td>
    </tr>
    <?php
}
?>
  </thead>
  
</table>
</body>
