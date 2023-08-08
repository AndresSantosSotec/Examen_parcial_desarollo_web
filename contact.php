<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "conexion_be.php"; 

    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $motivo = $_POST["subject"];
    $mensaje = $_POST["message"];

    $insert_query = "INSERT INTO `bd_mensaje`(`Nombre`, `email`, `motivo`, `Mensaje`) VALUES ('$nombre', '$email', '$motivo', '$mensaje')";

    if (mysqli_query($conexion, $insert_query)) {
        echo '
        <script>
        alert("Los Datos Han sido Almacenados Correctamente");
        window.location="index.php";
        </script>';
    } else {
        echo '<script>
        alert("Ha ocurrido un error al almacenar los datos");
        window.location="index.php";
        </script> ' . mysqli_error($conexion);
    }

    mysqli_close($conexion); // Cierra la conexión
}
?>