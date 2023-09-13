<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Execut</title>
</head>
<body>
	<?php include 'layout/menu.php'; ?>
	<div class="content">
		<div class="banner">
			<div style="text-align: center;padding: 95px 0 50px 0;font-size: 50px;">КАКОЙ ТО БАННЕР</div>
		</div>
		<div class="block_news">
			<form action="" style="padding: 20px; width: 100%;height: 100%;">
				<div class='btn-group'>
					<button class="btn1"><b>НОВОСТЬ</b></button>
					<button class="btn2"><b>ОПРОС</b></button>
					<button class="btn2"><b>ОБЪЯВЛЕНИЕ</b></button>
					<button class="btn3"><b>СОБЫТИЕ</b></button>
				</div>
				<textarea class="ta active" name="qwe" id="q" cols="103%" rows="5%" placeholder="Тут какой-то текст..."></textarea>
				<button class="btn"><b>ОТПРАВИТЬ</b></button>
			</form>
		</div>
		<div class="min-block">
			<div class="min-block-c1">
				<div class="title"><b>Опросы</b></div>
				<div class="b-content">
					<img src="https://i.pinimg.com/originals/97/49/7d/97497dc64fc934b2d7f8571e820e1b9c.png" alt="" style="width: 220px; "><br>
					<br><p>Опрос на тему жизни</p><br>
					<button class="btn-c"><b>ПЕРЕЙТИ К ОПРОСАМ</b></button>
				</div>
			</div>
			<div class="min-block-c2">
				<div class="title"><b>Сегодня день рождения! <i class='bx bx-happy-alt bx-sm' style="color: var(--warning);"></i></b></div>
				<div class="b-content">
					<table>
						<tr>
							<td>1.</td>
							<td>Иванов Иван Иванович</td>
						</tr>
						<tr>
							<td>2.</td>
							<td>Алексеев Алексей Алексеевич</td>
						</tr>
					</table>
				</div>
			</div>
			
		</div>

		<div class="block_news2">
			<div class="header">Актуальные новости</div>
			<div class="new_n">
				<div class="title">Внимание коллеги! Корпоративное мероприятие 24 сентября!</div>
				<div class="created">13.09.2023</div>
				<div class="content_n">24 сентября будет проводиться корпоративное мероприятие, посвященное знакомству коллег из разных офисов и городов!</div>
				<div class="actions" style="width: 100%;"><a href="#" class="btn_n"><b>Читать..</b></a></div>
				<hr>
			</div>
			<div class="new_n">
				<div class="title">Открытие нового корпоративного портала!</div>
				<div class="created">12.09.2023</div>
				<div class="content_n">Сегодня у нашего дружного коллектива появилось своё уютное местечко! Теперь все новинки в компании будут на нашем новом портале!</div>
				<div class="actions" style="width: 100%;"><a href="#" class="btn_n"><b>Читать..</b></a></div>
				<hr>
			</div>
			<div class="new_n">
				<div class="title">Тестирование портала.</div>
				<div class="created">11.09.2023</div>
				<div class="content_n">Тестирование портала идет полным ходом! Осталось совсем чуть-чуть!</div>
				<div class="actions" style="width: 100%;"><a href="#" class="btn_n"><b>Читать..</b></a></div>
				<hr>
			</div>
			
		</div>

	</div>
</body>
</html>

<!-- <i class='bx bx-chevron-right' ></i>
<i class='bx bx-chevron-down' ></i> -->