<?php 
include "../conexion.php";

if (isset($_POST['zona']) && isset($_POST['xini']) && isset($_POST['yini']) && isset($_POST['xfin']) && isset($_POST['yfin']) && isset($_POST['ciDuenio'])) {
    $zona = mysqli_real_escape_string($conn, $_POST['zona']);
    $distrito = mysqli_real_escape_string($conn, $_POST['distrito']);
    $superficie = mysqli_real_escape_string($conn, $_POST['superficie']);
    $xini = mysqli_real_escape_string($conn, $_POST['xini']);
    $yini = mysqli_real_escape_string($conn, $_POST['yini']);
    $xfin = mysqli_real_escape_string($conn, $_POST['xfin']);
    $yfin = mysqli_real_escape_string($conn, $_POST['yfin']);
    $ciDuenio = mysqli_real_escape_string($conn, $_POST['ciDuenio']);
    $codCatastro = mysqli_real_escape_string($conn, $_POST['cod']);

    $sql_verificar_persona = "SELECT * FROM persona WHERE ci = '$ciDuenio' AND rol = 'duenio'";
    $resultado_persona = mysqli_query($conn, $sql_verificar_persona);

    if (mysqli_num_rows($resultado_persona) > 0) {
        if (true) {
            $sql = "INSERT INTO catastro (id, zona, distrito, superficie, xini, yini, xfin, yfin, ciDuenio) 
                    VALUES ('$codCatastro','$zona', '$distrito', '$superficie', '$xini', '$yini', '$xfin', '$yfin', '$ciDuenio')";
            if (mysqli_query($conn, $sql)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error al insertar el catastro: " . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Ya existe un registro de propiedad con este CI.'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('El CI no está registrado como dueño.'); window.location.href='index.php';</script>";
        exit();
    }
}
?>
