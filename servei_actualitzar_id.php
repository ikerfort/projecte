<?php

// Verifica si s'han enviat dades del formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén les dades del formulari
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_id = $_POST["product_id"];

    // Pots afegir altres camps segons les teves necessitats

    // Verifica que les dades no siguin buides
    if (!empty($product_name) && !empty($product_price)) {
        // Inclou el fitxer de WooCommerce (ajusta la ruta si és necessari)
        include('connexio_woo.php');

        // Obté l'ID del producte que es vol actualitzar (ajusta la manera com obtens aquesta informació)
        $product_id = $_POST["product_id"];

        // Actualitza les dades del producte
      
        // Verifica si s'ha actualitzat correctament
        if ($updated) {
            // Redirigeix a la pàgina principal amb l'àncora #portfolio
            header("Location: index.php#portfolio");
            exit();
        } else {
            // Hi ha hagut un error en l'actualització
            echo "Error en l'actualització del producte.";
        }
    } else {
        // Algú dels camps està buit
        echo "Tots els camps són obligatoris.";
    }
} else {
    // La pàgina no s'ha cridat mitjançant un formulari POST, redirigeix a alguna altra pàgina o mostra un missatge d'error.
    echo "Accés no permès.";
}
?>
