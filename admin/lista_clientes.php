<?php
include("../conexion.php");

$consulta = "SELECT numero, cliente, telefono, codigo, modelo, falla, observacion, fecha_ingreso, fecha_entrega, precio, imei, estado FROM trabajos";
$resultado = mysqli_query($con, $consulta);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $response = [];
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $numero = $fila['numero'];
        $cliente = $fila['cliente'];
        $telefono = $fila['telefono'];
        $codigo = $fila['codigo'];
        $modelo = $fila['modelo'];
        $falla = $fila['falla'];
        $observacion = $fila['observacion'];
        $fecha_ingreso = $fila['fecha_ingreso'];
        $fecha_entrega = $fila['fecha_entrega'];
        $precio = $fila['precio'];
        $imei = $fila['imei'];
        $estado = $fila['estado'];

        $response[] = [
            'numero' => $numero,
            'cliente' => $cliente,
            'telefono' => $telefono,
            'codigo' => $codigo,
            'modelo' => $modelo,
            'falla' => $falla,
            'observacion' => $observacion,
            'fecha_ingreso' => $fecha_ingreso,
            'fecha_entrega' => $fecha_entrega,
            'precio' => $precio,
            'imei' => $imei,
            'estado' => $estado
        ];
    }
} else {
    $response = [
        'mensaje' => 'Error: No se pueden cargar los datos'
    ];
}

mysqli_close($con);

header('Content-Type: application/json');
echo json_encode($response);
?>
