<!DOCTYPE html>
<html>
<head>
    <title>Afegeix un producte</title>
</head>
<body>
    <h2>Afegeix un producte</h2>
    <form action="servei_afegeix_id.php" method="POST">
        <label for="name">Nom del producte:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="description">Descripció:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <input type="submit" value="Afegir producte">
    </form>
</body>
</html>
