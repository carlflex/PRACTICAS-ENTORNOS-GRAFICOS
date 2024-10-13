<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $link = mysqli_connect('localhost', 'usuario', 'contraseña', 'Capitales');
    $sql = "DELETE FROM Ciudades WHERE ID = $id";
    mysqli_query($link, $sql);
    mysqli_close($link);
    echo "Ciudad eliminada con éxito.";
}
?>
<form method="post">
    <label>ID de la ciudad a eliminar: <input type="number" name="id" required></label><br>
    <button type="submit">Eliminar</button>
</form>