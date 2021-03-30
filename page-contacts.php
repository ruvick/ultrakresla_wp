<?php

/*
Template Name: Шаблон страницы Контакты
WP Post Template: Шаблон страницы Контакты
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page"> 

	<section class="contacts"> 
		<div class="container">

			<div class="info__benefit benefit d-flex">

				<div class="benefit__item benefit__item_l">
					<p>
						ПОЛУЧИТЕ КЕШБЕК ПРИ <br> 
						СОВЕРШЕНИИ ЗАКАЗА
					</p>
				</div>

				<div class="benefit__item benefit__item_c">
					<p>
						ОДНАКО НЕЗАВИСИМОСТЬ <br>
						ПОЗИЦИИ МЫСЛИТЕЛЯ 
					</p>
				</div>

				<div class="benefit__item benefit__item_r">
					<p>
						ПОЗИЦИИ МЫСЛИТЕЛЯ <br>
						ЕГО КАТОЛИЧЕСКИМ ТЕОЛОГАМ 
					</p>
				</div>

			</div>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<h1><?php the_title();?></h1> 

			<div class="contacts__row d-flex">
				
				<div class="contacts__col contacts__col_l">
					<ul class="contacts__list-address list-address">
						<li><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="list-address__phone contacts-list-icon"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a></li>
						<li class="list-address__addres contacts-list-icon"><? echo carbon_get_theme_option("as_address"); ?></li>
						<li class="list-address__email contacts-list-icon">
							<p>
								Для оформления заказа просим направлять заявки в свободной 
								форме на электронную почту  <a href="mailto:<? echo $mail = carbon_get_theme_option("as_email"); ?>"><? echo $mail; ?></a>
							</p>
						</li>
					</ul>

					<h3>Реквизиты</h3>
					<ul class="contacts__list-requisites">
						<li> <? echo carbon_get_theme_option("as_company"); ?></li>
						<li> <? echo carbon_get_theme_option("as_ur-address"); ?></li>
						<li>ИНН <? echo carbon_get_theme_option("as_inn"); ?></li>
						<li>КПП <? echo carbon_get_theme_option("as_kpp"); ?></li>
						<li>ОГРН <? echo carbon_get_theme_option("as_orgn"); ?></li>
						<li>Расчетный счет: <? echo carbon_get_theme_option("as_rs"); ?></li>
						<li>БИК <? echo carbon_get_theme_option("as_bik"); ?></li>
						<li>Корреспондентский счет <? echo carbon_get_theme_option("as_ks"); ?></li>
					</ul>
				</div>

				<div class="contacts__col">
					<form action="#" class="contacts__form form">
						<div class="form__input-block d-flex">
							<input type="text" placeholder="Имя" class="form__input input">
							<input type="tel" placeholder="Телефон" class="form__input input__phone">
						</div>
						<textarea placeholder="Сообщение" name="" id="" cols="30" rows="10"></textarea>
						<button type="submit" class="form__btn btn">Отправить</button>
					</form>
				</div>

			</div>

			<div class="block__map" id="map"></div>
			<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

			<script>
					// Яндекс карта
					ymaps.ready(init);

					function init () {
						var myMap = new ymaps.Map("map", {
        				// Координаты центра карты
        				center:[<?php echo carbon_get_theme_option('map_point') ?>],
        				// Масштаб карты
        				zoom: 17,
        				// Выключаем все управление картой
        				controls: []
        			}); 
						
						var myGeoObjects = [];
						
    						// Указываем координаты метки
    						myGeoObjects = new ymaps.Placemark([<?php echo carbon_get_theme_option('map_point') ?>],{
    							balloonContentBody: 'ООО «АВТОМОБИЛЬНЫЕ СИДЕНЬЯ»',
    						},{
    							iconLayout: 'default#image',
                    // Путь до нашей картинки
                    iconImageHref: '<?php bloginfo("template_url"); ?>/img/icons/map.png',  
                    // Размеры иконки
                    iconImageSize: [23, 34],
                    // Смещение верхнего угла относительно основания иконки
                    iconImageOffset: [-5, -40]
                  });
    						
    						var clusterer = new ymaps.Clusterer({
    							clusterDisableClickZoom: false,
    							clusterOpenBalloonOnClick: false,
    						});
    						
    						clusterer.add(myGeoObjects);
    						myMap.geoObjects.add(clusterer);
    							// Отключим zoom
    							myMap.behaviors.disable('scrollZoom');

    						}
    					</script>

    				</div>
    			</section>


    			<section class="cashback">
    				<div class="container">
    					<h2>Получите кешбек при совершении заказа</h2>
    					<p>Возвращаем 10% от стоимости приобретенного кресла!</p>
    					<a href="#" class="cashback__btn btn">Получить кешбек</a>
    				</div>
    			</section>

    			<section id="questions" class="questions">
    				<div class="container">
    					<h2>Часто задаваемые вопросы</h2>

    					<div class="spollers__col">

    						<div class="block__spollers spollers">

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">На какие автомобили устанавливаются кресла?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">Доставите кресло в любой город?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">Можно ли сделать на внешней части кресла вышивку логотипа?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>
    						</div>

    						<div class="block__spollers spollers">

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">Можно ли выбрать цвет и материал кресла?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">Осуществляете ли установку сидений?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>

    							<div class="spollers__item">
    								<div class="spollers__title spoller closeall">Можно ли перешить заднее сиденье в цвет передних кресел?</div>
    								<div class="spollers__text">
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    								</div>
    							</div>

    						</div>
    					</div>
    				</div>
    			</div>
    		</section>

    	</main>

    	<?php get_footer();