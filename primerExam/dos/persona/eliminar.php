<?php 
include "../conexion.php";

if (isset($_GET["ci"])) {
    $ci = mysqli_real_escape_string($conn, $_GET["ci"]);
    $sql = "DELETE FROM persona WHERE ci = '$ci'";
    mysqli_query($conn, $sql);
}

header("Location: index.php");
exit();
?>
