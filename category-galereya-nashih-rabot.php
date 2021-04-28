<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="category">  
		<div class="container">

			<div class="info__benefit benefit d-flex">

				<?	$picts = carbon_get_theme_option('complex_benefit');
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

			<div class="galery-block">
					<h1><?php single_cat_title( '', true );?></h1>

					<ul class="galery-block__menu menu-galery">
						<?php
  						global $post;
  							$args = array( 'numberposts' => -1, 'order' => 'ASC', 'offset'=> 1, 'category' => 21 );
  							$myposts = get_posts( $args );
  						foreach( $myposts as $post ){
    					setup_postdata($post);
    				?>
							<li><a href="<?php the_permalink(); ?>" 
								class="menu-galery__link"><?php the_title(); ?> (<?php echo carbon_get_post_meta(get_the_ID(),"number_img"); ?>)</a></li>
    				<?php 
 					 		}
  						wp_reset_postdata();
  					?>
					</ul>
			</div>

			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

		</div>
	</section>

	<section class="category-description"> 
		<div class="container">
			<div class="category-description__text text_blk">
					<?php echo category_description(); ?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>  