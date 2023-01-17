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

	<div class="container mt-5">
		<div class="row">
			<h3 class="mb-5" align="center">Наша компания</h3>
			<div class="col" align="center">
				<img src="img/index2.png" class="rounded float-left">
			</div>
			<div class="col">
				<h4 class="text_middle_custom">Мы помогаем нашим клиентам зарабатывать деньги. Мы делаем это благодаря нашим опытным специалистам. Мы знаем как привлечь к Вашему продукту максимум внимания. </h4>
			</div>
		</div>
	</div>

	<?php
		$service_name = [
			"Создание сайтов",
			"Продвижение рекламы",
			"Контекстная реклама",
			"Техническая поддержка",
		];
		$service_text = [
			"Создание сайтов и их дизайна с нуля и под ключ с учётом современных тенденций и технологий.",
			"Выведение сайта в топ, удержание высокой позиции в выдаче на протяжении длительного времени.",
			"Привлечение максимально обширной аудитории, максимально эффективная реализация бюджета.",
			"Компетентная консультация и помощь по любым техническим и рекламным вопросам.",
		];
	?>

		<div class="container mt-5">
			<h3 class="mb-5" align="center">Наши услуги</h3>
			<div class="d-flex flex-wrap">
			<?php
				for($i = 0; $i < 4; $i++):
			?>
				<div class="card mb-4 rounded-3 shadow-sm">
					<div class="card-header py-3">
						<h5 class="my-0 fw-normal" align="center"><?=$service_name[$i]?></h4>
					</div>
					<div class="card-body">
						<img src="img/pic<?=($i + 1)?>.png" class="img-thumbnail" align="center">
						<h6><?=$service_text[$i]?></h5>
						<div class="btn-holder">
							<a href="send-request.php" type="button" class="w-100 btn btn-lg btn-outline-primary align-bottom">Оставить заявку</button></a>
						</div>
					</div>
				</div>
			<?php endfor; ?>
			</div>
		</div>

	<?php require "blocks/footer.php" ?>
</body>
</html>
