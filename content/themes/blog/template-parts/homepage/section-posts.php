    <article class="last__posts__card" style="background-image:url(content/themes/blog/public/img/ex1.jpg);">
        <?php
            $field_title = get_field_object('couleur_titre');
            $color_title = $field_title['value'];
            $class_title = '';
            if($color_title === "Rouge") {
                $class_title = 'primary';
            }
            elseif($color_title === "Gris"){
                $class_title = 'text';
            }
            elseif($color_title === "Blanc"){
                $class_title = 'light';
            }
            elseif($color_title === "Noir"){
                $class_title = 'dark';
            }

            $field_quote = get_field_object('couleur_citation');
            $color_quote = $field_quote['value'];
            $class_quote = '';
            if($color_quote === "Rouge") {
                $class_quote = 'primary';
            }
            elseif($color_quote === "Gris"){
                $class_quote = 'text';
            }
            elseif($color_quote === "Blanc"){
                $class_quote = 'light';
            }
            elseif($color_quote === "Noir"){
                $class_quote = 'dark';
            }
        ?>
        <a href="<?php the_permalink(); ?>">
            <h2 class="last__posts__card__title color-<?php echo $class_title;?>">
                    <?php the_title();?>
            </h2>

            <?php if (get_field('phrase_citation')) :?>
                <div class="last__posts__card__content color-<?php echo $class_quote;?> ">
                    <?php the_field('phrase_citation'); ?>
                </div>
            <?php else : ?>
                <div class="last__posts__card__content">
                    <?php the_excerpt(); ?>
                </div>
            <?php endif;?>
        </a>

    </article>
    

