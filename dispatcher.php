<?php

class Dispatcher
{

    private $request;

    public function dispatch() 
    {
        $this->request = new Request(); //Crea un object
        Router::parse($this->request->url, $this->request); //rellena el objeto request con el controlador y accion solicitados asi como los posibles parámetros

        $controllers= array(
            'comentarios'=>['index','create','edit','delete','error','view'],
            'usuarios'=>['index','create','edit','delete','error','view'],
            'posts'=>['index','error','delete']
            ); //controladores que se pueden pedir
        
        if (array_key_exists($this->request->controller, $controllers)) {

            if (in_array($this->request->action, $controllers[$this->request->controller])) { // si la action esta en el array pues sigue palante
                $controller = $this->loadController(); 

                call_user_func_array([$controller, $this->request->action], $this->request->params); //LLama a la accion y al controlador

            }else{ // Que la accion no esté
                $this->request->controller = "comentarios";
                $controller = $this->loadController();
                call_user_func_array([$controller,"error"], array('<strong>ERROR:</strong> la acción no existe'));
            }
            
        }else{ // Que no existe el controlador
            $this->request->controller = "comentarios";
            $controller = $this->loadController();
            call_user_func_array([$controller,"error"], array('<strong>ERROR:</strong> el controlador no existe'));
        }        
    }

    public function loadController()
    {
        $name = $this->request->controller . "Controller";
        $file = ROOT . 'Controllers/' . $name . '.php';
        require($file);
        $controller = new $name(); //Instancia del controlador
        return $controller; //Devuelvo el objeto
    }

}
?>