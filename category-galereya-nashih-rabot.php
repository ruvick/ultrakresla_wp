<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="category">  
		<div class="container">

		<?php get_template_part('template-parts/benefit-slider');?>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 

			<div class="galery-block-cat galery-block">
					<h1><?php single_cat_title( '', true );?></h1>

					<div class="galery-block__galery-row">
						<?php global $post; 
							$args = array( 'posts_per_page' => -1, 'order' => 'ASC', 'category' => 21 );
							$myposts = get_posts( $args );
								foreach( $myposts as $post ){ setup_postdata($post);
									$galw = carbon_get_the_post_meta('galery_works');
								foreach($galw as $galw_item);
						?>
							<a href="<?php the_permalink(); ?>" class="galery-block__galery-img">
								<img src = "<?php echo wp_get_attachment_image_src($galw_item['galery_works_img'], 'full')[0];?>" />
								<div class="galery-color-block color-t-left">
									<p><?php the_title(); ?> (<?php echo carbon_get_post_meta(get_the_ID(),"number_img"); ?> фото)</p>
								</div>
							</a>
						<?php
							}
							wp_reset_postdata();
						?>
					</div>
			</div>

			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

		</div>
	</section>

	<!-- <section class="category-description"> 
		<div class="container">
			<div class="category-description__text text_blk">
					<?php echo category_description(); ?>
			</div>
		</div>
	</section> -->

</main>

<?php get_footer(); ?>  