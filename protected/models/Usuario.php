<?php


class Usuario extends CFormModel {
   
    public $id;
    public $nombre;
    public $descripcion;
    
    public function obtenerPermiso($nombre) {
        
        $sql = "CALL obtener_permiso_usuario(:nombre)";
        $comando = Yii::app()->db->createCommand($sql);
        $comando->bindValue('nombre', $nombre);
        return $comando->queryAll();
//        $comando->bindParam(':nombre', $nombre);
    //    $comando->execute();
       
    }
}
