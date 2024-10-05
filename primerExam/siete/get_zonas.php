<?php
include "../dos/conexion.php";
$distrito = $_POST['distrito'];

$query = "SELECT nombre FROM zonas WHERE distrito = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $distrito);
$stmt->execute();
$result = $stmt->get_result();

$zonas = [];
while ($row = $result->fetch_assoc()) {
    $zonas[] = $row['nombre'];
}

$stmt->close();
$conn->close();

echo json_encode($zonas);
?>
