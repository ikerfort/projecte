<!-- ======= Portfolio Section ======= -->
<section id="producte" class="portfolio">


    <!-- <section id="portfolio" class="portfolio"> -->
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Productes</h2>
            <p>Aquí trobaràs una selecció de productes escollits meticulosament per el millor preu i la millor qualitat. </p>
        </div>

        <!-- bucle categories -->
        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <li data-filter='*' class='filter-active'>Tots</li> 
            <?php

    $categories = $woocommerce->get('products/categories'); 


    foreach ($categories as $category) {
      echo "<li data-filter='.filter-" . $category->slug . "'>" . $category->name . "</li>";
    }
    ?>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php

    $products = $woocommerce->get('products');

    foreach ($products as $product) {
        $product_name = $product->name;
        $product_image = $product->images[0]->src;
        $product_permalink = $product->permalink;

        $product_categories = [];
        foreach ($product->categories as $category) {
            $product_categories[] = $category->slug;
        }

        echo "<div class='col-lg-4 col-md-6 portfolio-item";
        foreach ($product_categories as $category_slug) {
            echo " filter-$category_slug";
        }
        echo "'>";
        echo "<div class='portfolio-img'><img src='$product_image' class='img-fluid' alt=''></div>";
        echo "<div class='portfolio-info'>";
        echo "<h4>$product_name</h4>";
        echo "<p>";
        foreach ($product_categories as $category_slug) {
            echo "$category_slug ";
        }
        echo "</p>";
        echo "<a href='$product_image' data-gallery='portfolioGallery' class='portfolio-lightbox preview-link' title='$product_name'><i class='bx bx-plus'></i></a>";
        echo "<a href='$product_permalink' class='details-link' title='More Details'><i class='bx bx-link'></i></a>";
        echo "</div>";
        echo "</div>";
    }
    ?>

        </div>

    </div>
</section>