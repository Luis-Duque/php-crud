<label for="">Datos guardados: </label><br><br>
<?php
    $id = (int) "$_REQUEST[id]";
    $nombre = "$_REQUEST[nombre]";
    $apellidos = "$_REQUEST[apellidos]";
    $edad = "$_REQUEST[edad]";
    $puesto = "$_REQUEST[puesto]";    

    echo "ID: ".$id."<br>";
    echo "Nombre: ".$nombre."<br>";
    echo "Apellidos: ".$apellidos."<br>";
    echo "Edad: ".$edad."<br>";
    echo "Puesto: ".$puesto."<br>";    

    $archivo = fopen("datos.txt","a+");
    $flag = true;

    while(!feof($archivo)){
        $claveid = fgets($archivo);
        $clavenombre = fgets($archivo);
        $claveapellidos = fgets($archivo);
        $claveedad = fgets($archivo);
        $clavepuesto = fgets($archivo);
        if($id == $claveid){
            echo "<br>Ya existe un registro con ese ID...";
            $flag = false;
            break;
        }
    }
    fclose($archivo);

    if($flag && $id != ""){
        $guardar = fopen('datos.txt','a+');
        fputs($guardar, $id."\n");
        fputs($guardar, $nombre."\n");
        fputs($guardar, $apellidos."\n");
        fputs($guardar, $edad."\n");
        fputs($guardar, $puesto."\n");
        fclose($guardar);
        echo "Datos guardados correctamente";
    }
?>
<br><br>
<a href="listado.php">Administrar contactos</a><br>
<a href="listado.php">Registrar contactos</a>