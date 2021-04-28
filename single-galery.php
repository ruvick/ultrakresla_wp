<?php

/*
Template Name: Шаблон карточки галерея наших работ
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="galery-single">  
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
				<div class="galery-block">
					<h1><?php the_title();?></h1>

						<ul class="galery-block__menu menu-galery">
							<li><a href="<?php echo get_permalink(690);?>" class="menu-galery__link">УАЗ(16)</a></li>
							<li><a href="<?php echo get_permalink(715);?>" class="menu-galery__link">Reno Logan(32)</a></li>
							<li><a href="<?php echo get_permalink(719);?>" class="menu-galery__link">Лада Ларгус Кросс(24)</a></li>
							<li><a href="<?php echo get_permalink(723);?>" class="menu-galery__link">AUDI TT(11)</a></li>
							<li><a href="<?php echo get_permalink(726);?>" class="menu-galery__link">JEEP Wrangler(17)</a></li>
							<li><a href="<?php echo get_permalink(728);?>" class="menu-galery__link">НИВА ВАЗ(25)</a></li>
							<li><a href="<?php echo get_permalink(730);?>" class="menu-galery__link">БАГГИ(13)</a></li>
							<li><a href="<?php echo get_permalink(732);?>" class="menu-galery__link">AUDI rs q3(16)</a></li>
						</ul>

						<div class="galery-block__galery-row">
						<?
						$galw = carbon_get_the_post_meta('galery_works');
						if($galw) {
							$galwIndex = 0;
							foreach($galw as $galw_item) {
								?>
							<div class="galery-block__galery-img">
								<img
									id = "pict-<? echo empty($galw_item['galery_works_img_sku'])?$galwIndex:$galw_item['galery_works_img_sku']; ?>" 
									alt = "<? echo $galw_item['galery_works_img_alt']; ?>"
									title = "<? echo $galw_item['galery_works_img_alt']; ?>"
									src = "<?php echo wp_get_attachment_image_src($galw_item['galery_works_img'], 'full')[0];?>" />
							</div>
								<?
								$galwIndex++;
							}
						}
						?>

							<!-- <div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-02.jpg" alt="">
							</div>

							<div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-03.jpg" alt="">
							</div>

							<div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-02.jpg" alt="">
							</div>

							<div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-02.jpg" alt="">
							</div>

							<div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-03.jpg" alt="">
							</div>

							<div class="galery-block__galery-img">
								<img src="<?php echo get_template_directory_uri();?>/img/useful/useful-02.jpg" alt="">
							</div> -->

						</div>

				</div>
			</div>
		</section>
	</main>

<?php get_footer();