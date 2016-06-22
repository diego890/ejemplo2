<?php

date_default_timezone_set("America/Lima");
class Conexion_Model {

    public static function getConexion() {
    
        $conexion = @mysql_connect("diego9309.database.windows.net,1433","diego","17907660*+24D") or die("Conexion Fallida");
	@mysql_select_db("proceso",$conexion)or die("Error cargando la base de datos");    
        return $conexion;
    }

}
?>
