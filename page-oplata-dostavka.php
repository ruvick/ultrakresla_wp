<?php
/*
Template Name: Шаблон страницы Оплата и доставка
WP Post Template: Шаблон страницы Оплата и доставка
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="content">  
			<div class="container">

			<?php get_template_part('template-parts/benefit-slider');?>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 
				<div class="ec-delivery"></div>

				
			</div>
		</section>
	</main>

<?php get_footer();