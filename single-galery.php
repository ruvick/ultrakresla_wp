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

			<?php get_template_part('template-parts/benefit-slider');?>

			<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
				<div class="galery-block">
					<h1><?php the_title();?></h1>

					<ul class="galery-block__menu menu-galery">
						<?php
  							$post_id_curent = $post->ID;
							// print_r($post);
							$args = array( 'numberposts' => -1, 'order' => 'ASC', 'category' => 21 );
  							$myposts = get_posts( $args );
  						foreach( $myposts as $post ){
    					setup_postdata($post);
    				?>
							<li class="allLi <?php if ($post_id_curent ==  get_the_ID()) { echo "active-page"; } ?>"><a href="<?php the_permalink(); ?>" 
								class="menu-galery__link"><?php the_title(); ?> (<?php echo carbon_get_post_meta(get_the_ID(),"number_img"); ?>)</a></li>
    				<?php 
 					 		}
  						wp_reset_postdata();
  					?> 
					</ul>

						<div class="galery-block__galery-row">
						<?
						$galw = carbon_get_the_post_meta('galery_works'); 
						if($galw) {
							$galwIndex = 0;
							foreach($galw as $galw_item) { 
								?>
							<a href="#galary" class="galery-block__galery-img _popup-link">
								<img
									id = "pict-<? echo empty($galw_item['galery_works_img_sku'])?$galwIndex:$galw_item['galery_works_img_sku']; ?>" 
									data-slide = "<? echo empty($galw_item['galery_works_img_sku'])?$galwIndex:$galw_item['galery_works_img_sku']; ?>"
									alt = "<? echo $galw_item['galery_works_img_alt']; ?>"
									title = "<? echo $galw_item['galery_works_img_alt']; ?>"
									src = "<?php echo wp_get_attachment_image_src($galw_item['galery_works_img'], 'full')[0];?>" />
							</a>
								<?
								$galwIndex++;
							}
						}
						?>
						</div>

				</div>
			</div>
		</section>
	</main>

<?php get_footer();