<?php
include('connexio_woo.php');

$products = $woocommerce->get('products');

    ?>
    <form action="servei_actualitzar.php" method="post">
        <label for="product_to_update">Selecciona el producte a modificar:</label>
        <select id="product_to_update" name="product_id">
            <?php
              foreach ($products as $product) {
                ?>
                <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
                <?php
              }
            ?>
        </select>

        <input type="submit" value="Seleccionar producte">
    </form>
    <?php


if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $product = $woocommerce->get('products/' . $product_id);
    
    ?>
    <form action="servei_actualitzar_id.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">

        <label for="product_name">Nom del producte:</label>
        <input type="text" id="product_name" name="product_name" value="<?php echo $product->name; ?>" required> <br><br>

        <label for="product_price">Preu del producte:</label>
        <input type="number" id="product_price" name="product_price" value="<?php echo $product->price; ?>" required> <br><br>

        <label for="product_description">Descripció del producte:</label>
        <input type="text" id="product_description" name="product_description" value="<?php echo $product->description; ?>" required><br><br>

        <!-- <label for="product_image">Imatge del producte:</label>
        <input type="file" id="product_image" name="product_image"><br><br> -->

        <input type="submit" value="Actualitzar producte">
    </form>
    <?php
} else {
    echo 'No s\'ha seleccionat cap producte per actualitzar.';
}
?>
