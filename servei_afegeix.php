<!DOCTYPE html>
<html>
<head>
    <title>Afegeix un producte</title>
</head>
<body>
    <h2>Afegeix un producte</h2>
    <form action="servei_afegeix_id.php" method="POST" enctype="multipart/form-data">
        <label for="name">Nom del producte:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="description">Descripció:</label><br>
        <textarea id="description" name="description"></textarea><br><br>
        <label for="image">Imatge:</label>
        <input type="file" id="image" name="image"><br><br>&nbsp;
        <input type="submit" value="Afegir producte">
    </form>
</body>
</html>

