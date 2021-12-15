<?php

class postsController extends Controller
{
    function index() //Controlador 1
    {
        require(ROOT . 'Models/ModeloPosts.php'); //Ruta absoluta

        $posts = new Posts();

        $d['posts'] = $posts->showAllPosts(); //Dame todas las tareas
        $this->set($d); // 
        $this->render("index"); // se lo paso a la vista
    }

    function delete($id) //Controlador 1
    {
        require(ROOT . 'Models/ModeloPosts.php');

        $task = new Posts();
        if ($task->delete($id))
        {
            header("Location: " . WEBROOT . "posts/index");
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