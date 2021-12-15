<h1>Vista usuario <?php echo $usuarios['id'] ?></h1>
<div class="form-group">
    <p><b>Nombre del usuario:</b> <?php echo $usuarios['name'] ?> </p>
</div>
<div class="form-group">
    <p><b>Correo electrónico:</b> <?php echo $usuarios['email'] ?> </p>
</div>

<a href="/mvc_2/usuarios/index/"> Regresar al listado de usuarios</a>