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
				if($picts) {
					$pictsIndex = 0;
					foreach($picts as $items) {
						?>

						<a href="<? echo $items['link_benefit']; ?>" class="benefit__item benefit__item_l" style="background-image: url(<?php echo wp_get_attachment_image_src($items['img_benefit'], 'full')[0];?>);"> 
							<p>
								<? echo $items['text_benefit']; ?> 
							</p>
						</a>
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

									<?php
									$jachejka = carbon_get_the_post_meta('offer_nal');

									if( strlen($jachejka) == 0 ) {

										echo 'Не установлено';

									} else if ( $jachejka === 0 || $jachejka === '0' ) {

										echo '<div class="availability-order">ПОД ЗАКАЗ</div>';

									} else {

										echo '<div class="availability-order">10 НА СКЛАДЕ</div>';
									}
									?>

									<div class="availability-manuf">Производитель: <a href="#"><?echo carbon_get_post_meta(get_the_ID(),"offer_manufact"); ?></a></div>
									<div class="vendor">Артикул: <?echo carbon_get_post_meta(get_the_ID(),"mod_vendor"); ?></div>
								</div>
								<div class="actions-block__social d-flex">
									<a href="#" class="actions-block__btn popup-quest btn">Задать вопрос</a>
									<div class="actions-block__share d-flex">
										<p>Поделиться:</p>
										<div class="actions-block__social-icon d-flex share42init" data-url="<?php the_permalink() ?>" data-title="<?php the_title() ?>"></div>
										<script type="text/javascript" src="share42.js"></script>
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
					<div class="block__navitem block__navitem-1 tab__navitem active">Параметры</div>
					<div class="block__navitem block__navitem-2 tab__navitem">Описание</div>
					<? 
						$options_text = carbon_get_post_meta(get_the_ID(),"options_text");
						$acses_text = carbon_get_post_meta(get_the_ID(),"acses_text");
						
						if (!empty($options_text)) {
					?>
						<div class="block__navitem block__navitem-3 tab__navitem">Дополнительные опции</div>
					<?
						}
						if (!empty($acses_text)) {	
					?>
						<div class="block__navitem block__navitem-4 tab__navitem">Аксессуары</div>
					<?}?>
				</nav>

				<div class="block__items">
					<div class="block__item tab__item active">

						<div class="tab__item_col">

							<?	$tab = carbon_get_the_post_meta('offer_cherecter');
							if($tab) {
								$tabIndex = 0;
								foreach($tab as $tabs) {
									?>

									<div class="tech-text__block tech-text__block-1 d-flex">
										<div class="tech-text__item tech-text__item_left"> 
											<? echo $tabs['tab_name']; ?>
										</div>
										<div class="tech-text__item">
											<? echo $tabs['tab_val']; ?>
										</div>
									</div>

									<?
									$tabIndex++;
								}
							}
							?>

						</div>

						<div class="tab__item_col">

							<?	$tab = carbon_get_the_post_meta('offer_cherecter-r');
							if($tab) {
								$tabIndex = 0;
								foreach($tab as $tabs) {
									?>

									<div class="tech-text__block d-flex">
										<div class="tech-text__item tech-text__item_left">
											<? echo $tabs['tab_name-r']; ?>
										</div>
										<div class="tech-text__item">
											<? echo $tabs['tab_val-r']; ?>
										</div>
									</div>

									<?
									$tabIndex++;
								}
							}
							?>

						</div>

					</div>

					<div class="block__item block__item-descrip tab__item">
						<?php the_content(); ?>
					</div>

					<? if (!empty($options_text)) {?>
						<div class="block__item tab__item tab__item-3">
							<?echo carbon_get_post_meta(get_the_ID(),"options_text"); ?>
						</div>
					<?}?>

					<? if (!empty($acses_text)) {?>
						<div class="block__item tab__item tab__item-4">
							<?echo carbon_get_post_meta(get_the_ID(),"acses_text"); ?>
						</div>
					<?}?>
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

				<a href="<?php echo get_category_link(14);?>" class="three-img__one position">
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