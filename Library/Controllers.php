<?php 
    class Controllers {
        function __construct() {
            // creamos una instancia de la Views para
            // poder accerder al metodo render
            $this->view = new Views();
            $this->loadClassModels();
        }
    
    private function loadClassModels (){
        // obtenemos el nombre de la clase controladora
        //determinanod que el modelo perteneciente a este
        //controlador simpre debera tener al final la pa
        $model = get_class($this) . "Model";
        //creamos una cadena de texto con la ruta en la cual debe
        //existir la clase modelo perteneciente a dicho controlador
        $path = "Models/" . $model . ".php";
        if (file_exists($path)){//verificamos que existia el archivo
            require $path;//para poder requerirlo
            $this->model = new $model();
        }

    }
}