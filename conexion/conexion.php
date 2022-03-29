<?php

class Conexion extends Mysqli{
    public function __construct(){
        parent::__construct("localhost","root","","test");
        $this->set_charset('utf8');
        $this->connect_error == NULL ? "conexion establecida" : "error al conectarte";
    }
}

?>