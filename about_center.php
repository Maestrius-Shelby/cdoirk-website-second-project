<?php 
require_once 'config/connect.php';
?>
<!DOCTYPE html>


	<html> 
<head>

	
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="">
	<meta name="author" content="">

	<title>ЦДОиРК СГУВТ</title>

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link rel="shortcut icon" href="images/favicon.png">

	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	
	

	<link rel="stylesheet" href="libs/itc-slider.css">

	<link rel="stylesheet" href="css/google-translate.css">
	
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/bvi/bvi.css">
	<link rel="stylesheet" href="css/bvi/bvi.min.css">

	
	

	

	
	
	
	

</head>
<body class="multi-page">

<div id="wrapper" class="wrapper">
	
	<header id="header2">
		<div class="container">
			<div class="row">

				<div class="col-md-9 col-xs-7 bvi-speech">
					<div class="top-bar">
						<ul>

							<div class="language wow circle bounceInLeft">
								<img src="images/lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img">
								<img src="images/lang/lang__en.png" alt="en" data-google-lang="en" class="language__img">
								<a href="#" class="my-class"><img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
								
							 </div>

							 <li>
								<div class="logo-name">
							 		<a href="./index.php"><img src="images/SSUWT/main-logo.png" class="img-responsive" alt="" width="150px" height="200px"/></a>
									<span  class="Company-name">Центр Дополнительного <br> Образования и Развития <br>Компетенций СГУВТ</span>	
								</div>		
							</li>
										
							<li class="tb-info">
								<a href="#" class="window js-open-modal trigger m48" data-modal="1">
									<i class="fa fa-map-marker"></i>
									<span>Мичурина 48<br><em>Яндекс карты</em></span>
								</a>
							</li>

							<li class="tb-info">
								<a href="#" class="window js-open-modal trigger" data-modal="2">
									<i class="fa fa-clock-o"></i>
									<span class="hidden-xs">Время работы<br><em>Мы работаем каждый день</em></span>
								</a>
							</li>

							<li>
								<button class = "btn-wave js-open-modal" data-modal="3" type="submit">
									<div class="wave"></div>
									<span>Подать заявку</span>
								</button>

							</li>
						
						</ul>
						
					</div>
				</div>
			</div>
			<div class="menu-container">
				<div class="menu-navbar"></div>
				<div class="mean-toggle"></div>
			</div>
			<nav class="menu-wrapper2">
				<a href="index.php">Главная</a>
				<a href="about_center.php">О центре</a>
				<a href="program_catalog.php">Каталог программ</a>
				<a href="documents.php">Документы</a>
				<a href="News_and_Announs.php">Новости</a>
				<a>
					<div class="s-search">
						<div class="ss-ico"><span class="search-text">Поиск</span><i class="fa fa-search"></i></div>
						<div class="search-block">
							<div class="ssc-inner">
								<form  id="search-form" action="result_search.php" method="post" enctype="multipart/form-data">
									<input id="search-input" type="text" name="query" placeholder="Введите текст для поиска здесь..." required>
										<button type="submit">
											<i class="fa fa-search"></i>
										</button>
								</form>
							</div>
						</div>
					</div>

					<script>
						var searchForm1 = document.getElementById('search-form');
						var searchInput1 = searchForm1.querySelector('#search-input');
						searchForm1.addEventListener('submit', function(event) {
						event.preventDefault();
						var searchValue = searchInput1.value;
						localStorage.setItem('searchValue', searchValue);
						window.location.href = 'result_search.php'; 
						});
					</script>
				</a>
				<div class="animation start-home"></div>
			  </nav>
			  <div class="clear"></div>

			<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
			</script>
			<script type="text/javascript">
			      $(document).ready(function()
			      {
			          $('.mean-toggle').click(function()
			        {
			              $('.mean-toggle').toggleClass('active')
			              $('.menu-wrapper2').toggleClass('active')
			        })
			      })
			</script>

		</div>
	</header>
	
	<div class="close-btn fa fa-times"></div>

	
		
	<div class="slider wow circle animate__zoomIn">

		<div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" >
			<div class="itc-slider-wrapper">
			  <div class="itc-slider-items">

				<div class="itc-slider-item">
					<picture>
					  <source srcset="images/SSUWT/ssuwt.jpg" type="image/jpeg" media="(min-width:970px)">
					  <source srcset="images/SSUWT/ssuwt.jpg" type="image/jpeg" media="(min-width:750px)">
					  <source srcset="images/SSUWT/ssuwt.jpg" type="image/jpeg" media="(max-width:750px)">
					  <img src="images/SSUWT/ssuwt.jpg">
					</picture>
					<div class="container no-padding">
						<div class="hs-caption">
							<div class="caption-inner circle wow flipInX bvi-speech">
								<h4>Информация о Центре Дополнительного Образования и Развития Компетенции</h4>
							</div>
						</div>
					</div>
					
				</div>
			  </div>
			</div>
		</div>
	</div>
	
	<section id="service" class="service">

	<div class="about_welcome_2 bvi-speech circle wow animate__lightSpeedInRight">
		<div class="row">
			<h2>О центре</h2><br><br>
			<div>
				<p>
						Российская система образования динамично развивается, наш университет растёт, появляются новые задачи. 
					Поэтому в мае 2023 года на базе Лицея СГУВТ был создан Центр дополнительного образования и развития компетенций, 
					в рамках которого реализуется не только дополнительное образование для детей и взрослых, 
					но и профессиональное образование (повышение квалификации, переподготовка, стажировки).
				</p>
				<p>
						Для школьников мы по-прежнему проводим подготовительные курсы по подготовке к ОГЭ и ЕГЭ. 
					При этом мы расширили спектр общеобразовательных предметов, по которым осуществляется подготовка: это и традиционные предметы: 
					математика, русский язык, физика, информатика и ИКТ, обществознание, и новые: английский язык, химия, биология (по запросу выпускников).
				</p>
				<p>
					Кроме того, используются дополнительные форматы обучения: занятия в малых группах (до 5 человек), репетиторство, индивидуальные консультации. 
					Проводятся мастер-классы по решению задач повышенной сложности, по написанию сочинения. Реализуется и новые формы обучения – заочная с применением 
					дистанционных образовательных технологий и смешанная (офлайн и онлайн). Словом, мы вместе с вузом тоже растём и развиваемся.
				</p>
				<p>
					Как вы знаете, в современных реалиях при поступлении в вуз на бюджетное место и при трудоустройстве – большая конкуренция. 
					Мы успешно реализуем различные дополнительные программы для детей и взрослых и дополнительные профессиональные программы. 
					Каждый найдёт именно то, что ему нужно здесь и сейчас. Дополнительное образование позволит вам чувствовать себя увереннее на рынке труда.
				</p>
				<br><h3>Мы рады видеть Вас в числе наших слушателей! Желаем Вам успехов в обучении!</h3>
			</div>
		</div>
	</div>
	
</section>

<section class="teacher_cards">
	<ul>
	  <li>
		<img src="images/SSUWT/40.png">
		<h3>Волкова Людмила Владимировна</h3>
		<br>
		<p>Директор</p>
	  </li>
	  <li>
		<img src="images/SSUWT/41.png">
		<h3>Кудряшова Евгения Васильева</h3>
		<br>
		<p>Специалист по учебно-методической работе</p>
	  </li>
	  <li>
		<img src="images/SSUWT/42.png">
		<h3>Евдокимова Ирина Игорьевна</h3>
		<br>
		<p>Специалист по учебно-методической работе</p>
	  </li>
	</ul>
	</section>

<br><br><br><br>
<section class="button_cards">

<ul>
  <li>
    <a href="teachers.php">
      
      <svg id="obturateur1" data-name="Layer 1" id="Layer_1" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><path d="M292.08,271.8a5.24,5.24,0,0,0-5.25,5.24v68.74a5.25,5.25,0,0,0,10.49,0V277A5.24,5.24,0,0,0,292.08,271.8Z"/><path d="M220.07,271.8a5.23,5.23,0,0,0-5.24,5.24v68.74a5.24,5.24,0,0,0,10.48,0V277A5.23,5.23,0,0,0,220.07,271.8Z"/><path d="M385.85,249.9h-4.64a36.31,36.31,0,1,0-50.94,0h-9.38a38.43,38.43,0,0,0-27.17-11.24h-9.44a44.08,44.08,0,1,0-56.4,0h-9.44a38.39,38.39,0,0,0-27.16,11.24h-9.55a36.32,36.32,0,1,0-50.94,0h-4.64a31.9,31.9,0,0,0-31.87,31.87v54.88a5.25,5.25,0,0,0,10.49,0V281.77a21.4,21.4,0,0,1,21.38-21.38h57.79a38,38,0,0,0-4,16.79v68.6a5.24,5.24,0,0,0,10.48,0v-68.6a28.07,28.07,0,0,1,28-28h75.28a28.07,28.07,0,0,1,28,28v4.12c0,.12-.07.23-.07.35v55c0,.12.06.23.07.35v8.78a5.25,5.25,0,0,0,10.49,0v-68.6a38,38,0,0,0-4-16.79h57.62a21.4,21.4,0,0,1,21.38,21.38v54.88a5.25,5.25,0,0,0,10.49,0V281.77A31.9,31.9,0,0,0,385.85,249.9ZM130.43,224.07a25.83,25.83,0,1,1,25.83,25.83A25.86,25.86,0,0,1,130.43,224.07Zm92-19a33.6,33.6,0,1,1,33.6,33.60A33.64,33.64,0,0,1,222.48,205.06Zm107.43,19a25.83,25.83,0,1,1,25.84,25.83A25.86,25.86,0,0,1,329.91,224.07Z"/><path d="M384.53,276.41a5.24,5.24,0,0,0-5.24,5.24v55a5.24,5.24,0,0,0,10.48,0v-55A5.24,5.24,0,0,0,384.53,276.41Z"/><path d="M127.45,276.41a5.24,5.24,0,0,0-5.24,5.24v55a5.24,5.24,0,1,0,10.48,0v-55A5.24,5.24,0,0,0,127.45,276.41Z"/></svg>
      <h3 style="color:#1d577c">Преподавательский состав</h3>
    </a>
  </li>
  <br><br>
  <li>
    <a href="gallery.php">
      
      <svg id="obturateur2" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="grid"/><g id="Layer_2"/><g id="Layer_3"/><g id="Layer_4"/><g id="Layer_5"/><g id="Layer_6"/><g id="Layer_7"/><g id="Layer_8"/><g id="Layer_9"/><g id="Layer_10"><g><path d="M48.68,58.259H4.174V16.89H48.68V58.259z M6.174,56.259H46.68V18.89H6.174V56.259z"/></g><g><polygon points="5.011,42.688 4.29,40.822 23.156,33.525 34.12,38.745 41.335,35.753 48.224,40.22 47.136,41.897 41.13,38.003     34.063,40.933 23.074,35.701   "/></g><g><path d="M13.535,30.313c-1.97,0-3.572-1.602-3.572-3.571c0-1.969,1.603-3.57,3.572-3.57s3.572,1.602,3.572,3.57    C17.107,28.71,15.505,30.313,13.535,30.313z M13.535,25.171c-0.867,0-1.572,0.705-1.572,1.57c0,0.866,0.705,1.571,1.572,1.571    s1.572-0.705,1.572-1.571C15.107,25.875,14.402,25.171,13.535,25.171z"/></g><g><polygon points="54.252,50.291 52.252,50.291 52.252,13.315 10.748,13.315 10.748,11.315 54.252,11.315   "/></g><g><polygon points="59.826,44.717 57.826,44.717 57.826,7.741 16.322,7.741 16.322,5.741 59.826,5.741   "/></g></g><g id="Layer_37"/><g id="Layer_11"/><g id="Layer_12"/><g id="Layer_13"/><g id="Layer_14"/><g id="Layer_16"/><g id="Layer_17"/><g id="Layer_18"/><g id="Layer_19"/><g id="Layer_20"/><g id="Layer_21"/><g id="Layer_22"/><g id="Layer_23"/><g id="Layer_24"/><g id="Layer_25"/></svg>
      <h3 style="color:#1d577c">Галерея</h3>
    </a>
  </li>
</ul>


</section>
<br><br><br> <br>

	

	
	<footer id="footer2" class="bvi-speech">
		<div class="container wow circle fadeInUpBig">
			<div class="row">
				<div class="col-md-3">
					<h3>Контакты</h3>
					<div class="fcontact">
						<p><strong><i class="fa fa-map-marker"></i></strong> <span>630005, г.Новосибирск,</span></p>

						<p><span class="address2">ул.Мичурина, д.48, каб. №203</span></p>
		
						<p><strong><i class="fa fa-envelope"></i></strong> <span><a href="https://mail.ru">center@nsawt.ru</a></span></p>
			
						<p><strong><i class="fa fa-phone"></i></strong> <span>+7 (913) 941-54-41 (Евгения)</span></p>

						<p><span class="phone2">+7 (962) 824-39-26 (доб. 1791)</span></p>
					</div>
					<div class="fcontact2">

						<div class="social vk">
							<a href="https://vk.com/ssuwt_center" target="_blank"><i class="fa fa-vk fa-2x"></i></a>    
						</div>

						<div class="social telegram">
							<a href="https://t.me/ssuwtofficial" target="_blank"><i class="fa fa-paper-plane fa-2x"></i></a>
						</div>
					
					</div>

							<div class="f-logo">
							<a href="./index.php"><img src="images/SSUWT/logo.png"  alt=""/></a>
							</div>
					

				</div>

				<div class="col-md-3">
					
					<h3>Обратная связь</h3>
					<ul class="f-news">
						<li><a href="http://ssuwt-center-new/News_and_Announs.php" >Новости<i class="fa fa-angle-right"></i></a></li>
						<li><a class="js-open-modal" data-modal="3">Подать заявку<i class="fa fa-angle-right"></i></a></li>
						<li><a href="https://www.ssuwt.ru/?ysclid=loh21ji7vq206164382">Официальный сайт ФГБОУ ВО "СГУВТ"<i class="fa fa-angle-right"></i></a></li>

					</ul>
				</div>

				<div class="col-md-3 twitterfeed">
					<h3>Карта</h3>
					<p>Местоположение университета</p>
					<div class="f-map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aba24ea57a6764266fd9f3aeed9771820704a28c402bbbe4ac3b383c5caea9b8a&amp;lang=ru_RU&amp;scroll=true"></script>

					</div>
				</div>
			
			</div>
		</div>
		<div class="footer-bottom container">
			<div class="row">
				<div class="col-md-6">
					<p>&copy; Все права защищены 2023. СГУВТ</p>
				</div>

			</div>
		</div>
	</footer>
	
</div>





<div class="modal" data-modal="1">

	<div class="dialog__content">
		<div class="contact-pop">
			<div class="row">
				<div class="col-md-6">
                    <div class="d-map">
                        <div id="map-pop"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2181f2815a88239f8ae1a000d0b145938b2081f05608a4078f9b3d28bb95d84c&amp;lang=ru_RU&amp;scroll=true"></script></div>
                    </div>
                </div>
				<div class="col-md-6 pop-contact">
					<ul class="contact-info">
						<li>
							<p><strong><i class="fa fa-map-marker"></i> Адрес:</strong> <span>Мичурина 48</span></p>
						</li>
						<li>
							<p><strong><i class="fa fa-envelope"></i> Электронная почта:</strong> <span><a href="#">center@nsawt.ru</a></span></p>
						</li>
						<li>
							<p><strong><i class="fa fa-phone"></i> Телефон:</strong> <span>+7 (962) 824-39-26</span> <span>+7 (913) 941-54-41</span></p>
						</li>
					</ul>
				</div>
			</div>
			<button class="action b-close js-modal-close"><i class="fa fa-times"></i></button>
		</div>
	</div>

 </div>

 <div class="modal" data-modal="2">

		<div class="dialog__content">
			<div class="timer_popup">
				<div>
					<h3>Время открытия</h3>
					<ul>
						<li>
							<span class="week-day">Понедельник</span>
							<span class="week-time">8.00 - 18.00</span>
						</li>
						<li>
							<span class="week-day">Вторник</span>
							<span class="week-time">8.00 - 18.00</span>
						</li>
						<li>
							<span class="week-day">Среда</span>
							<span class="week-time">8.00 - 18.00</span>
						</li>
						<li>
							<span class="week-day">Четверг</span>
							<span class="week-time">8.00 - 18.00</span>
						</li>
						<li>
							<span class="week-day">Пятница</span>
							<span class="week-time">8.00 - 18.00</span>
						</li>
						<li>
							<span class="week-day">Суббота</span>
							<span class="week-time">9.00 - 15.00</span>
						</li>
						<li>
							<span class="week-day">Воскресенье</span>
							<span class="week-time">Выходной</span>
						</li>
					</ul>
				</div>
				<button class="action b-close js-modal-close"><i class="fa fa-times"></i></button>
			</div>
		</div>
		

 </div>



 <div class="modal" data-modal="3">
	<div class="dialog__content">
		<div id="booking_pop" class="booking_pop">
			<h3>Форма заявки</h3>
			<form class="book_online" action="applications\create.php" method="post">
				<div class="row">
				<div class="col-md-6">

					<label>Направление подготовки <span>*</span></label>

					<div class="custom-radio-select">
  						<label><input type="radio" name="brands1[]" value="Для взрослых"> <span>Для взрослых</span></label>
  						<label><input type="radio" name="brands1[]" value="Для школьников, студентов, курсантов"> <span>Для школьников, студентов, курсантов</span></label>
					</div>

					<div class="additional-checkboxes checkselect" style="display: none;">
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="General English (Общий английский)"> <span>General English (Общий английский)</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Общие вопросы охраны труда"> <span>Общие вопросы охраны труда</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Рекрутер и инструменты подбора персонала"> <span>Рекрутер и инструменты подбора персонала</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Бережливое производство"> <span>Бережливое производство</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Основы инклюзивного образования"> <span>Основы инклюзивного образования</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Принципы организации и оказания первой помощи"> <span>Принципы организации и оказания первой помощи</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Web-дизайн. Визуальное оформление и верстка сайта"> <span>Web-дизайн. Визуальное оформление и верстка сайта</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Astra Linux для пользователей"> <span>Astra Linux для пользователей</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Машинист специального крана"> <span>Машинист специального крана</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Оператор конвейера"> <span>Оператор конвейера</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Подготовка стропальщиков"> <span>Подготовка стропальщиков</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="Оборудование и технология сварочного производства"> <span>Оборудование и технология сварочного производства</span></label>
					</div>			

					<div class="additional-checkboxes-2 checkselect" style="display: none;">
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ОГЭ Русский язык"> <span>ОГЭ Русский язык</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ОГЭ Математика"> <span>ОГЭ Математика</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ОГЭ Информатика и ИКТ"> <span>ОГЭ Информатика и ИКТ</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ЕГЭ Русский язык"> <span>ЕГЭ Русский язык</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ЕГЭ Математика"> <span>ЕГЭ Математика</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ЕГЭ Информатика и ИКТ"> <span>ЕГЭ Информатика и ИКТ</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ЕГЭ Физика"> <span>ЕГЭ Физика</span></label>
						<label class="custom-checkbox"><input type="checkbox" name="brands[]" value="ЕГЭ Обществознание"> <span>ЕГЭ Обществознание</span></label>
					</div>			


                    </div>
					<div class="col-md-6">
						<label>Имя <span>*</span></label>                                    
						<input 
						name="senderName1" 
						type="text" 
						required="required" />
					</div>
					<div class="col-md-6">
						<label>Фамилия <span>*</span></label>                                    
						<input 
						name="senderSurname1" 
						type="text" 
						required="required" />
					</div>
					<div class="col-md-6">
						<label>Эл. почта <span>*</span></label>
						<input 
						type="text" maxlength
						name="senderEmail1"  
						required="required"/>
					</div>
					<div class="col-md-6">
						<label>Телефон<span>*</span></label>
						<input 
						name="senderPhone1" 
						type="text" 
						required="required"/>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-12">
						<label>Сообщение</label>			
						<textarea name="message1" id="message1" cols="6" rows="6" maxlength="500"></textarea>
					</div>
					<div class="col-md-5">
						<button class="btn-illumination submit-button" name = "create" type="submit" id="open-modal" disabled>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							Отправить
						</button>
					</div>
					<div class="col-md-7">
						<p><em>*</em> Поля являются обязательными для заполнения</p>
					</div>
				</div>
			</form>
		</div>
		<button class="action b-close js-modal-close"><i class="fa fa-times"></i></button>
	</div>
 </div>
 
 <script src="js\pattern.js"></script>

 <div class="modal__container" id="modal-container"> 
    <div class="modal__content"> 
 	   <div class="modal__close close-modal" data-action="close-and-submit" title="Close"> 
 		   <i class='bx bx-x'></i> 
 	   </div> 
 	   <p class="modal__title">Вы успешно подали заявку! Мы вам скоро ответим.</p>     
 	   <button class="btn-illumination close-modal" type="submit"> 
 	  <span></span> 
 	  <span></span> 
 	  <span></span> 
 	  <span></span> 
 	  Закрыть 
 	</button> 
    </div> 
 </div>

 


 

 
 <div class="overlay js-overlay-modal"></div>


<script src="js/vivus/vivus.js"></script>
<script src="js/vivus/vivus.min.js"></script>
<script>
    obt1 = new Vivus('obturateur1', {type: 'sync', duration: 200});
    obt2 = new Vivus('obturateur2', {type: 'sync', duration: 200});
</script>

<script src="js/bvi/bvi.js"></script>
<script src="js/bvi/bvi.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/navigation/scroll.js"></script>








<script>
var scrollHeight2 = 310; 

window.addEventListener("scroll", function() {
    var menuWrapper2 = document.querySelector(".menu-wrapper2");

    if (window.pageYOffset > scrollHeight2) {
        menuWrapper2.classList.add("sticky");
    } else {
        menuWrapper2.classList.remove("sticky");
    }
});

var menuContainer2 = document.querySelector(".menu-container");
var menuWrapper2 = document.querySelector(".menu-wrapper2");
var menuBottom2 = menuContainer2.offsetTop + menuContainer2.offsetHeight; // Координата нижней границы меню

var isSticky2 = false; // Флаг для отслеживания, прикреплено ли меню

window.addEventListener("scroll", function() {
    if (window.pageYOffset > menuBottom2 && !isSticky2) {
        menuContainer2.classList.add("sticky2");
        menuWrapper2.classList.add("sticky2");
        isSticky2 = true; // Меню прикреплено
    } else if (window.pageYOffset <= menuBottom2 && isSticky2) {
        menuContainer2.classList.remove("sticky2");
        menuWrapper2.classList.remove("sticky2");
        isSticky2 = false; // Меню вернулось на своё место
    }
});
</script>
<script src="js/script.js"></script>






<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="js/google-translate.js"></script>

<script src="libs/itc-slider.js"></script>

<script src="libs/wow.js"></script>
<script>
	new WOW().init();
</script>

<script>
new isvek.Bvi({
    target: '.my-class', 
    theme: 'white', 
    fontFamily: 'arial', 
    fontSize: 15, 
    letterSpacing: 'normal', 
    lineHeight: 'normal', 
    images: true, 
    reload: true, 
    panelFixed: true, 
    speech: true, 
    builtElements: true, 
    panelHide: false, 
    lang: 'ru-RU' 
  });
</script>

<script src="js/bvi/bvi_fix.js"></script>

<script src="js/modal-window/modal-window.js"></script>

<script src="js/checkboxes.js"></script>


</body>
</html>