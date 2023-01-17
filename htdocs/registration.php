<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Рекламное агенство</title>
</head>

<body>
	<?php require "blocks/header.php" ?>

	<div class="container mt-4">
    <?php
      if(empty($_COOKIE['username'])):
    ?>
    <div class="row">
      <div class="col">
        <h1>Форма регистрации</h1>
        <form action="check-registration.php" method="post">
					<input type="email" name="email" placeholder="Введите адрес электронной почты" class="form-control"></input><br>
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
          <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Регистрация</button>
        </form>
      </div>
      <div class="col">
        <h1>Форма авторизации</h1>
        <form action="check-authorization.php" method="post">
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="password" id="password" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Авторизация</bb utton>
        </form>
      </div>
    </div>
  <?php elseif ($_COOKIE['admin'] == true): ?>
    <p>Ваши заявки админа можно просмотреть <a href="get-requests-admin.php"> здесь</a>.</p>
		<p>Ваши заявки пользователя можно просмотреть <a href="get-requests.php"> здесь</a>.</p>
		<form action="exit.php">
			<button type="submit" class="w-100 btn btn-lg btn-outline-primary">Выйти</button>
		</form>
	<?php else: ?>
		<p>Ваши заявки пользователя можно просмотреть <a href="get-requests.php"> здесь</a>.</p>
		<form action="exit.php">
			<button type="submit" class="w-100 btn btn-lg btn-outline-primary">Выйти</button>
		</form>
  <?php endif;?>
  </div>

	<?php require "blocks/footer.php" ?>
</body>
</html>
