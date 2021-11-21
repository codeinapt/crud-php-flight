<br>
<a class="btn btn-primary" href="./crear" >Agregar Nuevo Proyecto</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Imagen</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($proyectos as $proyecto){ ?>
            <tr>
                <td><?php echo $proyecto['id']; ?></td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td><?php echo $proyecto['imagen']; ?></td>
                <td>Editar|Borrar</td>
            </tr>

        <?php }
        ?>
        
        
    </tbody>
</table>