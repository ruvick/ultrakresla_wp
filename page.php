<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package light_market
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

	<main id="primary" class="page site-main"> 

		<section class="content"> 
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

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title();?></h1>
					<?php the_content();?>
					<?php endwhile;?>
				<?php endif; ?> 

			</div>
		</section>
	</main>

<?php get_footer();