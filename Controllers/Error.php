<?php
    class Errors extends Controllers{
        function error(){
            //utilizaremos la variables $view lo cual es la instancia
            //nuestra clase Views creada dentro de la clase controllers
            //por ellos tenemos acceso a esta, ya que estamos heredando
            // de la clase controllers
            $this->view->render($this,"Error404");
        }
    }