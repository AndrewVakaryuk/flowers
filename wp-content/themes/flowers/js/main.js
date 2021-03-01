$(document).ready(function () {
    const flowersSlider = new Swiper('.flowers-slider', {
    // параметры слайдера
    loop: true,
    slidesPerView: 6,

    // Подключаем стрелки
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // настройки адаптивной версии
    breakpoints: {
      // если браузер >= 320px
      320: {
        slidesPerView: 2,
      },
      // если браузер >= 480px
      480: {
        slidesPerView: 3,
      },
      // when window width is >= 992px
      992: {
        slidesPerView: 6,
      }
    }
    
  });
  const reviewsSlider = new Swiper('.reviews-slider', {
    // параметры слайдера
    loop: true,
    slidesPerView: 1,

    // Подключаем стрелки
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
  
  var counterButtonPlus = $('.counter-button-plus');
  var counterButtonMinus = $('.counter-button-minus');
  var counter = 1;

  counterButtonPlus.on('click', function () {
    if (counter < 10) {
      counter++;
      $(this).parent().find('input').val(counter);
    }
  });

  counterButtonMinus.on('click', function () {
    if (counter > 1) {
      counter--;
      $(this).parent().find('input').val(counter);
    }
  });

  $('.card').on('submit', function (event) {
    event.preventDefault();
    $.ajax({
      type: "POST",
      url: $(this).attr('action'),
      data: $(this).serialize(),
      success: function (response) {
        $.fancybox.open('<div class="message"><h2>Order is confirmed!</h2><p>You are awesome!</p></div>');
      }
    });
  });

});