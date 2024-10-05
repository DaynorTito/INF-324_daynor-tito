<?php 
include "../conexion.php";

if (isset($_POST['id']) && isset($_POST['zona']) && isset($_POST['xini']) && isset($_POST['yini']) && isset($_POST['xfin']) && isset($_POST['yfin']) && isset($_POST['ciDuenio'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $zona = mysqli_real_escape_string($conn, $_POST['zona']);
    $distrito = mysqli_real_escape_string($conn, $_POST['distrito']);
    $superficie = mysqli_real_escape_string($conn, $_POST['superficie']);
    $xini = mysqli_real_escape_string($conn, $_POST['xini']);
    $yini = mysqli_real_escape_string($conn, $_POST['yini']);
    $xfin = mysqli_real_escape_string($conn, $_POST['xfin']);
    $yfin = mysqli_real_escape_string($conn, $_POST['yfin']);
    $ciDuenio = mysqli_real_escape_string($conn, $_POST['ciDuenio']);

    $sql = "UPDATE catastro SET zona='$zona', distrito='$distrito', superficie='$superficie', xini='$xini', yini='$yini', xfin='$xfin', yfin='$yfin', ciDuenio='$ciDuenio' WHERE id='$id'";
    mysqli_query($conn, $sql);
}

header("Location: index.php");
exit();
?>
