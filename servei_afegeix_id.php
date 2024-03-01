<?php

require_once('http://192.168.56.11/wordpress');

if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $name = $_POST['name'];
    $description = $_POST['description'];

    $post_id = wp_insert_post(array(
        'post_title' => $name,
        'post_content' => $description,
        'post_status' => 'publish',
        'post_type' => 'product' 
    ));
    header("Location: index.php#portfolio");
    exit;
}
?>
