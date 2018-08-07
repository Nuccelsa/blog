<?php get_header(); ?>

<?php get_template_part('template-parts/homepage/section', 'slider-mobile');?>

<div class="main">

    <!-- Slider -->
    <?php get_template_part('template-parts/homepage/section', 'slider');?>

    <!-- Articles -->
    <section class="content">
        <h2 class="content__title">Derniers articles</h2>
        <div class="last__posts d-flex flex-wrap">

        <?php
            // Arguments pour la requête visant à récupérer les derniers articles
            $arg_query_posts = [
                'post_type' => 'post',
                'post_per_page' => 8,
                'order' => 'DESC'
            ];
            // Custom loop
            $query_posts = new WP_Query($arg_query_posts);
            if($query_posts->have_posts()) {
                while ($query_posts->have_posts()) {
                    $query_posts->the_post();
                    get_template_part('template-parts/homepage/section', 'posts');
                }
                wp_reset_postdata();
            }
        ?>
        
        </div>
    </section> 
    <!-- Fin articles -->


<?php get_footer(); ?>
