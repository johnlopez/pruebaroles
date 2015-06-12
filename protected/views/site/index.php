
<h3>
    Listado de permisos por usuario
</h3>

<div>
    <?php 
        foreach ($obtener as $user) {
        
    ?>
    <table>
        <tr> 
            <td>ID</td>
            <td>Nombre</td>
            <td>Descripcion</td>
        </tr>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php  echo $user['nombre'] ?></td>
            <td><?php  echo $user['descripcion']?></td>
        </tr>
    </table>
    
    <?php } ?>
    
</div>
