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

	<title>ЕГЭ Информатика и ИКТ</title>

	
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

		<div class="itc-slider" data-autoplay="false" data-interval="7000" data-loop="true" >
			<div class="itc-slider-wrapper">
			  <div class="itc-slider-items">

				<div class="itc-slider-item">
					<picture>
					  <source srcset="images/SSUWT/info.jpg" type="image/jpeg" media="(min-width:970px)">
					  <source srcset="images/SSUWT/info.jpg" type="image/jpeg" media="(min-width:750px)">
					  <source srcset="images/SSUWT/info.jpg" type="image/jpeg" media="(max-width:750px)">
					  <img src="images/SSUWT/info.jpg">
					</picture>
							
					<div class="container no-padding">
						<div class="hs-caption">
							<div class="caption-inner circle wow flipInX bvi-speech">
							<br>
								<h4>ПОДГОТОВКА К ЕГЭ ПО ПРЕДМЕТУ: ИНФОРМАТИКА И ИКТ</h4>
								<p>Срок обучения: 7 месяцев (72 часа)
								Стоимость: 2.000 руб. в месяц
								Дата начала обучения: 18.09.23 (Идет набор)
								Форма обучения: очная/заочная</p>
								<br>
								
								
							</div>
						</div>
					</div>
					
				</div>
			  </div>
			</div>

			

		  
		  

		</div>
	</div>

	
	<section id="service" class="service">

		<div class="about_welcome_4 wow circle animate__zoomInDown bvi-speech">
			<div class="row">
				<h2>Подготовка к ЕГЭ</h2><br><br>
				<div>
					<p>
						Рабочая программа составлена на основе Методических рекомендаций ФИПИ, анализа типичных ошибок участников ЕГЭ 2023 года по информатике и ИКТ 
						Методических рекомендаций на 2023-2024 учебный год, Демонстрационного варианта КИМ ЕГЭ по информатике и ИКТ 2024 года, Кодификатора элементов 
						содержания и Спецификации КИМ. Цель обучения – повышение уровня предметной подготовки обучающихся по информатике и ИКТ; успешная сдача ЕГЭ.
					</p>
					<ul>
						<li>
							<b>Категория слушателей:</b> обучающиеся 10-11 классов.
						</li>

						<li>
							<b>Форматы обучения:</b><br>
							• групповая работа (мини-группы до 5 человек; группы от 6 до 15 человек);<br>
							• индивидуальная работа (репетиторство).
						</li>
						<li>
							<b>Формы обучения:</b><br>
							• очная;<br>
							• заочная с применением дистанционных образовательных технологий.
						</li>
						<li>
							<b>Срок обучения:</b> 7 месяцев (72 часа)<br>							
							Выдаваемый документ: свидетельство.<br>
						</li>
						<li>
							<b>Стоимость обучения:</b> 2000 руб. в месяц.<br>							
							Предусмотрена система скидок, подробнее см. приложения А, Б, В.<br>
						</li>
						<li>
							<b>Дата начала обучения: </b> 18 сентября 2023 г.<br>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</section>
	

	
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


 <div class="modal" data-modal="4">

	<div class="dialog__content">
		<div id="booking_pop" class="booking_pop">
			<h3>Оставить заявку на подготовку к ОГЭ</h3>
			<form class="book_online" id="bookingForm" action="php/booking.php" method="post">
				<div class="row">
					<div class="col-md-6">
						<label>Имя <span>*</span></label>                                    
						<input name="senderName2" id="senderName2" type="text" required="required" />
					</div>
					<div class="col-md-6">
						<label>Эл. почта <span>*</span></label>
						<input type="email" name="senderEmail2" id="senderEmail2" required="required"/>
					</div>
					<div class="col-md-6">
						<label>Телефон <span>*</span></label>
						<input name="senderPhone2" id="senderPhone2" type="text" required="required"/>
					</div>
					<div class="clearfix"></div>
					
					<div class="col-md-5">
						<button class = "btn-illumination" type="submit" >
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<a href="about_center.php" id="submit">Отправить</a>
						</button>
					</div>
					<div class="col-md-7">
						<p><em>*</em> Поля являются обязательными для заполнения</p>
					</div>
				</div>
			</form>
			<div id="sendingMessage2" class="statusMessage2">
				<p><i class="fa fa-spin fa-spinner"></i> Sending your message. Please wait...</p>
			</div>
			<div id="successMessage2" class="successmessage2">
				<p><i class="fa fa-check"></i> Thanks for sending your message! We'll get back to you shortly.</p>
			</div>
			<div id="failureMessage2" class="errormessage2">
				<p><i class="fa fa-close"></i> There was a problem sending your message. Please try again.</p>
			</div>
			<div id="incompleteMessage2" class="statusMessage2">
				<p><i class="fa fa-warning"></i> Please complete all the fields in the form before sending.</p>
			</div>

		</div>
		<button class="action b-close js-modal-close"><i class="fa fa-times"></i></button>
	</div>
	
 </div>
 

 


 

 
 <div class="overlay js-overlay-modal"></div>



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