<?php

/*
Template Name: Шаблон страницы галерея тканей для обивки сидений
WP Post Template: Шаблон страницы Контакты
Template Post Type: page
*/

get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="page-fabrics content">  
			<div class="container">

			<?php get_template_part('template-parts/benefit-slider');?>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
				<? if ( !empty(carbon_get_the_post_meta('galery_velours'))) { ?>
					<?			
						$pict = carbon_get_the_post_meta('galery_velours');
						 echo '<h3>Велюр</h3>
						 <div class="page-fabrics-block__row galery-block__galery-row">';
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<a href="<?php echo wp_get_attachment_image_src($item['galery_velours_img'], 'full')[0];?>" 
									class="galery-block__galery-img fancybox" data-fancybox="gallery">
									<img src = "<?php echo wp_get_attachment_image_src($item['galery_velours_img'], 'full')[0];?>" 
										alt = "<? echo $item['galery_velours_img_alt']; ?>"
										title = "<? echo $item['galery_velours_img_alt']; ?>"
									 />
									<div class="galery-color-block color-t-left">
										<p><? echo $item['galery_velours_img_alt']; ?></p>
									</div>
								</a>
								<?
								$pictIndex++;
							}
						}
						echo '</div>';
						?>
				<? } ?>
						
				<? if ( !empty(carbon_get_the_post_meta('galery_eco'))) { ?>
					<?
						$pict = carbon_get_the_post_meta('galery_eco');
						 echo '<h3>Эко-Кожа</h3>
						 <div class="page-fabrics-block__row galery-block__galery-row">';
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<a href="<?php echo wp_get_attachment_image_src($item['galery_eco_img'], 'full')[0];?>" 
									class="galery-block__galery-img fancybox" data-fancybox="gallery">
									<img src = "<?php echo wp_get_attachment_image_src($item['galery_eco_img'], 'full')[0];?>" 
										alt = "<? echo $item['galery_eco_img_alt']; ?>"
										title = "<? echo $item['galery_eco_img_alt']; ?>"
									 />
									<div class="galery-color-block color-t-left">
										<p><? echo $item['galery_eco_img_alt']; ?></p>
									</div>
								</a>
								<?
								$pictIndex++;
							}
						}
						echo '</div>';
					?>
				<? } ?>
					
				<? if ( !empty(carbon_get_the_post_meta('galery_leather'))) { ?>
					<?
						$pict = carbon_get_the_post_meta('galery_leather');
						 echo '<h3>Кожа</h3>
						 <div class="page-fabrics-block__row galery-block__galery-row">';
						if($pict) {
							$pictIndex = 0;
							foreach($pict as $item) {
								?>
								<a href="<?php echo wp_get_attachment_image_src($item['galery_leather_img'], 'full')[0];?>" 
									class="galery-block__galery-img fancybox" data-fancybox="gallery">
									<img src = "<?php echo wp_get_attachment_image_src($item['galery_leather_img'], 'full')[0];?>" 
										alt = "<? echo $item['galery_leather_img_alt']; ?>"
										title = "<? echo $item['galery_leather_img_alt']; ?>"
									 />
									<div class="galery-color-block color-t-left">
										<p><? echo $item['galery_leather_img_alt']; ?></p>
									</div>
								</a>
								<?
								$pictIndex++;
							}
						}
						echo '</div>';
						?>
				<? } ?>

					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</section>
	</main>

<?php get_footer();