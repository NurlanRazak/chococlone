
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>chocolife RN</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link href="{{asset('css/docs.min.css')}}" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>
@include('layouts.header')

					
				<nav class="navbar navbar-default" role="navigation" style="height:40px;" >
          <div class="container">
            <ul class="nav navbar-nav">
          <div class="navbar-header" style="margin-top: 14px;">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px; ">Все</a>
					
					
				  
				   
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px; ">Новые</a>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:red; margin-right: 20px;  ">Хиты продаж</a>
					</div>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Развлечения и отдых</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Активный отдых</a></li>
						<li><a href="#">Бассейны  </a></li>
						<li><a href="#">Караоке</a></li>
						<li><a href="#">Развлечение для детей</a></li>
						<li><a href="#">Парки развлечений</a></li>
						<li><a href="#">Кинотеатры</a></li>					
						<li><a href="#">Концерты и события квесты</a></li>
						<li><a href="#">Игры</a></li>
						<li><a href="#">Сауна,бани</a></li>
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Красота и здоровье</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Барбершоп</a></li>
						<li><a href="#">SPA услуги </a></li>
						<li><a href="#">Массаж</a></li>
						<li><a href="#">Уход за волосами</a></li>
						<li><a href="#">Уход за лицом</a></li>
						<li><a href="#">Макияж</a></li>					
						<li><a href="#">Наращивание ресниц</a></li>
						<li><a href="#">Солярий</a></li>
						<li><a href="#">Коррекция фигуры</a></li>
						
					</ul>
				</li>
					
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Спорт</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Тренажерный зал</a></li>
						<li><a href="#">Танцы</a></li>
						<li><a href="#">Фитнес</a></li>
						<li><a href="#">Йога</a></li>
						
						
					</ul>
				</li>

					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Товары</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Одежды и аксессуары</a></li>
						<li><a href="#">Товары для детей</a></li>
						<li><a href="#">Цветы и подарки</a></li>
						<li><a href="#">Электроника</a></li>
						
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Услуги</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Химчистка и клининг</a></li>
						<li><a href="#">Обучающие курсы </a></li>
						<li><a href="#">Развивающие курсы для детей</a></li>
						<li><a href="#">Языковые курсы для детей</a></li>
						<li><a href="#">Фото, видео</a></li>
						<li><a href="#">Автоуслуги</a></li>					
						
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Еда</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Рестораны, кафе и пабы</a></li>
						<li><a href="#">Доставка </a></li>
						<li><a href="#">Продукты питания</a></li>
						<li><a href="#">Банкеты</a></li>
						
						
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:black; margin-right: 20px;" >Туризм и отели</a>
				    <ul class="dropdown-menu">
					

						<li><a href="#">Санаторий</a></li>
						<li><a href="#">Гостиницы, отели </a></li>
						<li><a href="#">Внутренний туризм</a></li>
						<li><a href="#">Отдых за границей</a></li>
						<li><a href="#">Боровое</a></li>
						
					</ul>
				</li>

				</ul>
				
				</div>
			
</nav>
<br>
<br>
<br>
<nav class="navbar navbar-default" role="navigation" style="height:40px;" >
					<div class="container">
						<table>
							<tbody>
								<tr>
									<td class="e-sort_title">Сортировать: </td>
									<td class="js-mainpage-deal-sorting">
										<input id="e-sort-order_type_popular" type="radio" name="order_type" value="popular" data-t="1" data-c="1" style="margin-left: 90px;">
										<label for="e-sort-order_type_popular">популярные</label>
									</td>

									<td class="js-mainpage-deal-sorting">
										<input id="sortByCost" type="radio" name="cost" value="popular" data-t="1" data-c="1" style="margin-left: 100px;">
										<label for="e-sort-order_type_popular">цены</label>
									</td>

									<td class="js-mainpage-deal-sorting">
										<input id="e-sort-order_type_popular" type="radio" name="order_type" value="popular" data-t="1" data-c="1" style="margin-left: 100px;">
										<label for="e-sort-order_type_popular">скидка</label>
									</td>
									<td class="js-mainpage-deal-sorting">
										<input id="e-sort-order_type_popular" type="radio" name="order_type" value="popular" data-t="1" data-c="1" style="margin-left: 100px;">
										<label for="e-sort-order_type_popular">новые</label>
									</td>

									<td class="js-mainpage-deal-sorting">
										<input id="e-sort-order_type_popular" type="radio" name="order_type" value="popular" data-t="1" data-c="1" style="margin-left: 100px;">
										<label for="e-sort-order_type_popular">рейтинг</label>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</nav>
 <div class="block1">
 	
 </div>
 <div class="container">
   <div class="row">
   
		@foreach($show as $var1)
        @include('include.sorted')
	  @endforeach
  		{{$show->links()}}
  </div>
</div>


 <!--<ul class="products clearfix">

	<li class="product-wrapper">
		<a href="" class="product"> <div class="product-photo">
	<img src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/40000/39522/310x240/5_201801300410315173077832563.jpg" class="e-deal__img" alt="Маникюр и педикюр с гелевым покрытием в салоне красоты Zara’s Studio. Скидка до 66%!" >
</div></a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/39000/38641/310x240/10_2017103104103115094445710828.jpg" class="e-deal__img">

			</div>
		</a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://img.s3.chocolife.me/static/upload/images/deal/for_plate/40354.jpg?v=1519102264" class="e-deal__img">

			</div>


		</a>


	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://img.s3.chocolife.me/static/upload/images/deal/for_plate/40156.jpg?v=1518505499" class="e-deal__img">

			</div>
		</a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/41000/40177/310x240/3_2017122501121215141859328003.jpg" class="e-deal__img">

			</div>
		</a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://img.s3.chocolife.me/static/upload/images/deal/for_plate/40354.jpg?v=1519102264" class="e-deal__img">

			</div>
		</a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://static.chocolife.me/static/upload/images/deal/for_deal_page/41000/40177/310x240/3_2017122501121215141859328003.jpg" class="e-deal__img">

			</div>
		</a>
	</li>
	<li class="product-wrapper">
		<a href="" class="product">
			<div class="product-photo">
           <img  alt="Прием терапевта, эмбриолога и генетика, а также ЭКГ, анализы и кариограмма со скидкой до 68% в медицинском центре ЭКОМЕД!" src="https://img.s3.chocolife.me/static/upload/images/deal/for_plate/40156.jpg?v=1518505499" class="e-deal__img">

			</div>
		</a>
	</li>

</ul>
-->




<section class="txt1">
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			 <div class="col-md-10">
			 	<div class="block-footer">
			 	<div class="onsuret">
	<img  src="img/footerimg.jpg"></div>
	<div class="soltxt">
	<h2>ВСЕ СКИДКИ И АКЦИИ В ОДНОМ МЕСТЕ!</h2>
	<p>Человеку для счастья нужно совсем мало: оставаться здоровым, иметь крепкую семью и хорошую работу, хранить гармонию души. Но иногда это не все. Не хватает какого-то приятного дополнения, например, получить бешеную скидку на популярную услугу. И этот бонус можем подарить вам именно мы! Благодаря купонам, приобретенным в нашем сервисе, вы сможете стать самым счастливым человеком в любой точке города Алматы.

Мы предлагаем скидки в Алматы на самые разнообразные виды деятельности и услуги, которые распределены по таким рубрикам:</p>
</div>
<br>
<ul class="asting"> <li>полная подборка (все самые актуальные);</li> <li>новые (самые свежие предложения);</li> <li>санатории (отдых и&nbsp;лечение в&nbsp;наиболее престижных санаториях);</li> <li><a href="https://ala.chocolife.me/krasota/">красота</a> (услуги салонов красоты, а&nbsp;также отдельных мастеров);</li> <li>здоровье и&nbsp;спорт (услуги спортзалов, фитнес-клубов и&nbsp;т.&nbsp;д.);</li> <li>еда (рестораны, кондитерские, суши, доставка и&nbsp;т.&nbsp;д.);</li> <li>развлечения (караоке, сауна и&nbsp;т.&nbsp;д.);</li> <li>услуги (авто-услуги, свадебные услуги и&nbsp;т.&nbsp;д.);</li> <li>товары (для школы, для дома и&nbsp;т.&nbsp;д.);</li> <li>отдых (туризм, гостиницы, отели и&nbsp;т.&nbsp;д.).</li> </ul>
<p class="sltxt">ПОКУПАЙТЕ КУПОНЫ И ЭКОНОМЬТЕ НА УСЛУГАХ И ТОВАРАХ!
В нашем купонном сервисе Шоколайф можно приобрести горящие скидки и купоны в Алматы с самым разным акционным диапазоном: от 30% до 90%. На сайте представлено более 530 разных возможностей для реализации личных планов. Например, вы можете в очередной раз посетить «Sarafan cafe», но теперь со скидочным купоном на 50% оставить там намного меньшую сумму. Такой купон обойдется вам всего в 399 тенге.

Срок действия каждой акции в Алматы указан на нашем сайте. Эта информация поможет приобрести купон для посещения вами не только интересного предложения, но и оптимального во времени. Чтобы быстрее отыскать нужную акцию в нашем агрегаторе скидок, воспользуйтесь удобным поиском сайта онлайн по всем имеющимся рубрикам.

Отныне и навсегда сайт акций и скидок в Алматы должен стать вашим лучшим другом и помощником! С нашей помощью вы сэкономите уйму денежных средств, невозвратимое время и дорогое здоровье. Удобное оформление сайта, правильно подобранная цветовая гамма, удобство в расположении рубрик не оставят равнодушным ни молодежь, ни людей преклонного возраста.

Скидочные купоны в Алматы, представленные у нас — это гарантия настоящего качества. Мы ручаемся за каждого своего компаньона, уверены в безупречности каждого предложения, ведь все проверено лично нами! Если вы не успели применить скидку по назначению, или вас не устроило обслуживание — звоните по телефону, указанному на сайте, и наша служба заботы о пользователях обязательно даст вам все разъяснения. При возникновении вопросов или предложений также можно связаться с нами через форму обратной связи.</p></div>
			 </div>
			<div class="col-md-1"></div>
		</div>
	</div>
</section>




@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/js/ajax.js"></script>
</body>
</html>
