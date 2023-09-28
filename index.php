<?php include 'conf/db.php'; ?>
<?php
		$sql = $pdo->prepare("SELECT * FROM TopNews");
		$sql->execute([]);
		$result = $sql->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="/style.css" type="text/css" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Домашняя страница</title>
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
				<div class="textarea">
					<textarea class="ta active" name="qwe" id="q"  placeholder="Тут какой-то текст..."></textarea>
				</div>
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
					
					<?php $cou = 2; 
					if($cou==1) {
						echo '<b>Поздравляем нашего коллегу: '.'<br><br><a href="#" title="">Иванов Иван Иванович</a><br><br>'.' C днем рожения! Успехов в работе!</b>';

					} elseif ($cou > 1) {
						echo '<b>Поздравляем наших коллег: '.'<br><br><a href="#" title="">Иванов Иван Иванович</a>'.', '.'<a href="#" title="">Алексеев Алексей Алексеевич</a><br><br>'.' C днем рожения! Успехов в работе!</b>';
					} else {
						echo '<b>Сегодня никто не празднует свой день рождения :(</b>';
					}?>
					
				</div>
			</div>
			
		</div>

		<div class="block_news2">
			<div class="header"><b>Актуальные новости</b></div>
			<?php foreach ($result as $res) { ?>
			<div class="new_n">
				<div class="title"><?= $res->title;?></div>
				<div class="created"><?= $res->date;?></div>
				<div class="content_n"><?= $res->news;?></div>
				<div class="actions" style="width: 100%;"><a href="#" class="btn_n"><b>Читать..</b></a></div>
				<hr>
			</div>
			<?php } ?>
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
