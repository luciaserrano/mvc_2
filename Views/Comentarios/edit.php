<h1>Editar comentario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Comentario</label>
        <input type="text" class="form-control" id="title" name="body" value ="<?php if (isset($comentarios["body"])) echo $comentarios["body"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar comentario</button>
</form>