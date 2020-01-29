<?php
/*
    Template Name: Vélo
*/
get_header();
?>

<div class="main">

    <h1 class="bike__title text-center">
        <?php the_title();?>
    </h1>


    <?php if(have_posts()) :
        while (have_posts()) :
            the_post() ;?>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="bike__container">
                        <div class="bike__image" style="background-image: url(<?php the_post_thumbnail_url()?>);"></div>
                    </div>
                <?php endif ;?>

                <div class="bike__content">
                    <?php the_content();?>
                </div>
        <?php endwhile;
    endif ;?>

</div> <!-- Fin de la div main -->



<?php get_footer();?>

