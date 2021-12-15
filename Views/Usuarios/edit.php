<h1>Editar usuario</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="title">Nombre</label>
        <input type="text" class="form-control" id="title" placeholder="Enter a title" name="name" value ="<?php if (isset($usuarios["name"])) echo $usuarios["name"];?>">
    </div>

    <div class="form-group">
        <label for="description">Correo</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="email" value ="<?php if (isset($usuarios["email"])) echo $usuarios["email"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar usuario</button>
    <div class ="form-group">
    <a href="/mvc_2/usuarios/index/"> Regresar al listado de usuarios</a>
</div>
</form>