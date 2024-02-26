<?php
// Incloure la configuració de WordPress
require_once('wp-load.php');

// Comprovar si s'han enviat les dades del formulari
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtindre les dades del formulari
    $name = $_POST['name'];
    $description = $_POST['description'];

    // Insertar les dades a la base de dades de WordPress com a producte
    $post_id = wp_insert_post(array(
        'post_title' => $name,
        'post_content' => $description,
        'post_status' => 'publish',
        'post_type' => 'product' // Assumint que 'product' és el tipus de post per als productes
    ));

    // Redirigir a la pàgina d'inici de l'administració de WordPress
    header("Location: index.php#portfolio");
    exit;
}
?>
