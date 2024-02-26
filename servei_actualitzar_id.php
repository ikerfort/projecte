<?php
include('connexio_woo.php');

// Verifiquem si s'ha enviat un identificador de producte
if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

    // Obtenim la informació del producte seleccionat
    $product = $woocommerce->get('products/' . $product_id);
    
    // Mostrem el formulari amb els paràmetres actuals del producte
    ?>
    <form action="actualitzar_producte.php" method="post">
        <input type="hidden" name="product_id" value="<?php echo $product->id; ?>">

        <label for="product_name">Nom del producte:</label>
        <input type="text" id="product_name" name="product_name" value="<?php echo $product->name; ?>" required>

        <label for="product_price">Preu del producte:</label>
        <input type="number" id="product_price" name="product_price" value="<?php echo $product->price; ?>" required>

        <!-- Afegiu altres paràmetres del producte aquí -->

        <input type="submit" value="Actualitzar producte">
    </form>
    <?php
} else {
    echo 'No s\'ha seleccionat cap producte per actualitzar.';
}
?>
