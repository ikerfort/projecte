<?php
include('connexio_woo.php');
$products = $woocommerce->get('products');

    ?>
    <form action="servei_esborrar.php" method="post">
        <label for="product_to_update">Selecciona el producte a esborrar:</label>
        <select id="product_to_update" name="product_id">
            <?php
              foreach ($products as $product) {
                ?>
                <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
                <?php
              }
            ?>
        </select>

        <input type="submit" value="Esborrar producte">
    </form>
    </body>
</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];

   
    $result = $woocommerce->delete("products/$product_id", ['force' => true]);

    if ($result) {
        echo "Producto eliminado con éxito.";
        header("Location: index.php");
    } else {
        echo "Error al eliminar el producto.";
    }
}
?>
   