<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-4 bg-white border-bottom shadow-sm">
  <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
    <img src="img/logo.png" class="logo_img">
    <span class="fs-4">Рекламное агенство "Белая ворона"</span>
  </a>

  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
    <a class="p-3 text-dark" href="/send-request.php">Оставить заявку</a>
    <a class="p-3 text-dark" href="/send-data.php">Обратная связь</a>
  </nav>

  <?php if(empty($_COOKIE['username'])): ?>
  <a class="btn btn-outline-primary" href="/registration.php">Войти</a>
  <?php else: ?>
  <a class="btn btn-outline-primary" href="/registration.php"><?=$_COOKIE['username']?></a>
  <?php endif;?>

</div>
