<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $habitantes = $_POST['habitantes'];
    $superficie = $_POST['superficie'];
    $tieneMetro = isset($_POST['tieneMetro']) ? 1 : 0;

    $link = mysqli_connect('localhost', 'usuario', 'contraseña', 'Capitales');
    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";
    mysqli_query($link, $sql);
    mysqli_close($link);
    echo "Ciudad agregada con éxito.";
}
?>
<form method="post">
    <label>Ciudad: <input type="text" name="ciudad" required></label><br>
    <label>País: <input type="text" name="pais" required></label><br>
    <label>Habitantes: <input type="number" name="habitantes" required></label><br>
    <label>Superficie: <input type="number" name="superficie" step="0.01" required></label><br>
    <label>Tiene Metro: <input type="checkbox" name="tieneMetro"></label><br>
    <button type="submit">Agregar</button>
</form>