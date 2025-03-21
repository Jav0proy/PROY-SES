
<?php
#session_start();
#ob_start();
include('funciones.php');
$rfc=valida_usuario();
$usuario_nombre=nombre_usuario($rfc);
$operadora_usuario=operadora_usuario($rfc);
$puesto_usuario=puesto_usuario($rfc);
$num_empleado=num_usuario($rfc);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="estilos.css">-->
    <title>Preguntas</title>
</head>
<body>
    <div>
        <h1>Entrevista de salida</h1>
        <h3>Informacion general</h3>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>Num empleado</th>
                <th>Nombre</th>
                <th>Operadora</th>
                <th>Puesto</th>
                
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $num_empleado; ?></td>
                <td><?php echo $usuario_nombre; ?></td>
                <td><?php echo $operadora_usuario; ?></td>
                <td><?php echo $puesto_usuario; ?></td>
            </tr>
            </tbody>
    </table>

</body>
</html>

