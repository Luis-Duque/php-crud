<?php
    $id = "$_REQUEST[id]";
    $nombre = "$_REQUEST[nombre]";
    $apellidos = "$_REQUEST[apellidos]";
    $edad = "$_REQUEST[edad]";
    $puesto = "$_REQUEST[puesto]";

    $archivo = fopen("datos.txt","r");
    $auxiliar = fopen('auxiliar.txt','a+');   
    while(!feof($archivo)){
        $idActual = chop(fgets($archivo));
        $nombreActual = chop(fgets($archivo));
        $apellidosActuales = chop(fgets($archivo));
        $edadActual = chop(fgets($archivo));
        $puestoActual = chop(fgets($archivo)); 
        if($idActual != ""){       
            if($id == $idActual){            
                fputs($auxiliar, $id."\n");
                fputs($auxiliar, $nombre."\n");
                fputs($auxiliar, $apellidos."\n");
                fputs($auxiliar, $edad."\n");
                fputs($auxiliar, $puesto."\n");
            }else{
                fputs($auxiliar, $idActual."\n");
                fputs($auxiliar, $nombreActual."\n");
                fputs($auxiliar, $apellidosActuales."\n");
                fputs($auxiliar, $edadActual."\n");
                fputs($auxiliar, $puestoActual."\n");
            }    
        }                   
    }
    echo "Se ha actualizado el registro";
    fclose($auxiliar);
    fclose($archivo); 
    unlink("datos.txt");   
    rename("auxiliar.txt","datos.txt") or die();    
?>
<br><br>
<a href="listado.php">Visualizar contactos</a><br>
<a href="index.html">Registrar nuevo</a><br><br>