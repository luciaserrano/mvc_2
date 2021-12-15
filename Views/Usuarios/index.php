
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <div class="col-md-6">
            <h1>Lista de Usuarios</h1>
        </div>

        <div class="col-md-6">
            <a href="/mvc_2/usuarios/create/" class="btn btn-primary btn-xs pull-right"> Nuevo Usuario</a>
        </div>
        
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th class="text-center">Acciones</th>
        </tr>
        </thead>
        <?php
        foreach ($usuarios as $usuario)
        {
            echo '<tr>';
            echo "<td>" . $usuario['id'] . "</td>";
            echo "<td>" . $usuario['name'] . "</td>";
            echo "<td>" . $usuario['email'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_2/usuarios/edit/" . $usuario["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/mvc_2/usuarios/delete/" . $usuario["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a> <a href='/mvc_2/usuarios/view/" . $usuario["id"] . "' class='btn btn-secondary btn-xs'><span class='glyphicon glyphicon-remove'></span> Ver</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>