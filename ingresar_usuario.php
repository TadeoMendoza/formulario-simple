<body class="bg-dark">
    <?php
    include ("menu.php");
    ?>
    <div></div>
    <br>
<form action="ingresar_usuario.php" class="text-white" method="post">
  <div class="row mb-3 text-white">
    <label for="nombre" class="col-sm-2 col-form-label" >Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
  </div>
  <div class="row mb-3">
    <label for="capellido" class="col-sm-2 col-form-label" >Apellido</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
  </div>
  <div class="row mb-3">
    <label for="dni" class="col-sm-2 col-form-label" >DNI</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="dni" name="dni">
    </div>
  </div>
  <div class="row mb-3">
    <label for="correo" class="col-sm-2 col-form-label" >Correo</label>
    <div class="col-sm-10">
      <input type="mail" class="form-control" id="correo" name="correo">
    </div>
  </div>
  <div class="row mb-3">
    <label for="huella" class="col-sm-2 col-form-label" >Huella Digital</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="huella" name="huella">
    </div>
  </div>

  <button type="submit" name="enviar" class="btn btn-primary">Ingresar</button>
</form>

</body>

<?php
require("conexion.php");
if(isset($_POST['enviar'])){
    if (strlen($_POST['nombre'])>=1 && 
    strlen($_POST['apellido'])>=1 &&
    strlen($_POST['dni'])>=1 &&
    strlen($_POST['correo'])>=1 &&
    strlen($_POST['huella'])>=1){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['correo'];
        $huella= $_POST['huella'];
        $dni= $_POST['dni'];

        $sql= "INSERT INTO `usuario`(id, Nombre, Apellido, Correo, DNI, Cargo, id_huella)
        VALUES (' ','$nombre','$apellido','$correo','$dni',' ','$huella')";
       $resultado= mysqli_query($conexion,$sql);
       
       if ($resultado){
           ?>
           <div class="alert alert-success" role="alert">
           Logueado correctamente
           </div>
           <?php
           }else{
               ?>
              <div class="alert alert-danger" role="alert">
               Algo salió mal :(
               </div>
               <?php
           }
}
}
?>