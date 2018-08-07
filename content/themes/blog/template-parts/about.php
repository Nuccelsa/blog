<?php
/*
    Template Name: A propos
*/
get_header();
?>

<div class="container">

    <section class="presentation">
        <h1 class="presentation__title">
            <?php the_title();?>
        </h1>

        <?php
            if (have_rows('contenu_about')) :
                while (have_rows('contenu_about')) :
                    the_row();  ?>
                        <div class="presentation__container">
                            <div class="paragraphe1">
                                <div class="row">
                                    <?php if (get_sub_field('image1_about')) : ?>
                                         <div class="paragraphe1__img col-sm-12 col-lg-5" style="background-image: url(<?php the_sub_field('image1_about');?>);"></div>
                                    <?php endif;?>
                                    <?php if (get_sub_field('paragraphe1_about')) : ?>
                                        <div class="paragraphe1__txt col-sm-12 col-lg-7">
                                            <?php the_sub_field('paragraphe1_about');?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="paragraphe2">
                                <div class="row">
                                    <?php if (get_sub_field('image2_about')) : ?>
                                        <div class="paragraphe2__img col-sm-12 col-lg-5" style="background-image: url(<?php the_sub_field('image2_about');?>);"></div>
                                    <?php endif;?>
                                    <?php if (get_sub_field('paragraphe2_about')) : ?>
                                        <div class="paragraphe1__txt col-sm-12 col-lg-7">
                                            <?php the_sub_field('paragraphe2_about');?>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>

                            <div class="paragraphe1">
                                    <div class="row">
                                        <?php if (get_field('image3_about')) : ?>
                                            <div class="paragraphe1__img col-sm-12 col-lg-5" style="background-image: url(<?php the_field('image3_about');?>);"></div>
                                        <?php endif;?>
                                        <?php if (get_sub_field('paragraphe3_about')) : ?>
                                            <div class="paragraphe1__txt col-sm-12 col-lg-7">
                                                <?php the_sub_field('paragraphe3_about');?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>

                                <div class="paragraphe2">
                                    <div class="row">
                                        <?php if (get_field('image2_about')) : ?>
                                            <div class="paragraphe4__img col-sm-12 col-lg-5" style="background-image: url(<?php the_field('image2_about');?>);"></div>
                                        <?php endif;?>
                                        <?php if (get_sub_field('paragraphe4_about')) : ?>
                                            <div class="paragraphe1__txt col-sm-12 col-lg-7">
                                                <?php the_sub_field('paragraphe4_about');?>
                                            </div>
                                        <?php endif;?>
                                    </div>
                                </div>

                            <div class="paragraphe3">Tous les articles sont écrits par moi. Relus et corrigés par Elsa Fredenucci.</div>
                        </div>
                <?php endwhile;
            endif;
        ?>



    </section>


</div> <!-- Fin du container -->

<?php get_footer();?>





