<!-- Left sidemenu -->
<div class="menu">
		<nav>
			<div class="logo"></div>
			<a href="/" class="m"><i class='bx bx-home' ></i>Домашнаяя страница</a>
			<div class="m"> 
				<div class="title" onclick="openbox('c1');openboximg('i1');"><i class='bx bx-food-menu'></i><p>Про нас</p><i class='bx bx-chevron-left s' id='i1'></i></div>
				<div class="child" id="c1" style="display: none; height: 0%;">
					<a href="/views/about/Наш_проект"><div class="item">Наш проект</div></a>
					<a href="/views/about/О_компании"><div class="item">О Компании</div></a>
					<a href="/views/about/Лидеры_компании"><div class="item">Лидеры Компании</div></a>
					<a href="/views/about/Сотрудники"><div class="item">Сотрудники</div></a>
					<a href="/views/about/Миссия_компании"><div class="item">Миссия Компании</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c2');openboximg('i2');"><i class='bx bx-news' ></i><p>Новости</p><i class='bx bx-chevron-left s' id='i2'></i></div>
				<div class="child" id="c2" style="display: none; height: 0%;">
					<a href="/views/news/Новости_и_достижения"><div class="item">Новости и достижения</div></a>
					<a href="/views/news/Поздравления"><div class="item">Поздравления</div></a>
					<a href="/views/news/Опросы_и_конкурсы"><div class="item">Опросы и конкурсы</div></a>
					<a href="/views/news/Пятничные_мемы"><div class="item">Пятничные мемы</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c3');openboximg('i3');"><i class='bx bx-bookmark-alt-plus'></i><p>Для сотрудников</p><i class='bx bx-chevron-left s' id='i3'></i></div>
				<div class="child" id="c3" style="display: none; height: 0%;">
					<a href="/views/staff/Организационная_структура"><div class="item">Организационная структура</div></a>
					<a href="/views/staff/Справочник"><div class="item">Справочник</div></a>
					<a href="/views/staff/Институт_наставничества"><div class="item">Институт наставничества</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c4');openboximg('i4');"><i class='bx bx-file' ></i><p>Документы</p><i class='bx bx-chevron-left s' id='i4'></i></div>
				<div class="child" id="c4" style="display: none; height: 0%;">
					<a href="/views/documents/Кадровые_документы"><div class="item">Кадровые документы</div></a>
					<a href="/views/documents/ДМС"><div class="item">ДМС</div></a>
					<a href="/views/documents/Программа_знаю_профессионала"><div class="item">Программа "Знаю профессионала"</div></a>
				</div>
			</div>
			<a href="/views/Мысли_и_факты" class="m"><i class='bx bx-extension' ></i>Мысли и факты</a>
			<a href="/views/Настройки" class="m"><i class='bx bx-shield-quarter' style='color:var(--primary);'></i>Настройки</a>
			<a href="" class="m e"><i class='bx bx-exit'></i>Выход</a>
		</nav>
	</div></i>
	<!-- End sidemenu -->

	<!-- Бегущая строка с сообщением -->
	<?php $readl = 1; 
	if ($readl == 1) {?>
<div class="read-message">
		<div class="message">
			<marquee behavior="scroll" direction="left" scrollamount="6">24 сентября будет проводиться корпоративное мероприятие, посвященное знакомству коллег из разных офисов и городов!</marquee>
		</div>
	</div>
<?php } else {} ?>
	<!-- END бегущая строка -->

	<!-- Верхнее меню -->
	<div class="menu2">
		<nav>
			<div class="logo">Портал ртк-цд</div>
			<div class="profile" onclick="openbox('c5');openboximg('i5')">
				<img src="https://papik.pro/uploads/posts/2023-03/1678102728_papik-pro-p-risunki-dlya-profilya-krutie-avatarki-4.jpg" alt="" /> 
					<div class="title">Дикарев А.А. <i class='bx bx-chevron-left s' id="i5"></i></div>
			</div>
			<div class="child" id="c5" style="display: none;">
					<a href="/views/profile/user"><div class="item">Профиль</div></a>
					<a href="#"><div class="item">Записи</div></a>
					<a href="#"><div class="item">Выйти</div></a>
				</div>
			<!-- <a href="" class="m">Главная</a>
			<a href="" class="m">Новости</a>
			<a href="" class="m">О нас</a>
			<a href="" class="m">Контакты</a>
			<a href="" class="m">Jobs</a> -->
		</nav>
	</div>
	<!-- END верхнее меню -->

	<script>
function openbox(id){
    display = document.getElementById(id).style.display;
    if(display=='none'){
       document.getElementById(id).style.display='block';
    }else{
       document.getElementById(id).style.display='none';
    }
};
function openboximg(id){
    classs = document.getElementById(id).className;

    if(classs == 'bx bx-chevron-left s'){
       	document.getElementById(id).className = 'bx bx-chevron-down s';
    }else{
		document.getElementById(id).className = 'bx bx-chevron-left s';
    }
}
	</script>