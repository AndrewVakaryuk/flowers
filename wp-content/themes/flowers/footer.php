<footer class="footer">
  <div class="container footer-bg">
    <div class="row py-5">
      <div class="col-md-6 mb-5 mb-md-0">
        <nav>
          <ul class="footer-menu d-flex">
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Доставка</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-menu-link">Оплата</a>
            </li>
          </ul>
        </nav>
        <div class="social">
          Присоединяйтесь к нам:
          <a href="https://vk.com/" class="social-link">
            <img src="<?php echo get_template_directory_uri()?>/img/vk.png" alt="vk">
          </a>
        </div>
        <!-- /.social -->
      </div>
      <!-- /.col-md-6 -->
      <div class="col-md-6 footer-info">
        <span class="footer-label">Отдел обслуживания клиентов</span>
        <a href="tel:+78006548745" class="footer-phone">8 (800) 654-87-45</a>
        <span class="footer-label">Ежедневно, круглосуточно.</span>
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</footer>

<div class="modal" id="modal">
  <h2 class="modal-title">Закажите обратный звонок</h2>
  <form action="#">
    <input type="tel" class="modal-input" placeholder="+7 (___) __-__-___">
    <button class="button modal-button">Перезвоните мне</button>
  </form>
</div>

<div class="modal" id="alert">
  <h2 class="modal-title">Это демо-сайт</h2>
  <p class="modal-text">Некоторые функции этого сайта не работают. Я делаю ту часть, которая видна пользователю. Если сайт нужно сделать с серверной частью, я работаю в паре с бэкенд-разработчиком</p>
  <button class="button modal-button">Понятно</button>
</div>

<?php wp_footer() ?>

</body>

</html>