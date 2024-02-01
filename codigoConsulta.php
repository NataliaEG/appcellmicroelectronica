<?php
include("conexion.php");

    
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigoCliente = $_POST['codigo'];

    $consulta = "SELECT cliente,estado, observacion FROM trabajos WHERE codigo = '$codigoCliente'";
    $resultado = mysqli_query($con, $consulta);
    $fila = mysqli_fetch_assoc($resultado);

    if ($fila && isset($fila['cliente'])) {
        $cliente = $fila['cliente'];
        $estado = $fila['estado'];
        $observacion = $fila['observacion'];



        $response = [
            'cliente' => $cliente,
            'estado' => $estado,
            'observacion' => $observacion
        ];
    } else {
        $response = [
            'mensaje' => 'El código ingresado es incorrecto.'
        ];
    }  
    header('Content-Type: application/json');
    echo json_encode($response);
}   
    mysqli_close($con);
?>
