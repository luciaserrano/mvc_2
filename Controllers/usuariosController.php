<?php

class usuariosController extends Controller
{
    function index() //Controlador 1
    {
        require(ROOT . 'Models/ModeloUsuarios.php'); //Ruta absoluta

        $usuario = new Usuarios();

        $d['usuarios'] = $usuario->showAllUsuarios(); //Dame todas las tareas
        $this->set($d); // 
        $this->render("index"); // se lo paso a la vista
    }

    function create() //Controlador 2
    {
        if (isset($_POST["nombre"])) //Si el campo está vacío
        {
            require(ROOT . 'Models/ModeloUsuarios.php');

            $usuario= new Usuarios();

            if ($usuario->create($_POST["nombre"], $_POST["email"], $_POST["password"]))
            {
                header("Location: " . WEBROOT . "usuarios/index"); // redirige a la pagina principal
            }
        }

        $this->render("create");
    }

    function edit($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloUsuarios.php');
        $usuario= new Usuarios();

        $d["usuarios"] = $usuario->showUsuarios($id);

        if (isset($_POST["name"]))
        {
            if ($usuario->edit($id,$_POST["name"], $_POST["email"]))
            {
                header("Location: " . WEBROOT . "usuarios/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloUsuarios.php');

        $task = new Usuarios();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "usuarios/index");
        }
    }

    function error($m) //Controlador 1
    {
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }

    function view($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloUsuarios.php'); //Ruta absoluta

        $usuario = new Usuarios();

        $d['usuarios'] = $usuario->showUsuarios($id); //Dame todas las tareas
        $this->set($d); // 
        $this->render("view"); // se lo paso a la vista
    }
}

?>