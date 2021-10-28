<?php
/** esta fucion permite ingresar ambientes a la base de datos 
 * param       numero           fecha                fecha en la que se regitra el usuario
 * param       texto            correo                el correo del ususuario
 * param       texto            nombre_usuario        es como se va ayamar el usuario
 * param       texto            clave                 clave que ingresa el usuario
*/
include_once('conexion.php');

class usuario extends conex
{
    static function consultar_usuario (  $correo, $usuario, $clave )
    {
        include('../controladores/metho.php');
       
        $clave = $encriptar($clave);
       
        $conexion=self::conectar();
        $sql= " SELECT * FROM usuario where correo='$correo' and borrar='0'";
        $result = $conexion->query($sql);
        $conteo = $result->num_rows;
        if ($conteo < 1) {
            $sql= " insert into usuario ( fecha, clave, correo, nombre_usuario,borrar) values ( now(),'$clave', '$correo','$usuario','0')";
            $resultado = $conexion->query($sql);
            if ($conexion ->affected_rows > 0)
            {
               echo '<script language="javascript">alert("Tus datos se guardaron");window.location.href="../controladores/c-iniciar_seccion.php";</script>';
            }
            else
            {
                echo '<script language="javascript">alert("no se pudo guardar su información");window.location.href="./c-registrarse.php";</script>';
            }
        }else{
            echo '<script language="javascript">alert("el correo ya esta en uso");window.location.href="./c-registrarse.php";</script>';
        }
        
    }
}

