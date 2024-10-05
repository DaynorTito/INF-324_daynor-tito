<?php
include "../dos/conexion.php";

$query = "SELECT DISTINCT nombre FROM distritos";
$result = $conn->query($query);

$distritos = [];
while ($row = $result->fetch_assoc()) {
    $distritos[] = $row['nombre'];
}

$conn->close();

echo json_encode($distritos);
?>
