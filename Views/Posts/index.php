
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <h1>Listado de Posts</h1>
        <tr>
            <th>#</th>
            <th>Título</th>
            <th class="text-center">Acciones</th>
        </tr>
        </thead>
        <?php
        foreach ($posts as $post)
        {
            echo '<tr>';
            echo "<td>" . $post['id'] . "</td>";
            echo "<td>" . $post['title'] . "</td>";
            echo "<td class='text-center'><a href='/mvc_2/posts/delete/" . $post["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Eliminar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>