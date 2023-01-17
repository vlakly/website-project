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
	<?php
	if($_COOKIE['admin'] != true) {
		echo "У вас отсутствует доступ к данной странице!";
		exit();
	}
	?>

	<?php require "blocks/header.php" ?>

	<div class="container mt-4">
		<h1>Текущие запросы</h1>

	<?php
		$email = $_COOKIE['email'];

		$mysql = new mysqli('localhost', 'root', 'root', 'service_requests');

		$result = $mysql->query("SELECT * FROM `user_requests`");

		$user_request = $result->fetch_all();

		if(count($user_request) == 0) {
			echo "Запросы отсутствуют";
			exit();
		}

		$mysql->close();

		$overall_count = count($user_request);

		$buffer = [];
		for($i = 0; $i < $overall_count; $i++) {
			$buffer[0 + 6 * $i] = $user_request[$i][0];
			$buffer[1 + 6 * $i] = $user_request[$i][1];
			$buffer[2 + 6 * $i] = $user_request[$i][2];
			$buffer[3 + 6 * $i] = $user_request[$i][3];
			$buffer[4 + 6 * $i] = $user_request[$i][4];
		}
	?>
		<div class="row">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Почта</th>
						<th scope="col">Номер телефона</th>
						<th scope="col">Тип запроса</th>
						<th scope="col">Текст запроса</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
							for($i = 0; $i < $overall_count; $i++):
						?>
						<th scope="row"><?php echo $buffer[0 + 6 * $i]?></th>
							<td><?php echo $buffer[1 + 6 * $i]?></td>
							<td><?php echo $buffer[2 + 6 * $i]?></td>
							<td><?php echo $buffer[3 + 6 * $i]?></td>
							<td><?php echo $buffer[4 + 6 * $i]?></td>
					</tr>
					<?php endfor; ?>
				</tbody>
			</table>
		</div>
	</div>

  <?php require "blocks/footer.php" ?>
</body>
</html>
