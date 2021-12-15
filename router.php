<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == WEBROOT)
        {
            $request->controller = "comentarios";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2); //Trocea la URL
            //var_dump($explode_url);
            if (count($explode_url)<2){  //Si es menor que 2 sale el error
                $request->controller = "comentarios";
                $request->action = "error";
                $request->params = ['<strong>ERROR:</strong> URL INVALIDA'];
            }else{
                $request->controller = $explode_url[0];
                $request->action = (null !== isset($explode_url[1])) ? $explode_url[1] : 'index'; // si esta definido y no es null devuelve $explode_url[1]
                $request->params = (null !== array_slice($explode_url, 2)) ? array_slice($explode_url, 2) : ''; // si esta definido y no es null devuelve array_slice($explode_url, 2)
                
                // controlar que faltan parametros en acciones editar y borrar
                if (($request->action == "delete" or $request->action == "edit") && (empty($request->params))){ // Si la accion es delete o edit y los parametros estan vacios ERROR
                    $request->controller = "comentarios";
                    $request->action = "error";
                    $request->params = ['<strong>ERROR:</strong> FALTAN PARAMETROS'];
                }
            }
        }

    }
}
?>