<?php

date_default_timezone_set("America/Lima");
class Conexion_Model {

    public static function getConexion() {
    
        $conexion = @mysql_connect("eu-cdbr-azure-north-e.cloudapp.net","bb3f6484d31761","63fc0c61") or die("Conexion Fallida");
	@mysql_select_db("proceso",$conexion)or die("Error cargando la base de datos");    
        return $conexion;
    }

}
?>
