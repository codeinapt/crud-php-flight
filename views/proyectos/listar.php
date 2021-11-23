
<br>
<a class="btn btn-primary" href="./crear" >Agregar Nuevo Proyecto</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        
        <?php foreach ($proyectos as $proyecto){ ?>
            <tr>
                <td><?php echo $proyecto['id']; ?></td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td><?php echo $proyecto['imagen']; ?></td>
                
                <td>
                    
                    <form action="./editar" class="d-inline" method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $proyecto['id']; ?>" />
                        <button type="submit" class="btn btn-info">Editar</button>
                    </form> 
                    
                    |
                    
                <!-- Receive id to delete data -->
                <!-- Recepcionar id para borrar datos -->
                    <form action="./borrar" class="d-inline" method="post">
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo $proyecto['id']; ?>" />
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    
                    </form>
                
                </td>
            
            </tr>

        <?php } ?>
        
        
        
    </tbody>
</table>