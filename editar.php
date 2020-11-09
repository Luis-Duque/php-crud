<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Editar registro</title>    
</head>
<body>
    <center>
    <form action="actualizar.php" method = "POST" name = "fe">        
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
                    <td><input type="number" name = "id" id = "id"></td>
                    <td><input type="text" name = "nombre" id = "nombre" required></td>
                    <td><input type="text" name = "apellidos" id = "apellidos" required></td>
                    <td><input type="number" name = "edad" id = "edad" required></td>
                    <td><input type="text" name = "puesto" id = "puesto" required></td>
                </tr>            
                <tr><td colspan = "5"><center><label for="" style="color: green;">Modifica los campos que prefieras</label></center></td></tr>
                <tr><td colspan = "5"><center><input type = "submit" style = "font-size: 18px; color: red" value = "Guardar cambios"></center></td></tr>
            </tbody>
        </table> 
    </form>
    </center>
    <?php
    $id = $_REQUEST['idEditar'];
    $archivo = fopen("datos.txt","r");
    while(!feof($archivo)){
        $idActual = chop(fgets($archivo));
        $nombreActual = chop(fgets($archivo));
        $apellidosActuales = chop(fgets($archivo));
        $edadActual = chop(fgets($archivo));
        $puestoActual = chop(fgets($archivo));                        
        if($id == $idActual){              
            ?>
            <script> document.getElementById('id').value = <?php echo $idActual;?>;</script>
            <script> document.getElementById('nombre').value = "<?php echo $nombreActual;?>";</script>    
            <script> document.getElementById('apellidos').value = "<?php echo $apellidosActuales;?>";</script>          
            <script> document.getElementById('edad').value = <?php echo $edadActual;?>;</script>
            <script> document.getElementById('puesto').value = "<?php echo $puestoActual;?>";</script>          
            <?php
        }        
    }
    ?>
    <a href="index.html">Registrar nuevo</a><br><br>
    <a href="listado.php.html">Administrar contactos</a><br><br>
</body>
</html>