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

			<div class="info__benefit benefit d-flex">

				<?	$picts = carbon_get_theme_option('complex_benefit');
				$limit = $count-3; 
				if($picts) {
					$pictsIndex = 0;
					foreach($picts as $items) { 
						?>

						<div class="benefit__item benefit__item_l" style="background-image: url(<?php echo wp_get_attachment_image_src($items['img_benefit'], 'full')[0];?>);"> 
							<p>
								<? echo $items['text_benefit']; ?>
							</p>
						</div>
						<?
						$pictIndex++;
					}
				}
				?>

			</div>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<div class="select-prod-block d-flex">

				<div class="select-prod-sl">
					<!-- Большой слайдер -->
					<div class="select-slider-big">
						<?
						$pict = carbon_get_the_post_meta('offer_picture');
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<div class="select-slider-big__item">
									<a class="fancybox" data-fancybox="gallery" href="<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>">
										<img
										id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" />

									</a>
								</div>

								<?
								$pictIndex++;
							}
						}
						?>
					</div>

					<!-- Малый слайдер -->
					<div class="select-prod-slider">
						<?
						$pict = carbon_get_the_post_meta('offer_picture');
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<div class="select-prod-slider__item">
									<img 
									data-indexelem = "<?echo $i;?>"
									id = "<? echo $item['gal_img_sku']; ?>" 
									alt = "<? echo $item['gal_img_alt']; ?>"
									title = "<? echo $item['gal_img_alt']; ?>"
									src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'large')[0];?>" />
								</div>
								<?
								$pictIndex++;
							}
						}
						?>
					</div>
					
				</div>

				<div class="actions__wrap"> 
					<h1><?the_title();?></h1>
					<div class="actions__row d-flex">

						<div class="actions-block">

							<div class="actions-block__availability">
								<div class="availability-flex d-flex">
									<div class="actions-block__price">Цена: <span class="price-summ"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?></span> руб.</div>
									<div class="availability-order">ПОД ЗАКАЗ</div>
									<div class="availability-manuf">Производитель: <a href="#"><?echo carbon_get_post_meta(get_the_ID(),"offer_manufact"); ?></a></div>
								</div>
								<div class="actions-block__social d-flex">
									<a href="#" class="actions-block__btn popup-quest btn">Задать вопрос</a>
									<div class="actions-block__share d-flex">
										<p>Поделиться:</p>
										<div class="actions-block__social-icon d-flex">
											<a href="<? echo carbon_get_theme_option("as_face"); ?>" class="social-icon icon-factbook"></a>
											<a href="<? echo carbon_get_theme_option("as_twiter"); ?>" class="social-icon icon-twiter"></a>
											<a href="<? echo carbon_get_theme_option("as_vk"); ?>" class="social-icon icon-vk"></a>
											<a href="<? echo carbon_get_theme_option("as_classmates"); ?>" class="social-icon icon-ok"></a>
										</div>
									</div>
								</div>
							</div>

							<div class="actions-block__text">
								<p>
									<?echo carbon_get_post_meta(get_the_ID(),"offer_smile_descr"); ?>
								</p>
							</div>

						</div>

						<div class="actions__analogs-block analogs-block">
							<p>Ближайшие аналоги:</p>
							<div class="analogs-block__flex-card d-flex">
								<?	$picts = carbon_get_the_post_meta('complex_analogs');
								if($picts) {
									$pictsIndex = 0;
									foreach($picts as $items) {
										?>

										<a href="<? echo $items['link_analogs']; ?>" class="analogs-block__item-card">
											<img src="<?php echo wp_get_attachment_image_src($items['img_analogs'], 'large')[0];?>" alt="">
											<p><? echo $items['price_analogs']; ?> руб.</p>
										</a>

										<?
										$pictIndex++;
									}
								}
								?>
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
						<?php the_content(); ?>
<!-- 						<div class="tab__item_col">
							<div class="tech-text__block d-flex">
								<div class="tech-text__item tech-text__item_left">
									Артикул	 55
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

						</div> -->
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

				<?
				$args = array(
					'posts_per_page' => 4,
					'post_type' => 'ultra',
					'tax_query' => array(
						array(
							'taxonomy' => 'ultracat',
							'field' => 'id',
							'terms' => array(8)
						)
					)
				);
				$query = new WP_Query($args);

				foreach( $query->posts as $post ){
					$query->the_post();
					get_template_part('template-parts/product-elem');
				}  
				wp_reset_postdata();
				?>

			</div>

		</div>
	</section>

	<section id="similar" class="similar">
		<div class="container">
			<h2>Похожие категории</h2>

			<div class="similar__row d-flex">
				
				<a href="<?php echo get_category_link(9);?>" class="three-img__one position">
					<img src="<?php echo get_template_directory_uri();?>/img/similar-01.jpg" alt="">
					<div class="info-img__text color-t-01">
						<p>
							Спортивные <br>
							сидения
						</p>
					</div>
				</a>

				<a href="<?php echo get_category_link(12);?>" class="three-img__one position">
					<img src="<?php echo get_template_directory_uri();?>/img/similar-02.jpg" alt="">
					<div class="info-img__text color-t-03">
						<p>
							Игровые <br>
							кресла
						</p>
					</div>
				</a>

				<a href="<?php echo get_category_link(12);?>" class="three-img__one position">
					<img src="<?php echo get_template_directory_uri();?>/img/similar-03.jpg" alt="">
					<div class="info-img__text color-t-08">
						<p>
							Компьютерные <br>
							кресла
						</p>
					</div>
				</a>

				<a href="<?php echo get_category_link(12);?>" class="three-img__one position">
					<img src="<?php echo get_template_directory_uri();?>/img/similar-04.jpg" alt="">
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