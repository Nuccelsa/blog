<?php
/*
    Template Name: Bikes
*/
get_header();
?>

<div class="main">
    <div class="d-flex">
        <div class="row">
            <?php if (have_rows('contenu_bikes')) :
                while (have_rows('contenu_bikes')) :
                    the_row();  ?>
                        <div class="col-sm-12 col-lg-6">
                            <div class="bikes race">
                                <h1 class="bikes__title text-center">
                                    <a href="<?php echo get_permalink('38'); ?>" class="bikes__title__link">Mon vélo de course</a>
                                </h1>
                                <?php if (get_sub_field('photo-race_bikes')) : ?>
                                    <div class="bikes__shape">
                                        <img class= "bikes__img" src="<?php the_sub_field('photo-race_bikes');?>" alt="">
                                    </div>
                                <?php endif;?>

                                <?php if (get_sub_field('text-race_bikes')) : ?>
                                    <div class="bikes__content">
                                        <?php the_sub_field('text-race_bikes');?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="bikes gravel">
                                <h1 class="bikes__title text-center">
                                    <a href="<?php echo get_permalink('40'); ?>" class="bikes__title__link">Mon vélo gravel</a>
                                </h1>
                                <?php if (get_sub_field('photo-gravel_bikes')) : ?>
                                    <div class="bikes__shape">
                                        <img class= "bikes__img" src="<?php the_sub_field('photo-gravel_bikes');?>" alt="">
                                    </div>
                                <?php endif;?>

                                <?php if (get_sub_field('text-gravel_bikes')) : ?>
                                    <div class="bikes__content">
                                        <?php the_sub_field('text-gravel_bikes');?>
                                    </div>
                                <?php endif;?>
                            </div>
                        </div>
                <?php endwhile;
            endif ;?>
        </div>
    </div>


</div> <!-- Fin de la div container -->



<?php get_footer();?>

