<?php

require_once "conexion/conexion.php";

class Cliente{

    public static function getAll(){
        $db = new Conexion();
        $query = "select * from clientes";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = ['id'=>$row['id'],'nombre'=>$row['nombre'],'ap_paterno'=>$row['ap_paterno'],'ap_materno'=>$row['ap_materno'],'fecha'=>$row['fecha'],'genero'=>$row['genero']];
            }
        }
        return $datos;
    }

    public static function get($e){
        $db = new Conexion();
        $query = "select * from clientes where id= '$e' ";
        $resultado = $db->query($query);
        $datos = [];
        if ($resultado->num_rows) {
            while ($row = $resultado->fetch_assoc()) {
                $datos[] = ['id'=>$row['id'],'nombre'=>$row['nombre'],'ap_paterno'=>$row['ap_paterno'],'ap_materno'=>$row['ap_materno'],'fecha'=>$row['fecha'],'genero'=>$row['genero']];
            }
        }
        return $datos;
    }

    public static function insert($n,$ap,$am,$f,$g){
        $db = new Conexion();
        $query = "insert into clientes (nombre,ap_paterno,ap_materno,fecha,genero) values('$n','$ap','$am','$f','$g')";
        $resultado = $db->query($query);
        return $db->affected_rows;       
    }

    public static function update($id,$n,$ap,$am,$f,$g){
        $db = new Conexion();
        $query = "UPDATE clientes SET nombre='$n',ap_paterno='$ap',ap_materno='$am',fecha='$f',genero='$g' WHERE id = $id";
        $resultado = $db->query($query);
        return $db->affected_rows;       
    }

    public static function delete($id){
        $db = new Conexion();
        $query = "DELETE FROM clientes WHERE id = $id";
        $resultado = $db->query($query);
        return $db->affected_rows;       
    }

}