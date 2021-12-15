<?php

class comentariosController extends Controller
{
    function index() //Controlador 1
    {
        require(ROOT . 'Models/ModeloComentarios.php'); //Ruta absoluta

        $comentarios = new Comentarios();

        $d['comentarios'] = $comentarios->showAllComentarios(); //Dame todas las tareas
        $this->set($d); // 
        $this->render("index"); // se lo paso a la vista


    }

    function create() //Controlador 2
    {        
            require(ROOT . 'Models/ModeloUsuarios.php');
            require(ROOT . 'Models/ModeloPosts.php');

            $usuarios = new Usuarios();

            $d['usuarios'] = $usuarios->showAllUsuarios();
            $this->set($d);


            $posts = new Posts();
            $d['posts'] = $posts->showAllPosts();
            $this->set($d);


        if (isset($_POST["user_id"], $_POST["post_id"],$_POST["body"]))
        {
            require(ROOT . 'Models/ModeloComentarios.php');
            $comentarios= new Comentarios();

            if ($comentarios->create( $_POST["user_id"], $_POST["post_id"],$_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index"); // redirige a la pagina principal
            }
        }

        $this->render("create");
    }

    function edit($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloComentarios.php');
        $comentarios= new Comentarios();

        $d["comentarios"] = $comentarios->showComentario($id);

        if (isset($_POST["body"]))
        {
            if ($comentarios->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function view($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloComentarios.php');
        $comentarios= new Comentarios();

        $d["comentarios"] = $comentarios->showComentario($id);

        if (isset($_POST["body"]))
        {
            if ($comentarios->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index");
            }
        }
        $this->set($d);
        $this->render("view");
    }

    function delete($id) 
    {
        require(ROOT . 'Models/ModeloComentarios.php');

        $comentarios = new Comentarios();
        if ($comentarios->delete($id))
        {
            header("Location: " . WEBROOT . "comentarios/index");
        }
    }

    function error($m) //Controlador 1
    {
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>