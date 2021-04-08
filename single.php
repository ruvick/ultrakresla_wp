<?php

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="content">  
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

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<picture>
						<?php echo get_the_post_thumbnail( $post->ID, "turImg", array("alt" => $post->post_title, "title" => $post->post_title));?>
					</picture>
					<?php the_content();?>
				<?php endwhile;?> 
			<?php endif; ?>

			</div>
		</section>
	</main>

<?php get_footer();