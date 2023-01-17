<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Оставить заявку</title>
</head>

<body>
	<?php require "blocks/header.php" ?>

	<div class="container mt-4">
    <div class="row">
      <h1>Форма заявки</h1>
      <form action="check-request.php" method="post">
				<input type="text" class="form-control" name="email" id="email" placeholder="Введите адрес электронной почты" value="<?php echo $_COOKIE['email']?>"><br>
        <input type="text" class="form-control" name="number" id="number" placeholder="Введите номер телефона"><br>
        <select class="form-select" size="1" name="service_type" id="service_type" required>
          <option value="" disabled selected hidden>Выберите услугу</option>
          <option value="create_site">Создание сайта</option>
          <option value="push_ad">Продвижение рекламы</option>
          <option value="context_ad">Контекстная реклама</option>
          <option value="support_consult">Поддержка и консультация</option>
        </select><br>
        <textarea type="text" class="form-control" name="request_text" id="request_text" placeholder="Содержание заявки"></textarea><br>
        <button class="btn btn-success" type="submit">Отправить заявку</button>
      </form>
    </div>
  </div>

	<?php require "blocks/footer.php" ?>
</body>
</html>
