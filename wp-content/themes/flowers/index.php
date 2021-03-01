<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1 class="hero-title"><?php the_field('main_title') ?></h1>
    <p class="hero-description"><?php the_field('main_subtitle') ?></p>

    <!-- Слайдер с цветами -->
    <div class="swiper-container flowers-slider">
      <!-- Обертка слайдов -->
      <div class="swiper-wrapper">
        <!-- Слайды -->
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-1.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-2.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-3.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-4.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-5.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-6.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri() ?>/img/flowers/flower-3.png" alt="rose" class="slide-image">
        </div>
      </div>

      <!-- Стрелки слайдера -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <!-- ./swiper-container -->

    <span class="hero-cta">Закажите эксклюзивный букет со скидкой 10%</span>

    <a data-fancybox data-src="#alert" href="javascript:;" class="button">Заказать букет</a>

  </div>
  <!-- /.container -->
</section>

<section class="reviews">
  <div class="container">
    <h2 class="section-title">Мы делаем лучшие букеты</h2>

    <!-- Слайдер с отзывами -->
    <div class="swiper-container reviews-slider">
      <!-- обертка слайдов -->
      <div class="swiper-wrapper">
        <!-- слайды -->
        <?php
        global $post;

        $query = new WP_Query([
          'posts_per_page' => 5,
          'post_type'      => 'reviews',
        ]);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
              <div class="review-image d-flex align-items-center justify-content-center flex-column">
                <?php the_post_thumbnail('small') ?>
                <span class="review-name"><?php the_title(); ?></span>
                <span class="review-city"><?php the_field('town') ?></span>
              </div>
              <div class="review-text">
                <p class="review">
                  <?php the_content(); ?>
                </p>
                <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии букета</a>
              </div>
            </div>
        <?php
          }
        } else {
          // Постов не найдено
        }

        wp_reset_postdata(); // Сбрасываем $post
        ?>

      </div>
      <!-- ./swiper-wrapper -->

      <!-- If we need navigation buttons -->
      <a class="swiper-button-prev"></a>
      <a class="swiper-button-next"></a>

    </div>
    <!-- ./swiper-container -->

  </div>
  <!-- /.container -->
</section>

<section class="advantages">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="advantages-wrapper">
          <img src="<?php the_field('advantages-img-1') ?>" alt="Только прямые поставки цветов из Голландии" class="advantages-image">

        </div>
        <!-- /.advantage-wrapper -->
        <h3 class="advantages-title"><?php the_field('advantages-1') ?></h3>
      </div>
      <!-- /.col -->
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="advantages-wrapper">
          <img src="<?php echo get_template_directory_uri() ?>/img/advantages/advantages-2.png" alt="Наши флористы имеют 10 летний стаж работы" class="advantages-image">
        </div>
        <!-- /.advantages-wrapper -->
        <h3 class="advantages-title">Наши флористы имеют 10 летний стаж работы</h3>
      </div>
      <!-- /.col -->
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="advantages-wrapper">
          <img src="<?php echo get_template_directory_uri() ?>/img/advantages/advantages-3.png" alt="Все цветы вручную отбираются нашими флористами" class="advantages-image">
        </div>
        <!-- /.advantages-wrapper -->
        <h3 class="advantages-title">Все цветы вручную отбираются нашими флористами</h3>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<section class="goods">
  <div class="container">
    <h2 class="section-title">Собери свой букет <span class="text-red">прямо сейчас!</span></h2>
    <p class="section-description">Выберите желаемые цветы и наши флористы их оформят и доставят лично в руки!</p>

    <div class="row">
      <?php
      global $post;

      $query = new WP_Query([
        'posts_per_page' => 8,
        'post_type'        => 'flowers',
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>
          <div class="col-lg-3 col-md-6">
            <form action="<?php echo admin_url('admin-ajax.php'); ?>" class="card">
              <input type="hidden" name="action" value="form">
              <input type="hidden" name="flower" value="<?php the_title(); ?>">
              <img src="<?php the_field('flower_image') ?>" alt="rose" class="card-image">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <span class="card-label">Выберите цвет:</span>

              <div class="colors d-flex align-items-center justify-content-between">

                <?php $colors = get_field('colors');
                foreach ($colors as $key => $value) {
                ?>
                  <label class="color-label <?php echo $value ?>" for="rose-<?php echo $value ?>"></label>
                  <input class="color-input" type="radio" name="color" id="rose-<?php echo $value ?>" value="<?php echo $value ?>">
                <?php
                }
                ?>
              </div>
              <!-- /.colors -->

              <span class="card-label">Количество:</span>

              <div class="counter-group d-flex justify-content-center align-items-center">
                <button class="counter-button counter-button-minus" type="button">-</button>
                <input type="text" name="counter" class="counter-input" value="1">
                <button class="counter-button counter-button-plus" type="button">+</button>
              </div>
              <!-- /.counter-group -->

              <button class="button card-button" type="submit">Оформить заказ</button>

            </form>
            <!-- /.card -->
          </div>
      <?php
        }
      } else {
        // Постов не найдено
      }

      wp_reset_postdata(); // Сбрасываем $post
      ?>

      <!-- /.col-lg-3 col-md-6 -->
    </div>
    <!-- /.row -->

    <a href="#" class="more">Все цветы</a>

  </div>
  <!-- /.container -->
</section>

<section class="offer">
  <div class="container">
    <h2 class="section-title offer-title">Остались вопросы?</h2>
    <a href="#" class="offer-link">Закажите звонок нашего флориста!</a>
    <span class="offer-label">или позвоните по телефону</span>
    <a href="tel:<?php the_field('phone') ?>" class="offer-phone"><?php the_field('phone') ?></a>
  </div>
  <!-- /.container -->
</section>

<?php get_footer() ?>