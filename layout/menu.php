<div class="menu">

		<nav>

			<div class="logo"></div>
			<a href="/" class="m"><i class='bx bx-home' ></i>Домашнаяя страница</a>
			<div class="m"> 
				<div class="title" onclick="openbox('c1');openboximg('i1');"><i class='bx bx-food-menu'></i><p>Про нас</p><i class='bx bx-chevron-left s' id='i1'></i></div>
				<div class="child" id="c1" style="display: none; height: 0%;">
					<a href="/views/about/Наш_проект.php"><div class="item">Наш проект</div></a>
					<a href="/views/about/О_компании.php"><div class="item">О Компании</div></a>
					<a href=""><div class="item">Лидеры Компании</div></a>
					<a href=""><div class="item">Сотрудники</div></a>
					<a href="/views/about/Миссия_компании.php"><div class="item">Миссия Компании</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c2');openboximg('i2');"><i class='bx bx-news' ></i><p>Новости</p><i class='bx bx-chevron-left s' id='i2'></i></div>
				<div class="child" id="c2" style="display: none; height: 0%;">
					<a href=""><div class="item">Новости и достижения</div></a>
					<a href=""><div class="item">Поздравления</div></a>
					<a href=""><div class="item">Опросы и конкурсы</div></a>
					<a href=""><div class="item">Пятничные мемы</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c3');openboximg('i3');"><i class='bx bx-bookmark-alt-plus'></i><p>Для сотрудников</p><i class='bx bx-chevron-left s' id='i3'></i></div>
				<div class="child" id="c3" style="display: none; height: 0%;">
					<a href=""><div class="item">Организационная структура</div></a>
					<a href=""><div class="item">Справочник</div></a>
					<a href=""><div class="item">Институт наставничества</div></a>
				</div>
			</div>
			<div class="m"> 
				<div class="title" onclick="openbox('c4');openboximg('i4');"><i class='bx bx-file' ></i><p>Документы</p><i class='bx bx-chevron-left s' id='i4'></i></div>
				<div class="child" id="c4" style="display: none; height: 0%;">
					<a href=""><div class="item">Кадровые документы</div></a>
					<a href=""><div class="item">ДМС</div></a>
					<a href=""><div class="item">Программа "Знаю профессионала"</div></a>
				</div>
			</div>
			<a href="" class="m"><i class='bx bx-extension' ></i>Мысли и факты</a>
			<a href="/views/admin.php" class="m"><i class='bx bx-shield-quarter' style='color:var(--primary);'></i>Настройки</a>
			<a href="" class="m e"><i class='bx bx-exit'></i>Выход</a>
		</nav>
	</div></i>

	<div class="menu2">
		<nav>
			<div class="logo">Портал ртк-цд</div>
			<div class="profile" onclick="openbox('c5');openboximg('i5')">
				<img src="https://sun6-23.userapi.com/s/v1/ig1/VQtoKSyYexj6lFKV-E2_-X-UsVOASLNcVMnW7MfkGG6CuphcN2EaY-q4PPy6KQlJ6KuALCjA.jpg?size=2002x2002&quality=96&crop=0,0,2002,2002&ava=1" alt=""  style="width: 35px "/> 
					<div class="title">Дикарев А.А. <i class='bx bx-chevron-left s' id="i5"></i></div>
			</div>
			<div class="child" id="c5" style="display: none;padding: 5px;  position: fixed;right: 0;top:50px; width: 220px; background: var(--white); border: 1px solid lightgrey;">
					<a href="#"><div class="item">Профиль</div></a>
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