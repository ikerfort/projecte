<?php

require_once('connexio_woo.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $name = $_POST['name'];
    $description = $_POST['description'];
    $data = [
        'name' => $name,
        'price' => $price,
        'description' => $description,
    ];
    
    print_r($woocommerce->post('products', $data));
   
    header("Location: index.php#portfolio");
    exit;
}
?>

