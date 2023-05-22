<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="images/logo.webp" type="image/x-icon">
		<link rel="stylesheet" href="css/style.min.css" />
		<link rel="stylesheet" href="css/main.min.css" />
		<title>MEDOL - Medical Online Services</title>
	</head>
	<body>

		<aside class="sidebar">
			<div class="sidebar__inner">
				<img class="sidebar__close" src="images/x-btn.webp" alt="x btn">

				<div class="header__item">
					<img class="header__icon" src="images/location.svg" alt="header icon">
					<div class="header__info">{{$contact['address_'.\App::getLocale()]}}</div>
				</div>

				<div class="header__item">
					<img class="header__icon" src="images/phone.svg" alt="header icon">
					<div class="header__info">
						<a class="header__phone" href="tel:+998712766253">{{$contact->phone1}}</a>
						<a class="header__phone" href="tel:+998712766254">{{$contact->phone2}}</a>
					</div>
				</div>

				<a class="header__item" href="#">
					<img class="header__icon" src="images/search.svg" alt="header icon">
					Search
				</a>
				<div class="header__icon header__icon_block">
					<img src="images/facebook.svg" alt="header icon">
					<span>{{ __('words.facebook') }}</span>
				</div>
			</div>
		</aside>

		<header class="header">
			<div class="container">
				<div class="header__top">
					
				<div class="header__item header__location">
					<img class="header__icon" src="images/location.svg" alt="header icon">
					<div class="header__info">{{$contact['address_'.\App::getLocale()]}}</div>
				</div>

				<div class="header__item header__phones">
					<img class="header__icon" src="images/phone.svg" alt="header icon">
					<div class="header__info">
						<a class="header__phone" href="tel:+998712766253">{{$contact->phone1}}</a>
						<a class="header__phone" href="tel:+998712766254">{{$contact->phone2}}</a>
					</div>
				</div>

				<a href="/" class="logo"><img src="images/logo.webp" alt="logo"></a>


				<img class="header__icon header__search" src="images/search.svg" alt="header icon">
				<a href="{{$contact->facebook}}">
					<div class="header__icon header__icon_block header__facebook">
						<img src="images/facebook.svg" alt="header icon">
						<span>{{__('words.facebook')}}</span>
					</div>
				</a>
	
	
					<div class="header-dropdown">
						<?php
						if(\App::getLocale() == 'ru'){?>
							<div class="header-dropdown__active">
							<img class="header-icon" src="images/russia.webp" alt="flag">
							<span>Русский</span>
							</div>
						<?php } elseif(\App::getLocale() == 'uz'){?>
								<li class="header-dropdown__active">
								<img class="header-icon" src="images/uzbekistan.webp" alt="flag">
								<span>O'zbek</span>
								</li>
						<?php }else{ ?>
								<li class="header-dropdown__active">
									<img class="header-icon" src="images/united-kingdom.webp" alt="flag">
									<span>Enlish</span>
								</li>
						<?php }	?>
						<ul class="header-dropdown__list">
							<a href="/lang/ru" 
							<?= \App::getLocale()=='ru'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/russia.webp" alt="flag">
								<span>Русский</span>
							</a>
							<a href="/lang/uz"
							<?= \App::getLocale()=='uz'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/uzbekistan.webp" alt="flag">
								<span>O'zbek</span>
							</a>
							<a href="/lang/en"
							<?= \App::getLocale()=='en'?'style="display: none;"' : ' class="header-dropdown__item"';?>>
								<img class="header-icon" src="images/united-kingdom.webp" alt="flag">
								<span>Enlish</span>
							</a>
							
						</ul>
						<img class="header-dropdown__arrow" src="images/arrow-down.svg" alt="arrow">
						
					</div>

					<div class="header-btn">
						<div class="header-btn__line"></div>
						<div class="header-btn__line"></div>
						<div class="header-btn__line"></div>
					</div>
	
				</div>
				<nav class="header__menu">
					<a class="header__link" href="#">{{__('words.shop')}}</a>
					<a class="header__link active" href="#">{{__('words.about')}}</a>
					<a class="header__link" href="#">{{__('words.products')}}</a>
					<a class="header__link" href="#">{{__('words.service')}}</a>
					<a class="header__link" href="#">{{__('words.promotons')}}</a>
					<a class="header__link" href="#">{{__('words.feedbake')}}</a>
				</nav>
				<div class="header__slider">
					@foreach ($slides as $slide)
					<div class="header__slide">
						<div class="header__content">
							<h1 class="header__title">{{ $slide['title_'.\App::getLocale()]}}</h1>
							<p class="header__text">{{ $slide['description_'.\App::getLocale()]}}</p>
							<button class="btn">{{__('words.more')}}</button>
						</div>
						<img class="header__img" src="{{Voyager::image($slide->image)}}" alt="header img">
					</div>
					@endforeach
				</div>

				<div class="header-dots">
					<div class="header-dots__item"></div>
					<div class="header-dots__item active"></div>
					<div class="header-dots__item"></div>
				</div>
			</div>
		</header>

		<div class="container">
			<!-- === PRODUCTS === -->

			 <section class="products">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.products')}}</h1>
				<main class="products__inner">
					@foreach ($products as $product)
						<div class="products__item" data-aos-offset="100" data-aos="zoom-out">
							<img class="products__img" src="{{Voyager::image($product->image)}}" alt="products img">
							<h3 class="products__title">{{ $product['title_'.\App::getLocale()]}}</h3>
							<button class="btn">{{__('words.view')}}</button>
						</div>
					@endforeach
				</main>

				<a class="link" href="#">{{__('words.go_catalog')}}</a>
			</section> 
			
			<!-- === SERVICE === -->

			 <section class="service">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.service')}}</h1>

				<div class="service__inner">

					@foreach ($services as $service)
					<div class="service__card" data-aos-duration="1000" data-aos-offset="100" data-aos="fade-left">
						<div class="service__img">
							<img src="{{Voyager::image($service->image)}}" alt="service">
						</div>
							<div class="service__info">
								<h3 class="service__title">{{$service['title_'.\App::getLocale()]}}</h3>
								<p class="service__text text">{{$service['description_'.\App::getLocale()]}}</p>
								<button class="btn service__btn">{{__('words.more')}}</button>
							</div>
						</div>
					@endforeach
				</div>
			</section> 
			
			<!-- === COMPANY === -->

			 <section class="company">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.about')}}</h1>

				<div class="company__inner">
					<div class="company__wrapper" data-aos-offset="100" data-aos-duration="1000" data-aos="zoom-in">
						<div class="company__circle company__circle_1">
							<div class="company__circle company__circle_2">
								<div class="company__circle company__circle_3">
									<img class="company__logo" src="{{Voyager::image($about->image)}}" alt="logo">
								</div>
							</div>
						</div>
					</div>
	
					<div class="company__content" data-aos-offset="100" data-aos-duration="1000" data-aos="fade-right">
						<img class="company__content-logo" src="{{Voyager::image($about->image)}}" alt="logo">
						<p class="company__text text">{{$about['description_'.\App::getLocale()]}}</p>
	
						<button class="btn">{{__('words.learn_more')}}</button>
					</div>
				</div>


			</section> 
			
			<!-- === NEWS === -->

			 <section class="news">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.new')}}</h1>
				<main class="news__slider">
					@foreach ($news as $new)
						
					<div class="news__item" data-aos-offset="100" data-aos="flip-left">
						<img class="news__img" src="{{Voyager::image($new->image)}}" alt="news img">
						<h3 class="news__title">{{$new['title_'.\App::getLocale()]}}</h3>
						<div class="news__date">{{$new['date']}}</div>
						<p class="news__text">{{$new['description_'.\App::getLocale()]}}</p>
						<button class="news__btn btn">{{__('words.more')}}</button>
					</div>
					@endforeach
			
				</main>

				<div class="news__links">
					<a class="link" href="#">{{__('words.view_news')}} </a>
					<a class="link" href="#">{{__('words.view_news')}}</a>
				</div>
			</section> 
			
			<!-- === PARTNER === -->

			 <section class="partner">
				<h1 class="title" data-aos-offset="200" data-aos="flip-up">{{__('words.partner')}}</h1>

				<div class="partner__slider">
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>
					<div class="partner__item">
						@foreach ($partners as $partner)
						<a class="partner__link" data-aos-offset="100" data-aos="flip-up" href="{{$partner->url}}"><img src="{{Voyager::image($partner->image)}}" alt="partner img"></a>
						@endforeach
					</div>

				</div>
				 
			</section> 
			
			<!-- === FOOTER === -->

		</div>
		 <footer class="footer">
			<div class="container">
				<div class="footer__top">
					<div class="footer__start">
						<div class="footer-contact">
							<h3 class="footer__title">{{__('words.contact')}}</h3>
							<div class="footer-contact__box">
								<div class="footer-contact__item">
									<img class="footer__icon" src="images/location.svg" alt="footer icon">
									<div class="footer__infos">{{$contact['address_'.\App::getLocale()]}}</div>
								</div>
								<div class="footer-contact__item">
									<img class="footer__icon" src="images/message.svg" alt="footer icon">
									<a class="footer__infos" href="mailto:info@medol.uz">{{$contact->email}}</a>
								</div>
							</div>
							<div class="footer-contact__box">
								<div class="footer-contact__phone">
									<img class="footer__icon" src="images/phone.svg" alt="header icon">
									<div class="footer__infos">
										<a class="footer__phone" href="tel:+998712766253">{{$contact->phone1}}</a>
										<a class="footer__phone" href="tel:+998712766254">{{$contact->phone2}}</a>
									</div>
								</div>
								<button class="btn">Оставить заявку</button>
							</div>
						</div>
						<div class="footer__info">
							<img src="images/logo.webp" alt="footer logo">
							<p class="text">{{__('words.our_goal')}}</p>
						</div>
					</div>
					<div class="footer__end">
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.about')}}</h3>
							<ul class="footer__list">
								<li><a class="footer__link" href="#">{{__('words.story')}}</a></li>
								<li><a class="footer__link" href="#">{{__('words.partner')}}</a></li>
								<li><a class="footer__link" href="#">{{__('words.jobs')}}</a></li>
							</ul>
						</div>
	
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.products')}}</h3>
							<ul class="footer__list">
								@foreach ($products as $product)
									
								<li><a class="footer__link" href="#" style="text-transform: lowercase ">{{$product['title_'.\App::getLocale()]}}</a></li>
								@endforeach
					
							</ul>
						</div>
						<div class="footer__item">
							<h3 class="footer__title">{{__('words.service')}}</h3>
							<ul class="footer__list">
								@foreach ($services as $service)
									
								<li><a class="footer__link" href="#" style="text-transform: lowercase " >{{ $service['title_'.\App::getLocale()]}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="footer__bottom">
					<span>© 2021 ООО «Medical Online Services»</span>
					<span>{{__('words.deweloper')}}: <a href="mailto:turgunaliyev.98@gmail.com">turgunaliyev.98@gmail.com</a></span>
					<span>{{__('words.design')}}: <a href="mailto:damingues92@gmail.com">damingues92@gmail.com</a></span>
				</div>
			</div>
		</footer>


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="js/libs.min.js"></script>
		<script src="js/script.js"></script>
	</body>
</html>