<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<title>Обратная связь</title>
</head>

<body>
	<?php require "blocks/header.php" ?>

	<div class="container mt-4">
		<h1>Обратная связь</h1>
		<form action="check.php" method="post">
			<input type="email" name="email" placeholder="Введите адрес электронной почты" value="<?php echo $_COOKIE['email']?>" class="form-control"></input>
			<br><textarea name="message" class="form-control" placeholder="Введите Ваше сообщение"></textarea></br>
			<button type="submit" name="button" class="btn btn-success">Отправить</button>
		</form>
	</div>

	<?php require "blocks/footer.php" ?>
</body>
</html>
