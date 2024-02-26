<?php
include('connexio_woo.php');

$products = $woocommerce->get('products');

 

    ?>
    <form action="servei_actualitzar_id.php" method="post">
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
