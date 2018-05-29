<?php get_header(); ?>

      <!-- Slider -->
      <section class="banner">
    
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

            <div class="banner__slider carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="content/themes/blog/public/img/banner1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="content/themes/blog/public/img/banner2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="content/themes/blog/public/img/banner3.jpg" alt="Third slide">
              </div>

              <div class="carousel-caption">
                <h1 class="h1 banner__slider__title" style="z-index: 10;">Sur les routes de la vie</h1>
              </div>

              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

          </div>

      </section> <!-- Fin section banner -->

      <!-- Articles -->
      <section class="content">

        <h2 class="content__title">Derniers articles</h2>

        <div class="last__posts d-flex flex-wrap">

        <article class="last__posts__card" style="background-image:url(content/themes/blog/public/img/ex1.jpg);">
            <h2 class="last__posts__card__title">
                <a href="#">the_title</a>
            </h2>
            <div class="last__posts__card__content">
                <p>the_excerpt</p>
            </div>
        </article>
        <article class="last__posts__card" style="background-image:url(content/themes/blog/public/img/ex1.jpg);">
          <h2 class="last__posts__card__title">
              <a href="#">the_title</a>
          </h2>
          <div class="last__posts__card__content">
              <p>the_excerpt</p>
          </div>
        </article>
        <article class="last__posts__card" style="background-image:url(content/themes/blog/public/img/ex1.jpg);">
          <h2 class="last__posts__card__title">
              <a href="#">the_title</a>
          </h2>
          <div class="last__posts__card__content">
              <p>the_excerpt</p>
          </div>
        </article>
        <article class="last__posts__card" style="background-image:url(content/themes/blog/public/img/ex1.jpg);">
          <h2 class="last__posts__card__title">
              <a href="#">the_title</a>
          </h2>
          <div class="last__posts__card__content">
              <p>the_excerpt</p>
          </div>
        </article>

      </div>
      </section> <!-- Fin articles -->

<?php get_footer(); ?>
