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

			<div class="galery-block-cat galery-block">
					<h1><?php single_cat_title( '', true );?></h1>

					<?php
  					$args = array( 'numberposts' => -1, 'order' => 'ASC', 'category' => 21 );
  					$myposts = get_posts( $args );
  						foreach( $myposts as $post ){
    					setup_postdata($post);
    				?>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>(<?php echo carbon_get_post_meta(get_the_ID(),"number_img"); ?>)</a></h3>
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
							</div>
    			<?php 
 						}
  					wp_reset_postdata();
  				?>
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