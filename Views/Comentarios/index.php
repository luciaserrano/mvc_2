
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <div class="col-md-6">
            <h1>Lista de Comentarios</h1>
        </div>

        <div class="col-md-6">
            <a href="/mvc_2/comentarios/create/" class="btn btn-primary btn-xs pull-right"> Nuevo Comentario</a>
        </div>
        
        <tr>
            <th>#</th>
            <th>Texto</th>
            <th>Post</th>
            <th class="text-center">Acciones</th>
        </tr>
        </thead>
        <?php
        foreach ($comentarios as $comentario)
        {
            echo '<tr>';
            echo "<td>" . $comentario['id'] . "</td>";
            echo "<td>" . $comentario['body'] . "</td>";
            echo "<td>" . $comentario['post_id'] . "</td>";
            echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvc_2/comentarios/edit/" . $comentario["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Editar</a> <a href='/mvc_2/comentarios/delete/" . $comentario["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Borrar</a> <a href='/mvc_2/comentarios/view/" . $comentario["id"] . "' class='btn btn-secondary'><span class='glyphicon glyphicon-remove'></span> Ver</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>