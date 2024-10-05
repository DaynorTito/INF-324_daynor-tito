<?php
include "../dos/conexion.php";

$codCatastro = isset($_GET['codCatastro']) ? $_GET['codCatastro'] : null;
$rol = isset($_GET['rol']) ? $_GET['rol'] : null;

if ($codCatastro !== null) {
    echo "<form id='redirectForm' action='http://localhost:56114/Default.aspx?rol=$rol' method='POST'>";
    echo "<input type='hidden' name='codCatastro' value='" .$codCatastro. "'>";
    echo "</form>";
    echo "<script type='text/javascript'>document.getElementById('redirectForm').submit();</script>";
    exit();
} else {
    header("Location: ../dos/catastro/index.php?rol=" . urlencode($rol));
    exit();
}
?>
