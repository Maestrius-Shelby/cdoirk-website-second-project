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
						<li>
							<div class="language wow circle bounceInLeft">
								<img src="images/lang/lang__ru.png" alt="ru" data-google-lang="ru" class="language__img">
								<img src="images/lang/lang__en.png" alt="en" data-google-lang="en" class="language__img">
								<a href="#" class="my-class"><img id="specialButton" style="cursor:pointer;" src="https://lidrekon.ru/images/special.png" alt="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" title="ВЕРСИЯ ДЛЯ СЛАБОВИДЯЩИХ" /></a>
								
							 </div>
						</li>
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

							<li class="tb-wave">
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
			<nav class="menu-wrapper">
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
			              $('.menu-wrapper').toggleClass('active')
			        })
			      })
			</script>

		</div>
	</header>
	
	<div class="close-btn fa fa-times"></div>

	
		
	<div class="slider wow circle animate__zoomIn">

                    <div class="itc-slider" data-autoplay="true" data-interval="7000" data-loop="true" data-slider="itc-slider">
                        <div class="itc-slider-wrapper">
                          <div class="itc-slider-items">

                            <div class="itc-slider-item">
                                <picture>
                                  <source srcset="images/SSUWT/1.jpg" type="image/jpeg" media="(min-width:970px)">
                                  <source srcset="images/SSUWT/1.jpg" type="image/jpeg" media="(min-width:750px)">
                                  <source srcset="images/SSUWT/10.jpg" type="image/jpeg" media="(max-width:750px)">
                                  <img src="images/SSUWT/1.jpg">
                                </picture>
									
								<div class="container no-padding">
									<div class="hs-caption">
										<div class="caption-inner circle wow flipInX bvi-speech">
											<h4>Программы профессиональной переподготовки</h4>
											<p>Включите дополнительное образование в свои планы развития!</p>
											<br>
											<button class = "btn-illumination" type="submit" >
												<span></span>
												<span></span>
												<span></span>
												<span></span>
												<a href="about_center.php">Подробнее</a>
											</button>
											
										</div>
									</div>
								</div>
								
                            </div>

                           <div class="itc-slider-item">
                               <picture>
                                  <source srcset="images/SSUWT/5.png" type="image/png" media="(min-width:970px)">
                                  <source srcset="images/SSUWT/5.png" type="image/png" media="(min-width:750px)">
                                  <source srcset="images/SSUWT/12.jpg" type="image/png" media="(max-width:750px)">
                                  <img src="images/SSUWT/5.png">
                                </picture>
                            </div>

                           <div class="itc-slider-item">
                                <picture>
                                   <source srcset="images/SSUWT/3.png" type="image/png" media="(min-width:970px)">
                                   <source srcset="images/SSUWT/3.png" type="image/png" media="(min-width:750px)">
                                   <source srcset="images/SSUWT/13.jpg" type="image/png" media="(max-width:750px)">
                                   <img src="images/SSUWT/3.png">
                                </picture>
                            </div>

                           <div class="itc-slider-item">
                                <picture>
                                    <source srcset="images/SSUWT/4.jpg" type="image/jpeg" media="(min-width:970px)">
                                    <source srcset="images/SSUWT/4.jpg" type="image/jpeg" media="(min-width:750px)">
                                    <source srcset="images/SSUWT/14.jpg" type="image/jpeg" media="(max-width:750px)">
                                    <img src="images/SSUWT/4.jpg">
                                </picture>
                            </div>
							<div class="itc-slider-item">
                                <picture>
                                    <source srcset="images/SSUWT/2.png" type="image/jpeg" media="(min-width:970px)">
                                    <source srcset="images/SSUWT/2.png" type="image/jpeg" media="(min-width:750px)">
                                    <source srcset="images/SSUWT/22.jpg" type="image/jpeg" media="(max-width:750px)">
                                    <img src="images/SSUWT/2.png">
                                </picture>
                            </div>

                          </div>
                        </div>
                        <button class="itc-slider-btn itc-slider-btn-prev"></button>
                        <button class="itc-slider-btn itc-slider-btn-next"></button>

                        <ol class="itc-slider-indicators">
                            <li class="itc-slider-indicator" data-slide-to="0"></li>
                            <li class="itc-slider-indicator" data-slide-to="1"></li>
                            <li class="itc-slider-indicator" data-slide-to="2"></li>
                            <li class="itc-slider-indicator" data-slide-to="3"></li>
							<li class="itc-slider-indicator" data-slide-to="4"></li>
                        </ol>

                      
                      

                    </div>
                </div>

	
				<section id="service" class="service">
	<div class="about_welcome bvi-speech circle wow animate__lightSpeedInRight">
		<div class="row">
			<h2><B>Добро пожаловать в Центр дополнительного образования и развития компетенций!</B></h2><br>
			<div>
				<p>
					В современных условиях не всегда достаточно знаний, полученных при обучении по выбранной специальности. Компетенций у современного профессионала 
					должно быть много. В этом случае можно воспользоваться возможностью получения дополнительного профессионального образования. Программы дополнительного 
					профессионального образования практикоориентированы и позволяют за более короткий срок (от нескольких часов до нескольких недель) получить новую профессию, 
					приобрести актуальные профессиональные компетенции или расширить свои знания в той или иной предметной области.
				</p>
				<p>
					В Центре реализуется как дополнительное образование для школьников (подготовка к ОГЭ, ЕГЭ и олимпиадам различного уровня), так и дополнительное образование для 
					взрослых (повышение квалификации, профессиональная переподготовка и стажировки). Обучение проходит не только в очном формате, но и заочном с применением 
					дистанционных образовательных технологий.
				</p>
			</div>
		</div>
	</div>

<div class="programs_catalog bvi-speech wow animate__lightSpeedInLeft">
	<h2><B>Каталог образовательных программ</B></h2><br>
</div>

<div class="buttons bvi-speech">
	<button class="blob-btn" id="prog1-button">
		Общеобразовательные программы
	  <span class="blob-btn__inner">
		<span class="blob-btn__blobs">
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		</span>
	  </span>
	</button>
	<button class="blob-btn" id="prog2-button">
		Повышение квалификации
	  <span class="blob-btn__inner">
		<span class="blob-btn__blobs">
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		</span>
	  </span>
	</button>
	<button class="blob-btn" id="prog3-button">
		Профессиональная переподготовка
	  <span class="blob-btn__inner">
		<span class="blob-btn__blobs">
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		</span>
	  </span>
	</button>
	<button class="blob-btn" id="prog4-button">
		Программы стажировок
	  <span class="blob-btn__inner">
		<span class="blob-btn__blobs">
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		  <span class="blob-btn__blob"></span>
		</span>
	  </span>
	</button>
</div>

  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
	<defs>
	  <filter id="goo">
		<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
		<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
		<feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
	  </filter>
	</defs>
  </svg>


  

<div class="programs_text bvi-speech wow animate__lightSpeedInRight" id="prog_text1" style="display: block;">
	<h2><B>Общеобразовательные программы - это программы по подготовке старшеклассников к ОГЭ и ЕГЭ, а также обучение основам других сфер.</B></h2><br>
	<p>
		Целью подготовительных курсов является повторение всей школьной программы, детальное разъяснение сложных тем, 
		решение типовых заданий. Это серьезная дополнительная подготовка, которая увеличивает шансы поступления в престижный колледж или университет.</p>
		<ul>
		<h2>Подготовка к ОГЭ:</h2><br>
		<li><a href="OGE_Russkiy_Yazyk.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Русский язык</a></li>	
		<li><a href="OGE_Math.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Математика</a></li>	
		<li><a href="OGE_Informatika_I_IKT.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Информатика и ИКТ</a></li>			
		<br><h2>Подготовка к ЕГЭ:</h2><br>
		<li><a href="EGE_Russkiy_Yazyk.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Русский язык</a></li>	
		<li><a href="EGE_Math.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Математика</a></li>	
		<li><a href="EGE_Informatika_I_IKT.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Информатика и ИКТ</a></li>	
		<li><a href="EGE_Fizika.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Физика</a></li>	
		<li><a href="EGE_Obshchestvoznaniye.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Обществознание</a></li>		
		<br><h2>Общеобразовательные программы:</h2><br>
		<li><a href="General_English.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Английский для начинающих</a></li>
		<li><a href="Komp_Gram.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Компьютерная грамотность для начинающих</a></li>
		<li><a href="Bloger.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> От журналистики к блогерству</a></li>
		</ul>
</div>

<div class="programs_text" id="prog_text2" style="display: none;">
	<h2><B>Программы повышения квалификации (от 16 академических часов)</B></h2><br>
	<p>
		В современном мире стандарты работы меняются, а новой информации становится все больше. Очень важно улучшать свои знания и постоянно совершенствовать навыки, 
		чтобы не отставать от прогресса и оставаться востребованным специалистом. Согласно профессиональным стандартам, курсы повышения квалификации следует проходить не реже, 
		чем раз в 5 лет. Удостоверение о повышении квалификации выдается лицам, имеющим (или завершающим получение) высшего или среднего профессионального образования.</p>
		<ul>
		<li><a href="Ohrana_truda.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Общие вопросы охраны труда</a></li>
		<li><a href="Recruitment.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Рекрутер и инструменты подбора персонала</a></li>
		<li><a href="Ber_pro.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Бережливое производство</a></li>
		<li><a href="Inclusiv.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Основы инклюзивного образования</a></li>
		<li><a href="First_aid.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Принципы организации и оказания первой помощи</a></li>
		<li><a href="Web_design.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Web-дизайн. Визуальное оформление и верстка сайта</a></li>
		<li><a href="Astra_linux.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Astra Linux для пользователей</a></li>
		<li><a href="Mashine.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Машинист специального крана</a></li>
		<li><a href="Operator.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Оператор конвейера</a></li>			
		<li><a href="Strop.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Подготовка стропальщиков</a></li>
		<li><a href="Svarka.php" class="program_link"> <img src="images/SSUWT/Link.png"  alt=""/> Оборудование и технология сварочного производства</a></li>
		</ul>
</div>

<div class="programs_text" id="prog_text3" style="display: none;">
	<h2><B>Программы профессиональной переподготовки (от 250 академических часов)</B></h2><br>
	<p>
		Программы профессиональной переподготовки могут заинтересовать тех, кто хочет работать не по той специальности, которая была получена в университете или колледже. 
		На базе диплома об образовании можно получить диплом о профессиональной переподготовке. После того, как вы пройдете курсы профпереподготовки, у вас появится возможность 
		устроиться на ту работу, которая вам действительно интересна.<br><br>

		Дополнительная профессиональная программа может реализовываться полностью или частично в форме стажировки. Стажировка осуществляется в целях:<br>
		– изучения передового опыта, в том числе зарубежного;<br>
		– закрепления теоретических знаний, полученных при освоении программ профессиональной переподготовки или повышения квалификации;<br>
		– приобретения практических навыков и умений для их эффективного использования в работе.</p>
		<ul>
			<li><a href="Podgotovka_svar.php" class="program_link" > <img src="images/SSUWT/Link.png"  alt=""/> Подготовка, сборка, сварка и зачистка после сварки сварных швов элементов конструкции (изделий, узлов, деталей)</a></li>
		
		</ul>
</div>

<div class="programs_text" id="prog_text4" style="display: none;">
	<h2><B>Программы стажировок</B></h2><br>
	<p>
		Стажировки полезны начинающим работникам для получения важных знаний в своей сфере.</p>
		<ul>
			<h2><B>На данный момент программы отсутствуют</B></h2><br>
		</ul>
</div>




<script>
	const buttons = document.querySelectorAll('.blob-btn');

	buttons.forEach(button => {
	    button.addEventListener('click', () => {
	        buttons.forEach(b => b.classList.remove('active'));
	        button.classList.add('active');
	    });
	});


	const button1 = document.getElementById('prog1-button');
	 const button2 = document.getElementById('prog2-button');
	 const button3 = document.getElementById('prog3-button');
	 const button4 = document.getElementById('prog4-button');
	 
	 const div1 = document.getElementById('prog_text1');
	 const div2 = document.getElementById('prog_text2');
	 const div3 = document.getElementById('prog_text3');
	 const div4 = document.getElementById('prog_text4');
	 
	 function changeButtonClass(button) {
	   button.classList.add('blob-btn-active');
	 }
	 
	 function changeButtonClassBack(button) {
	   button.classList.remove('blob-btn-active');
	 }
   
	   button1.addEventListener('click', function() {
	 div1.style.display = 'block';
	 div2.style.display = 'none';
	 div3.style.display = 'none';
	 div4.style.display = 'none';
	 changeButtonClass(button1);
	 changeButtonClassBack(button2);
	 changeButtonClassBack(button3);
	 changeButtonClassBack(button4);
   });
   
   button2.addEventListener('click', function() {
	 div1.style.display = 'none';
	 div2.style.display = 'block';
	 div3.style.display = 'none';
	 div4.style.display = 'none';
	 changeButtonClass(button2);
	 changeButtonClassBack(button1);
	 changeButtonClassBack(button3);
	 changeButtonClassBack(button4);
   });
   
   button3.addEventListener('click', function() {
	 div1.style.display = 'none';
	 div2.style.display = 'none';
	 div3.style.display = 'block';
	 div4.style.display = 'none';
	 changeButtonClass(button3);
	 changeButtonClassBack(button1);
	 changeButtonClassBack(button2);
	 changeButtonClassBack(button4);
   });
   
   button4.addEventListener('click', function() {
	 div1.style.display = 'none';
	 div2.style.display = 'none';
	 div3.style.display = 'none';
	 div4.style.display = 'block';
	 changeButtonClass(button4);
	 changeButtonClassBack(button1);
	 changeButtonClassBack(button2);
	 changeButtonClassBack(button3);
   });
   
</script>


	<br><br><br>
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
							<a href="https://www.ssuwt.ru/"><img src="images/SSUWT/logo.png"  alt=""/></a>
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




<script src="js/bvi/bvi.js"></script>
<script src="js/bvi/bvi.min.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/navigation/scroll.js"></script>









   
<script> 
var scrollHeight = 310; 

window.addEventListener("scroll", function() {
    var menuWrapper = document.querySelector(".menu-wrapper");

    if (window.pageYOffset > scrollHeight) {
        menuWrapper.classList.add("sticky");
    } else {
        menuWrapper.classList.remove("sticky");
    }
});

var menuContainer = document.querySelector(".menu-container");
var menuWrapper = document.querySelector(".menu-wrapper");
var menuBottom = menuContainer.offsetTop + menuContainer.offsetHeight; // Координата нижней границы меню

var isSticky = false; // Флаг для отслеживания, прикреплено ли меню

window.addEventListener("scroll", function() {
    if (window.pageYOffset > menuBottom && !isSticky) {
        menuContainer.classList.add("sticky2");
        menuWrapper.classList.add("sticky2");
        isSticky = true; // Меню прикреплено
    } else if (window.pageYOffset <= menuBottom && isSticky) {
        menuContainer.classList.remove("sticky2");
        menuWrapper.classList.remove("sticky2");
        isSticky = false; // Меню вернулось на своё место
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