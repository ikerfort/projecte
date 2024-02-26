<?php

include('connexio_woo.php') 

$result = $woocommerce->delete("products/$product_id", ['force' => true]);

if ($result) {
    echo "Producto eliminado con éxito.";
} else {
    echo "Error al eliminar el producto.";
}
else {
// Formulario para seleccionar un producto
echo "<form method='post' action='servei_esborrar.php'>";

echo "Selecciona un producto:";
echo "<select name='product_id' required>";

$products = $woocommerce->get('products');
foreach ($products as $product) {
    echo "<option value='$product->id'>$product->name</option>";
}

echo "</select>";

echo "<input type='submit' value='Eliminar'>";

echo "</form>";
}
?>