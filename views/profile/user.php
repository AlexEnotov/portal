<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>Профиль</title>
</head>
<body>
	<?php include '../../layout/menu.php'; ?>
	<div class="content">
		<!-- Основной блок профиля с личной информацией -->
		<div class="prof">
				<div class="prof-left">
					<img src="https://papik.pro/uploads/posts/2023-03/1678102728_papik-pro-p-risunki-dlya-profilya-krutie-avatarki-4.jpg" alt="">
				</div>
				<div class="prof-right">
					<h2>Дикарев Александр</h2>
					<div><a href="#">Редактировать профиль</a> | <a href="#">Изменить статус</a></div>
					<p><b>Просто молодец</b></p>
					<div class="info">
						<div class="position">Инженер<br>Блок внедрения</div>
						<div class="information">
							<div style="display: flex;"><div>День рождения:</div> <div style="margin-left: auto;float: right;">14.01.1998</div> </div>
							<div style="display: flex;"><div>Телефон:</div> <div style="margin-left: auto;float: right;">8(999)999-99-99</div> </div>
							<div style="display: flex;"><div>Telegram:</div> <div style="margin-left: auto;float: right;"><a href="https://t.me/Enotov21">@Enotov21</a></div> </div>
							<div style="display: flex;"><div>E-mail:</div> <div style="margin-left: auto;float: right;"><a href="mailto:DikarevAA@rtk-cd.ru">DikarevAA@rtk-cd.ru</a></div> </div>
						</div>
					</div>
				</div>
		</div>
		<!-- END профиль -->

		<!-- Дополнительный блок -->
		<div class="labels">
			<div class="div">Например здесь личная информация о пользователе, которую он сам посчитает нужным внести</div>
		</div>
		<!-- END Доп. блок -->

		<!-- Запись на стену FORM and BUTTON -->
		<div class="notes">
			<div class="note-pad">
				<form action="" method="POST" style="padding: 20px; width: 100%;height: 100%;">
					<label for="" class="title-c1"><b>Запись на личную стену</b></label><br>
					<div class="textarea">
						<textarea name="note" id="note-1" class='ta' placeholder="Напиши здесь что-нибудь..."></textarea>
					</div>
					<button class="btn"><b>ОТПРАВИТЬ</b></button>
					
				</form>
			</div>
		</div>
		<!-- END FORM and BUTTON -->

		<!-- Доска достижений, вьюха -->
		<div class="min-block">
			<div class="min-block-c3">
				<div class="title"><b>Достижения</b></div>
				<div class="b-content">
					<div class="reward">
						<div>
							<img src="https://cdn-icons-png.flaticon.com/512/6303/6303653.png" alt="">
							<div class="text"><b>Целый год в компании</b></div>
						</div>
						<div>
							<img src="https://cdn-icons-png.flaticon.com/512/5957/5957125.png" alt="">
							<div class="text"><b>За личные достижения</b></div>
						</div><div>
							<img src="https://cdn-icons-png.flaticon.com/512/1978/1978788.png" alt="">
							<div class="text"><b>За просто так</b></div>
						</div><div>
							<img src="https://cdn-icons-png.flaticon.com/512/5219/5219278.png" alt="">
							<div class="text"><b>За чем-нибудь</b></div>
						</div><div>
							<img src="https://cdn-icons-png.flaticon.com/512/2755/2755456.png" alt="">
							<div class="text"><b>Чтобы было</b></div>
						</div><div>
							<img src="https://cdn.rewards.show/images/logo-reward.png" alt="">
							<div class="text"><b>За сайт</b></div>
						</div>
					</div>
					<button class="btn_n"><b>ПОСМОТРЕТЬ ВСЕ</b></button>	
				</div>
			</div>
		</div>
		<!-- Доска достижение END -->
		<div class="block_news2">
			<div class="header"><b>Моя стена</b></div>
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
				<!-- <div class="title">Это моя стена</div> -->
				
				<div class="content_n">А здесь мои новости, например я напишу здесь большой текст, для того чтобы увидеть как он будет выглядеть на моей стене, ведь это нужно для того чтобы сделать стену максимально конфортабельной. Она должна выглядеть хорошо и не вызывать отвращения у пользователей корпоративного портала</div>
				<div class="created">13.09.2023</div>
				<hr>
			</div>
			<div class="new_n">
				<!-- <div class="title">Это моя стена</div> -->
				
				<div class="content_n">А здесь мои новости, например я напишу здесь большой текст, для того чтобы увидеть как он будет выглядеть на моей стене, ведь это нужно для того чтобы сделать стену максимально конфортабельной. Она должна выглядеть хорошо и не вызывать отвращения у пользователей корпоративного портала</div>
				<div class="created">13.09.2023</div>
				<hr>
			</div>
			<div class="new_n">
				<!-- <div class="title">Это моя стена</div> -->
				
				<div class="content_n">А здесь мои новости, например я напишу здесь большой текст, для того чтобы увидеть как он будет выглядеть на моей стене, ведь это нужно для того чтобы сделать стену максимально конфортабельной. Она должна выглядеть хорошо и не вызывать отвращения у пользователей корпоративного портала</div>
				<div class="created">13.09.2023</div>
				<hr>
			</div>
			
			
		</div>
	</div>
</body>
</html>
