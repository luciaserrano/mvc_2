<?php
    class Controller
    {
        var $vars = [];
        var $layout = "default";

        function set($d)
        {
            $this->vars = array_merge($this->vars, $d);
        }

        function render($filename) //Extrae las variables
        {
            extract($this->vars);
            ob_start();     
            require(ROOT . "Views/" . ucfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php'); // vista 
            $content_for_layout = ob_get_clean(); // lo guardo aqui 

            if ($this->layout == false)
            {
                $content_for_layout; //codigo html que le inserta
            }
            else
            {
                require(ROOT . "Views/Layouts/" . $this->layout . '.php');
            }
        }

        private function secure_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        protected function secure_form($form)
        {
            foreach ($form as $key => $value)
            {
                $form[$key] = $this->secure_input($value);
            }
        }

    }
?>