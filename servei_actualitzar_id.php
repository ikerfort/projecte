<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_id = $_POST["product_id"];
    $product_description = $_POST["product_description"];
    // $product_image = $_POST["product_image"];
.
    if (!empty($product_name) && !empty($product_price)) {
        include('connexio_woo.php');

        
        $data = [
            'regular_price' => $product_price,
        ];
        
        print_r($woocommerce->put('products/'.$product_id, $data));
        

        /* if ($updated) {
            header("Location: index.php#portfolio");
            exit();
        } else {
            echo "Error en l'actualització del producte.";
        } */
    } else {
        echo "Tots els camps són obligatoris.";
    }
} else {
    
    echo "Accés no permès.";
}
?>
