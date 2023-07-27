<?php
include("../conexion.php");

$method = $_SERVER["REQUEST_METHOD"];

switch ($method) {
    case 'GET':
        if (!isset($_GET['numero'])) {
            // Obtener todos los registros
            $result = $con->query("SELECT * FROM trabajos");

            // Crear un array para almacenar los registros
            $elementos = array();

            // Iterar sobre cada fila de resultados y almacenar los campos en el array
            while ($row = $result->fetch_assoc()) {
                $elementos[] = $row;
            }

            // Devolver los campos en formato JSON
            echo json_encode($elementos);
        } else {
            // Obtener un registro en particular
            //numero es el id
            $numero = intval($_GET['numero']);
            $result = $con->query("SELECT * FROM trabajos WHERE numero=$numero");

            // Crear un array para almacenar el registro
            $elementos = array();

            // Iterar sobre cada fila de resultados y almacenar los campos en el array
            while ($row = $result->fetch_assoc()) {
                $elementos[] = $row;
            }

            // Devolver los campos en formato JSON
            echo json_encode($elementos);
        }
        break;

    case 'POST':
        // Leer el cuerpo de la solicitud y decodificarlo como JSON
        $input = json_decode(file_get_contents('php://input'), true);

        $numero = $input["numero"];
        $cliente = $input["cliente"];
        $telefono = $input["telefono"];
        $codigo = $input["codigo"];
        $modelo = $input["modelo"];
        $falla = $input["falla"];
        $observacion = $input["observacion"];
        $fecha_ingreso = $input["fecha_ingreso"];
        $fecha_entrega = $input["fecha_entrega"];
        $precio = $input["precio"];
        $imei = $input["imei"];
        $estado = $input["estado"];

        // Actualizar registros
        $sql = "UPDATE trabajos SET cliente=?, telefono=?, codigo=?, modelo=?, falla=?, observacion=?, fecha_ingreso=?, fecha_entrega=?, precio=?, imei=?, estado=? WHERE numero=?";
        $query = $con->prepare($sql);
        $query->bind_param("sssssssssssi", $cliente, $telefono, $codigo, $modelo, $falla, $observacion, $fecha_ingreso, $fecha_entrega, $precio, $imei, $estado, $numero);
        $query->execute();

        // Devolver un código de estado de éxito
        $data = array("estado" => true);
        echo json_encode($data);
        break;

    default:
        // Manejar otros métodos HTTP si es necesario
        break;
}

mysqli_close($con);
?>
