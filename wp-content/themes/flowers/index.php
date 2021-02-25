<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1 class="hero-title">Эксклюзивные цветы и букеты flowers Shop</h1>
    <p class="hero-description">первая в россии эксклюзивная доставка цветов для людей, которые ценят <b>уникальность</b></p>

    <!-- Слайдер с цветами -->
    <div class="swiper-container flowers-slider">
      <!-- Обертка слайдов -->
      <div class="swiper-wrapper">
        <!-- Слайды -->
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-2.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-3.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-4.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-5.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-6.png" alt="rose" class="slide-image">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-3.png" alt="rose" class="slide-image">
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
        <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
          <div class="review-image d-flex align-items-center justify-content-center flex-column review-image-1">
            <span class="review-name">Алиса Иванова</span>
            <span class="review-city">г. Ноябрьск</span>
          </div>
          <div class="review-text">
            <p class="review">
              Я очень довольна таким отношением к делу. Обслужили просто превосходно, я заказывала по телефону — так подробно мне всё объяснили, помогли выбрать замечательный букет, и привезли всё вовремя, букет был очень красивый, он очень понравился, спасибо вам огромное.
            </p>
            <a href="javascript:;" id="review-1" class="review-link">Посмотреть фотографии букета</a>
          </div>
        </div>
        <!-- ./swiper-slide -->
        <div class="swiper-slide review-slide d-flex flex-column flex-md-row align-items-center">
          <div class="review-image d-flex align-items-center justify-content-center flex-column review-image-2">
            <span class="review-name">Алиса Иванова</span>
            <span class="review-city">г. Ноябрьск</span>
          </div>
          <div class="review-text">
            <p class="review">
              Я очень довольна таким отношением к делу. Обслужили просто превосходно, я заказывала по телефону — так подробно мне всё объяснили, помогли выбрать замечательный букет, и привезли всё вовремя, букет был очень красивый, он очень понравился, спасибо вам огромное.
            </p>
            <a href="#" class="review-link">Посмотреть фотографии букета</a>
          </div>
        </div>
        <!-- ./swiper-slide -->
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
          <img src="<?php echo get_template_directory_uri()?>/img/advantages/advantages-1.png" alt="Только прямые поставки цветов из Голландии" class="advantages-image">
        </div>
        <!-- /.advantage-wrapper -->
        <h3 class="advantages-title">Только прямые поставки цветов из&nbsp;Голландии</h3>
      </div>
      <!-- /.col -->
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="advantages-wrapper">
          <img src="<?php echo get_template_directory_uri()?>/img/advantages/advantages-2.png" alt="Наши флористы имеют 10 летний стаж работы" class="advantages-image">
        </div>
        <!-- /.advantages-wrapper -->
        <h3 class="advantages-title">Наши флористы имеют 10 летний стаж работы</h3>
      </div>
      <!-- /.col -->
      <div class="col-md-4 mb-5 mb-md-0">
        <div class="advantages-wrapper">
          <img src="<?php echo get_template_directory_uri()?>/img/advantages/advantages-3.png" alt="Все цветы вручную отбираются нашими флористами" class="advantages-image">
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
      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="rose-white"></label>
            <input class="color-input" type="radio" name="color" id="rose-white" value="white">

            <label class="color-label biege" for="rose-biege"></label>
            <input class="color-input" type="radio" name="color" id="rose-biege" value="biege">

            <label class="color-label pink" for="rose-pink"></label>
            <input class="color-input" type="radio" name="color" id="rose-pink" value="pink">

            <label class="color-label red" for="rose-red"></label>
            <input class="color-input" type="radio" name="color" id="rose-red" value="red">

            <label class="color-label blue" for="rose-blue"></label>
            <input class="color-input" type="radio" name="color" id="rose-blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
      <!-- /.col-lg-3 col-md-6 -->

      <div class="col-lg-3 col-md-6">
        <div class="card">
          <img src="<?php echo get_template_directory_uri()?>/img/flowers/flower-1.png" alt="rose" class="card-image">
          <h3 class="card-title">Розы</h3>
          <span class="card-label">Выберите цвет:</span>

          <div class="colors d-flex align-items-center justify-content-between">
            <label class="color-label white" for="white"></label>
            <input class="color-input" type="radio" name="color" id="white" value="white">

            <label class="color-label biege" for="biege"></label>
            <input class="color-input" type="radio" name="color" id="biege" value="biege">

            <label class="color-label pink" for="pink"></label>
            <input class="color-input" type="radio" name="color" id="pink" value="pink">

            <label class="color-label red" for="red"></label>
            <input class="color-input" type="radio" name="color" id="red" value="red">

            <label class="color-label blue" for="blue"></label>
            <input class="color-input" type="radio" name="color" id="blue" value="blue">
          </div>
          <!-- /.colors -->

          <span class="card-label">Количество:</span>

          <div class="counter-group d-flex justify-content-center align-items-center">
            <button class="counter-button">-</button>
            <input type="text" class="counter-input" value="1">
            <button class="counter-button">+</button>
          </div>
          <!-- /.counter-group -->

          <button class="button card-button">В корзину</button>

        </div>
        <!-- /.card -->
      </div>
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
    <a href="tel:+78006548745" class="offer-phone">8 (800) 654-87-45</a>
  </div>
  <!-- /.container -->
</section>

<?php get_footer() ?>