<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="frontend/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<script
       src="https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
       crossorigin="anonymous"></script>
	
</head>
<body>
	<script src="frontend/js/script.js"></script>
	<div class="wrapper">
		<header class="header"> 
			<div class="top">
				<div class="contain">
					<div class="top-w">
						<div class="top-to-main">
							<a href="index.php" class="logo">Главная страница</a>
						</div>
						<div class="top-right">
							<div class="top-about">
								<a href="#about" class="ab_proj">О проекте</a>
							</div>
							<div class="top-feedback">
								<a href="#main_4" class="feedback">Отзывы</a>
							</div>
							<div class="top-contacts">
								<a href="" class="contacts">Контакты</a>
							</div>
							<div class="top-log-in">
								<a href="#" class="log">Войти</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include "frontend/html/login_window.html"; ?>
			<?php include "frontend/html/newacc_window.html"; ?>
			<div id="overlay"></div>
			<div class="banner">
				<div class="contain-2">
					<div class="banner-w">
						<div class="banner-txt-1">Упрости себе жизнь</div>
						<div class="banner-txt-2">Взгляни на расписание по-другому</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main_blocks" id="about">
			<!-- <a name="about"></a> -->
			<div class="main_block">
				<div class="contain_3" id="main_1_1">
					<div class="wrap">
						<div class="Upper_text">Планирование и составление расписания</div>
						<div class="Lower_text">
							<div class="Lower_text_des">У тебя стоит много лишних пар в расписании в личном кабинете? Путаешься и не знаешь твоя ли сейчас пара?</br></br>Не беда! Проставь только свои пары и ориентируйся по ним
							</div>
						</div>
					</div>
				</div>
				<div class="contain_4" id="main_1_2">
					<img src="images/schedule.png">
				</div>
				
				<div class="icon_main" id="main_1_3">
					<div class="in_circle" id="in_circle_1"></div>
				</div>
			</div>
			<div class="main_block">
				<div class="contain_3" id="main_1_1">
					<div class="wrap">
						<div class="Upper_text">Заметки и настраиваемые уведомления для событий</div>
						<div class="Lower_text">
							<div class="Lower_text_des">Преподаватель объявил важную контрольную или лабораторную?</br></br>Просто выбери нужную тебе пару и поставь на неё пометку с тем, что будет и настрой уведомление чтобы не прозевать важное событие
							</div>
						</div>
					</div>
				</div>
				<div class="contain_4" id="main_1_2">
					<img src="images/image_3.png">
				</div>
				
				<div class="icon_main" id="main_1_3">
					<div class="in_circle" id="in_circle_2">
					</div>
				</div>
			</div>
			<div class="main_block">
				<div class="contain_3" id="main_1_1">
					<div class="wrap">
						<div class="Upper_text">Обсуждение с другими пользователями</div>
						<div class="Lower_text">
							<div class="Lower_text_des">Закончилась тяжелая неделя и у тебя остались мысли и идеи, которыми ты хотел бы поделиться с другими? Или же тебе не понравился преподаватель?</br></br>Ты можешь всё это высказать и обсудить с другими совершенно анонимно
							</div>
						</div>
					</div>
				</div>
				<div class="contain_4" id="main_1_2">
					<img src="images/image_2.png">
				</div>
				
				<div class="icon_main" id="main_1_3">
					<div class="in_circle" id="in_circle_3">
					</div>
				</div>
			</div>
			<div class="main_block" id="main_4">
				<!-- <a name="feedback"></a> -->
				<div class="last_wrap">
					<div class="feeder"></div>
					<div class="feeds">
						<div class="otziv">
							いい言葉
						</div>
					</div>
					<div class="hidden_block"></div>
				</div>
			</div>
		</div>
		<div class="footer">
			<div class="foot_wrap">
				<div class="foot_left">
					<div class="foot_text">Наша почта: fefu_timetable@gmail.com</div></br>
					<div class="foot_dev">
						<div class="foot_text">Контакты разработчиков:</div>
						<div class="foot_logo">
							<a href=""><img src="images/vk.png"></a>
							<a href=""><img src="images/tg.png"></a>
						</div>
					</div>
					</br>
					<div class="foot_text">© Виртуальный дневник FEFU Timetable</div>
				</div>
				<div class="logo_fefu"><img src="images/logo_fefu.png"></div>
				<div class="foot_right">
					<div class="foot_text" style="margin-left: 35px">Официальные сообщества ДВФУ</div></br>
					<div class="line"></div></br>
					<div class="foot_right_logo">
						<a href=""><img src="images/main_logo.png"></a>
						<a href=""><img src="images/vk.png"></a>
						<a href=""><img src="images/tg.png"></a>
						<a href=""><img src="images/inst.png"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="frontend/js/javascript.js"></script>
</body>
</html>