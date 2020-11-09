<?php
    $id = (int) "$_REQUEST[idEliminar]";  

    echo "ID: ".$id."<br>";  

    $archivo = fopen("datos.txt","r");
    $auxiliar = fopen('auxiliar.txt','a+');    

    while(!feof($archivo)){
        $claveid = fgets($archivo);
        $clavenombre = fgets($archivo);
        $claveapellidos = fgets($archivo);
        $claveedad = fgets($archivo);
        $clavepuesto = fgets($archivo);
        if($id != $claveid){            
            fputs($auxiliar, $claveid);
            fputs($auxiliar, $clavenombre);
            fputs($auxiliar, $claveapellidos);
            fputs($auxiliar, $claveedad);
            fputs($auxiliar, $clavepuesto);
        }        
    }
    echo "Se ha eliminado el registro";
    fclose($auxiliar);
    fclose($archivo); 
    unlink("datos.txt");   
    rename("auxiliar.txt","datos.txt") or die();
?>
<br><br><a href="listado.php">Atras</a>