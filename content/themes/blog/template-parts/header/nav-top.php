<!-- Top nav -->
<nav class="main__nav navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo home_url() ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="main__nav__ul navbar-nav ml-auto mr-auto">
            <?php 
                $args_main_nav = [
                    'container' => false,
                    'items_wrap' => '%3$s',
                    'theme_location' => 'main-nav'
                ];
                echo strip_tags(wp_nav_menu($args_main_nav), '<a>');
            ?>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">A propos de moi</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Mes vélos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Articles</a>
            </li> -->
        </ul>

        <?php get_search_form(); ?>
    </div>
</nav> 
<!-- Fin top nav -->