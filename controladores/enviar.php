<?php 
$to = $_GET['correo'];
include("../class/conexion.php");
$conexion = Conex::conectar();
$sql= " SELECT clave FROM `usuario` WHERE correo='$to'";
//echo $sql;t
$resultado = $conexion->query( $sql );
if ($fila = mysqli_fetch_array($resultado))
{
    include("metho.php");
    $clave = $desencriptar( $fila[ 'clave']);
    //echo $clave;die;
    $to = $_GET['correo'];
    $subject = "Contraseña";
    $message = "La contraseña de su cuenta TIPKEY es ".$clave ;
    $headers = "From: tipkeysena@gmail.com" . "\r\n" . "CC: tipkeysena@gmail.com";
    //echo $row['clave'];
    $r =mail($to, $subject, $message, $headers);
    if ($r){
       
        echo '<script language="javascript">alert("Correo enviado" );window.location.href="../index.php";</script>';
    }else{
        
        echo '<script language="javascript">alert("No se pudo enviar el correo ");window.location.href="c-recuperar.php.php";</script>';
    }

}else
{
    echo '<script language="javascript">alert("el correo no esta registrado ");window.location.href="c-recuperar.php";</script>';
}

?>