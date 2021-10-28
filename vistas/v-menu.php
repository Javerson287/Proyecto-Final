<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>menu</title>

</head>

<body>



  <div id=centrar>
    <h1>TipKey</h1>
    <hr style="height:2px;border-width:0;background-color:blue">
  </div>



  <div class="caja1">
    <ul class="nav">
      
      <li><a href="vistas/cerrar_destroy.php" ><span class="material-icons">account_circle</span>Cerrar</a>
      <li><a href="controladores/eliminar.php?id=<?php echo $_SESSION['usuario'];?>" >Eliminar Cuenta</a>
      </li>
    </ul>
  </div>
   
 





  <div class="cuerpo">
    <div class="for1">
      <a href="controladores/c-historial.php">Historial</a>
      <a href="controladores/c-prestamo.php">PRÉSTAMO AMBIENTES</a>
    </div>

    <div class="formularios">

      <form id="form">

        <fieldset>
          <h2 class="fs-title">Ingresar </h2>
          <a href="vistas/agregar_ambiente.php">Ambiente</a><br>
          <a href="vistas/agregar_instructor.php">Instructor</a><br>
          <a href="vistas/agregar_programa.php">Programas</a><br>
          <a href="vistas/agregar_relacion.php">Asignar</a><br>
        </fieldset>
      </form>


      <form id="form">
        <fieldset>
          <h2 class="fs-title">Actualizar </h2>
          <a href="controladores/c-editar_ambientes.php">Ambiente</a><br>
          <a href="controladores/c-editar_instructores.php">Instructor</a><br>
          <a href="controladores/c-editar_programas.php">Programas</a><br>
          <a href="controladores/c-relacion.php">ASIGNACIÓN</a><br>
        </fieldset>
      </form>

      <form id="form">

        <fieldset>
          <h2 class="fs-title">Base De Datos </h2>
          <a href="controladores/copia_seguridad2.php">actualizar</a><br>
          <a title="Descargar Archivo" href="copia/db_copia.sql" download="db_copia.sql" > Descargar Copia<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span><br>
          </a><br><a href="vistas/copia.php">Subir Copia de Seguridad</a>
          </a><br><a href="vistas/documentacion.html">Informe Administrativo</a><br>
           
        </fieldset>
      </form>




    </div>

  </div>


  </script>

</body>

</html>