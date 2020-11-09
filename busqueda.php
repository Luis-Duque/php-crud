<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <center>
        <form>        
            <label for="" style = "color: green; font-size: 40px;">Datos de la persona</label><br>
            <table>
                <thead> 
                    <tr>
                        <th><center><label for="id">ID:</label></center></th>
                        <th><center><label for="nombre">Nombre:</label></center></th>
                        <th><center><label for="apellidos">Apellidos:</label></center></th>
                        <th><center><label for="edad">Edad:</label></center></th>
                        <th><center><label for="puesto">Puesto:</label></center></th>
                    </tr>            
                </thead>
                <tbody>            
                    <tr>
                        <td><input type="number" name = "id" id = "id" disabled style = "font-size:15px; color: red"></td>
                        <td><input type="text" name = "nombre" id = "nombre" disabled style = "font-size:15px; color: red"></td>
                        <td><input type="text" name = "apellidos" id = "apellidos" disabled style = "font-size:15px; color: red"></td>
                        <td><input type="number" name = "edad" id = "edad" disabled style = "font-size:15px; color: red"></td>
                        <td><input type="text" name = "puesto" id = "puesto" disabled style = "font-size:15px; color: red"></td>
                    </tr>  
                    <tr>
                        <td colspan = "5"><center><label for="" id = "etiqueta" style = "color: red; font-size: 20px;"></label></center></td>
                    </tr>                            
                </tbody>
            </table> 
        </form>
    </center>
    <?php
    $texto = "$_REQUEST[texto]";
    $archivo = fopen("datos.txt","r");

    while(!feof($archivo)){
        $id = chop(fgets($archivo));
        $nombre = chop(fgets($archivo));
        $apellidos = chop(fgets($archivo));
        $edad = chop(fgets($archivo));
        $puesto = chop(fgets($archivo));
        if($texto == $id || $texto == $nombre){            
            ?>
            <script> document.getElementById('id').value = <?php echo $id;?>;</script>
            <script> document.getElementById('nombre').value = "<?php echo $nombre;?>";</script>    
            <script> document.getElementById('apellidos').value = "<?php echo $apellidos;?>";</script>          
            <script> document.getElementById('edad').value = <?php echo $edad;?>;</script>
            <script> document.getElementById('puesto').value = "<?php echo $puesto;?>";</script>          
            <?php
            break;
        }
        if($id == ""){
            ?>
            <script> document.getElementById('etiqueta').innerHTML = "No existen coincidencias";</script>          
            <?php
        }        
    }
    fclose($archivo); 
    ?>
</body>
<br><br><a href="listado.php">Visualizar todos los contactos</a>
<br><br><a href="index.html">Registrar nuevo</a>
<br><br><a href="buscar.html">Buscar otro</a>
</html>