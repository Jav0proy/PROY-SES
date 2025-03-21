<?php
function conecta_reloj(){
		$hostname = "reloj.corprama.com.mx";
        $database= "reloj_checador";
		$username = "reloj_admin";
		$password = "reloj_admin";
		$conexion = mysql_connect($hostname, $username, $password);	
		mysql_select_db($database,$conexion) or die('No pudo seleccionarse la BD.');
        return($conexion);
}

function valida_usuario(){
    $conexion = conecta_reloj();
    
	$rfc = @$_POST["rfc"];

    $sSql = "SELECT * FROM `tbEmpleados`
    WHERE `rfc` = '" . $rfc . "'
    AND `status` = 'A'";

    $rs = mysql_query($sSql,$conexion) or die(mysql_error());
    $row = mysql_fetch_assoc($rs);
    $filas = mysql_num_rows($rs);
    $rfc = $row["rfc"];
    mysql_close($conexion);
    return($rfc);
}


function nombre_usuario($rfc){
    $conexion = conecta_reloj();
    $query = "SELECT concat_ws(' ',nombre,ap_paterno,ap_materno) as nombre
    FROM `tbEmpleados`
    WHERE `rfc` = '" . $rfc . "'
    AND `status` = 'A'";
    $RS = mysql_query($query, $conexion) or die(mysql_error());
	$row_RS = mysql_fetch_assoc($RS);
	$usuario_nombre=$row_RS[nombre];
	mysql_close($conexion);
	return($usuario_nombre);
}

function operadora_usuario($rfc){
    $conexion = conecta_reloj();
	$query = "SELECT operadora
		FROM  tbEmpleados
		WHERE rfc = '".$rfc."'
        AND status = 'A'
        ";
	#echo $query."<br>";
	$RS = mysql_query($query, $conexion) or die (mysql_error());
    $row_RS = mysql_fetch_assoc($RS);
    $operadora=$row_RS[operadora];
	return($operadora);
}
function puesto_usuario($rfc){
    $conexion = conecta_reloj();
	$query = "SELECT puesto
		FROM  tbEmpleados
		WHERE rfc = '".$rfc."'
        AND status = 'A'
        ";
	#echo $query."<br>";
	$RS = mysql_query($query, $conexion) or die (mysql_error());
    $row_RS = mysql_fetch_assoc($RS);
    $puesto=$row_RS[puesto];
	return($puesto);
}

function num_usuario($rfc){
    $conexion = conecta_reloj();
	$query = "SELECT id_num_empleado
		FROM  tbEmpleados
		WHERE rfc = '".$rfc."'
        AND status = 'A'
        ";
	#echo $query."<br>";
	$RS = mysql_query($query, $conexion) or die (mysql_error());
    $row_RS = mysql_fetch_assoc($RS);
    $num_empleado=$row_RS[id_num_empleado];
	return($num_empleado);
}

?>
