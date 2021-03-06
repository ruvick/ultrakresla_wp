<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="card"> 
		<div class="container"> 

		<?php get_template_part('template-parts/benefit-slider');?>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<div class="select-prod-block d-flex">

				<div class="select-prod-sl">
					<!-- Большой слайдер -->
					<div class="select-slider-big">

						<div class="select-slider-big__item">
							<a class="fancybox" data-fancybox="gallery" href="img/slider-product/sl-prod-01.jpg">
								<img  src="img/slider-product/sl-prod-01.jpg" alt="">
							</a>
						</div>

						<div class="select-slider-big__item">
							<a class="fancybox" data-fancybox="gallery" href="img/slider-product/sl-prod-02.jpg">
								<img  src="img/slider-product/sl-prod-02.jpg" alt="">
							</a>
						</div>

						<div class="select-slider-big__item">
							<a class="fancybox" data-fancybox="gallery" href="img/slider-product/sl-prod-03.jpg">
								<img src="img/slider-product/sl-prod-03.jpg" alt="">
							</a>
						</div>

						<div class="select-slider-big__item">
							<a class="fancybox" data-fancybox="gallery" href="img/slider-product/sl-prod-04.jpg">
								<img src="img/slider-product/sl-prod-04.jpg" alt="">
							</a>
						</div>

					</div>

					<!-- Малый слайдер -->
					<div class="select-prod-slider">

						<div class="select-prod-slider__item">
							<img src="img/slider-product/sl-prod-min-01.jpg" alt="">
						</div>

						<div class="select-prod-slider__item">
							<img src="img/slider-product/sl-prod-min-02.jpg" alt="">
						</div>

						<div class="select-prod-slider__item">
							<img src="img/slider-product/sl-prod-min-03.jpg" alt="">
						</div>

						<div class="select-prod-slider__item">
							<img src="img/slider-product/sl-prod-min-04.jpg" alt="">
						</div>

					</div>
				</div>

				<div class="actions__wrap"> 
					<h1>Спортивное сиденье Эксперт</h1>
					<div class="actions__row d-flex">

						<div class="actions-block">

							<div class="actions-block__availability">
								<div class="availability-flex d-flex">
									<div class="actions-block__price">Цена: <span class="price-summ">14 400</span> руб.</div>
									<div class="availability-order">ПОД ЗАКАЗ</div>
									<div class="availability-manuf">Производитель: <a href="#">ULTRA</a></div>
								</div>
								<div class="actions-block__social d-flex">
									<a href="#" class="actions-block__btn btn">Задать вопрос</a>
									<div class="actions-block__share d-flex">
										<p>Поделиться:</p>
										<div class="actions-block__social-icon d-flex">
											<a href="#" class="social-icon icon-factbook"></a>
											<a href="#" class="social-icon icon-twiter"></a>
											<a href="#" class="social-icon icon-vk"></a>
											<a href="#" class="social-icon icon-ok"></a>
										</div>
									</div>
								</div>
							</div>

							<div class="actions-block__text">
								<p>
									Сидения, которые устанавливаются в салон серийного авто 
									на сборочном конвейере, представляют собой минимум во 
									всем комфорте, в безопасности и, что наиболее важно.
								</p>
							</div>

						</div>

						<div class="actions__analogs-block analogs-block">
							<p>Ближайшие аналоги:</p>
							<div class="analogs-block__flex-card d-flex">

								<a href="#" class="analogs-block__item-card">
									<img src="img/analogs-01.jpg" alt="">
									<p>12 400 руб.</p>
								</a>

								<a href="#" class="analogs-block__item-card">
									<img src="img/analogs-02.jpg" alt="">
									<p>24 900 руб.</p>
								</a>

								<a href="#" class="analogs-block__item-card">
									<img src="img/analogs-03.jpg" alt="">
									<p>9 900 руб.</p>
								</a>

								<a href="#" class="analogs-block__item-card">
									<img src="img/analogs-04.jpg" alt="">
									<p>24 900 руб.</p>
								</a>

							</div>
						</div>

					</div>
				</div>

			</div>

		</div>
	</section>

	<section class="card-text d-flex">
		<div class="container">

			<div class="block__tabs tabs">

				<nav class="block__nav">
					<div class="block__navitem tab__navitem active">Параметры</div>
					<div class="block__navitem tab__navitem">Описание</div>
					<div class="block__navitem tab__navitem">Дополнительные опции</div>
					<div class="block__navitem tab__navitem">Аксессуары</div>
				</nav>

				<div class="block__items">
					<div class="block__item tab__item active">

						<div class="tab__item_col">
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Артикул	 
								</div>
								<div class="tech-text__item">
									200314
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип сиденья
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Спортивное
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Назначение
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Тюнинг, Спорт, Автосимулятор, Аттракцион
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Подголовник
								</div>
								<div class="tech-text__item">
									Интегрированный
								</div>
							</div>

						</div>

						<div class="tab__item_col">

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Регулировка спинки
								</div>
								<div class="tech-text__item">
									Нет
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Материал наполнителя
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Пенополиуретан
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Материал обивки
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Велюр, твид, кожзам, натуральная кожа
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип крепления
								</div>
								<div class="tech-text__item">
									Нижнее, боковое
								</div>
							</div>

						</div>

					</div>
					<div class="block__item tab__item">
						<div class="tab__item_col">
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Артикул	 
								</div>
								<div class="tech-text__item">
									200314
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип сиденья
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Спортивное
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Назначение
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Тюнинг, Спорт, Автосимулятор, Аттракцион
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Подголовник
								</div>
								<div class="tech-text__item">
									Интегрированный
								</div>
							</div>

						</div>

						<div class="tab__item_col">
							
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Регулировка спинки
								</div>
								<div class="tech-text__item">
									Нет
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Материал наполнителя
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Пенополиуретан
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Материал обивки
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Велюр, твид, кожзам, натуральная кожа
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип крепления
								</div>
								<div class="tech-text__item">
									Нижнее, боковое
								</div>
							</div>

						</div>
					</div>
					<div class="block__item tab__item">
						<div class="tab__item_col">
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Артикул	 
								</div>
								<div class="tech-text__item">
									200314
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип сиденья
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Спортивное
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Назначение
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Тюнинг, Спорт, Автосимулятор, Аттракцион
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Подголовник
								</div>
								<div class="tech-text__item">
									Интегрированный
								</div>
							</div>

						</div>

						<div class="tab__item_col">
							
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Регулировка спинки
								</div>
								<div class="tech-text__item">
									Нет
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Материал наполнителя
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Пенополиуретан
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Материал обивки
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Велюр, твид, кожзам, натуральная кожа
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип крепления
								</div>
								<div class="tech-text__item">
									Нижнее, боковое
								</div>
							</div>

						</div>
					</div>
					<div class="block__item tab__item">
						<div class="tab__item_col">
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Артикул	 
								</div>
								<div class="tech-text__item">
									200314
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип сиденья
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Спортивное
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Назначение
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Тюнинг, Спорт, Автосимулятор, Аттракцион
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Подголовник
								</div>
								<div class="tech-text__item">
									Интегрированный
								</div>
							</div>

						</div>

						<div class="tab__item_col">
							
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Регулировка спинки
								</div>
								<div class="tech-text__item">
									Нет
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Материал наполнителя
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Пенополиуретан
								</div>
							</div>

							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Материал обивки
								</div>
								<div class="tech-text__item tech-text__item_cold">
									Велюр, твид, кожзам, натуральная кожа
								</div>
							</div>

							<div class="tech-text__block d-flex tgrey">
								<div class="tech-text__item tech-text__item_left">
									Тип крепления
								</div>
								<div class="tech-text__item">
									Нижнее, боковое
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>

		</div>
	</section>

	<section id="recommended" class="recommended">
		<div class="container">
			<h2>Рекомендуемые продукты</h2>

			<div class="prod-card d-flex">

				<div class="prod-card__body d-flex">
					<a href="#" class="prod-card__link">
						<img src="img/product/pr-01.jpg" alt=""> 
					</a>

					<div class="prod-card__text d-flex">
						<h4>
							Спортивное сиденье <br>
							Чемпион
						</h4>
						<p class="prod-card__price">15 400 руб.</p>
					</div>
					<a href="#" class="prod-card__btn btn">Подробнее</a>
				</div>


				<div class="prod-card__body d-flex">
					<a href="#" class="prod-card__link">
						<img src="img/product/pr-02.jpg" alt=""> 
					</a>

					<div class="prod-card__text d-flex">
						<h4>
							Кресло для аттракциона <br>
							4Д Синема
						</h4>
						<p class="prod-card__price">17 800 руб.</p>
					</div>
					<a href="#" class="prod-card__btn btn">Подробнее</a>
				</div>


				<div class="prod-card__body d-flex">
					<a href="#" class="prod-card__link">
						<img src="img/product/pr-03.jpg" alt=""> 
					</a>

					<div class="prod-card__text d-flex">
						<h4>
							Кресло оператора S16
						</h4>
						<p class="prod-card__price">32 000 руб.</p>
					</div>
					<a href="#" class="prod-card__btn btn">Подробнее</a>
				</div>


				<div class="prod-card__body d-flex">
					<a href="#" class="prod-card__link">
						<img src="img/product/pr-04.jpg" alt=""> 
					</a>

					<div class="prod-card__text d-flex">
						<h4>
							Спортивное сиденье <br>
							Чемпион
						</h4>
						<p class="prod-card__price">14 000 руб.</p>
					</div>
					<a href="#" class="prod-card__btn btn">Подробнее</a>
				</div>

			</div>

		</div>
	</section>

	<section id="similar" class="similar">
		<div class="container">
			<h2>Похожие категории</h2>

			<div class="similar__row d-flex">
				
				<a href="#" class="three-img__one position">
					<img src="img/similar-01.jpg" alt="">
					<div class="info-img__text color-t-01">
						<p>
							Спортивные <br>
							сидения
						</p>
					</div>
				</a>

				<a href="#" class="three-img__one position">
					<img src="img/similar-02.jpg" alt="">
					<div class="info-img__text color-t-03">
						<p>
							Игровые <br>
							кресла
						</p>
					</div>
				</a>

				<a href="#" class="three-img__one position">
					<img src="img/similar-03.jpg" alt="">
					<div class="info-img__text color-t-08">
						<p>
							Компьютерные <br>
							кресла
						</p>
					</div>
				</a>

				<a href="#" class="three-img__one position">
					<img src="img/similar-04.jpg" alt="">
					<div class="info-img__text color-t-05">
						<p>
							Кресла для <br>
							автосимуляторов
						</p>
					</div>
				</a>

			</div>

		</div>
	</section>

</main>

<?php get_footer();