<?php
include('connexio_woo.php');

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    $product = $woocommerce->get('products/' . $product_id);
    
    ?>
    <form action="actualitzar_producte.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">

        <label for="product_name">Nom del producte:</label>
        <input type="text" id="product_name" name="product_name" value="<?php echo $product->name; ?>" required> <br><br>

        <label for="product_price">Preu del producte:</label>
        <input type="number" id="product_price" name="product_price" value="<?php echo $product->price; ?>" required> <br><br>

        <label for="product_description">Descripció del producte:</label>
        <input type="text" id="product_description" name="product_description" value="<?php echo $product->description; ?>" required>


        <br><br><input type="submit" value="Actualitzar producte">
    </form>
    <?php
} else {
    echo 'No s\'ha seleccionat cap producte per actualitzar.';
}
?>
