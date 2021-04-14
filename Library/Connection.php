<?php
    class Connection {
        function __construct(){
        //creamos una variable $db para instanciar a la clase PDOManager
        //y poder utilizar desde un detemrinado modelpo

        $this->db = new PDOManager("root", " ","db_contactos");
        }
    }