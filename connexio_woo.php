<?php
require __DIR__ .'/assets/vendor/autoload.php';
use Automattic\WooCommerce\Client;

$url_wordpress="http://192.168.56.11/wordpress";
$url_wordpress_rest=$url_wordpress.'/index.php';
$woocommerce = new Client(
    $url_wordpress_rest,
        'ck_8b015201e5699b7e966d9349d7766388cacf1811',
        'cs_fd8d74ba9d97414dca2933ac33e1a0da981579c2',
         [
            'wp_api' => true,
            'query_string_auth' => true,
            'timeout' => 400
         ]
);



?>