<form>
    <table border = "1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>Puesto</th>
            <th colspan = "2">Administracion</th>
        </thead>
        <?php
            $archivo = fopen("datos.txt","r");                       
            while(!feof($archivo)){
                $claveid = fgets($archivo);
                $clavenombre = fgets($archivo);
                $claveapellidos = fgets($archivo);
                $claveedad = fgets($archivo);
                $clavepuesto = fgets($archivo);  
                if($claveid != "" && $clavenombre != ""){
                ?>          
                <tr>
                    <td><?php echo $claveid?></td>
                    <td><?php echo $clavenombre?></td>
                    <td><?php echo $claveapellidos?></td>
                    <td><?php echo $claveedad?></td>
                    <td><?php echo $clavepuesto?></td>                      
                    <td><a href="editar.php?idEditar=<?php echo $claveid;?>">Editar</a></td>
                    <td><a href="eliminar.php?idEliminar=<?php echo $claveid;?>">Eliminar</a></td>
                </tr>
                <?php
                }                
            }        
            fclose($archivo);
        ?>                   
    </table>        
</form>
<a href="index.html">Registrar nuevo</a><br><br>