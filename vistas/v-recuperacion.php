<!DOCTYPE html>
<html lang="es">
<head>


    <link rel="stylesheet" href="../css/estilos1.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
</head>
<body>
    
   <div class="titulo"> <h1>Recuperación de contraseña</h1></div>
    <br>
    <div class= "clave">
     A su correo le llegará la clave de su cuenta <br> TipKey y con esta misma podrá ingresar. <br><br><br>
    <form action="../controladores/enviar.php">
        <input type="email" placeholder="Correo electronico" name="correo">
        <button type="submit">Enviar</button>
    </form>
</div>
</body>
</html>