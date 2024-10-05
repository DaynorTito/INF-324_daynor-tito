<?php 
include "../conexion.php";

if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($conn, $_GET["id"]);
    $sql = "DELETE FROM catastro WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

header("Location: index.php");
exit();
?>
