<body class="bg-dark">
    <?php
    include ("menu.php");
    ?>
    <div></div>
    <br>
<form action="eliminar_usuario.php" class="text-white" method="post">
<div class="row mb-3 text-white">
    <label for="id" class="col-sm-2 col-form-label" >ID</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="id" name="id">
    </div>
  </div>
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
  <button type="submit" name="enviar" class="btn btn-danger">Eliminar Usuario</button>
</form>

</body>

<?php
require("conexion.php");
if(isset($_POST['enviar'])){
    if (strlen($_POST['nombre'])>=1 && 
    strlen($_POST['apellido'])>=1 &&
    strlen($_POST['dni'])>=1 &&
    strlen($_POST['id'])>=1){
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $id= $_POST['id'];
        $dni= $_POST['dni'];

        $sql= "DELETE FROM `usuario` WHERE id='$id'";
       $resultado= mysqli_query($conexion,$sql);
       
       if ($resultado){
           ?>
           <div class="alert alert-success" role="alert">
           Usuario eliminado correctamente
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