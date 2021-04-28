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
							<li><a href="<?php echo get_permalink(690);?>" class="menu-galery__link">УАЗ(16)</a></li>
							<li><a href="<?php echo get_permalink(715);?>" class="menu-galery__link">Reno Logan(32)</a></li>
							<li><a href="<?php echo get_permalink(719);?>" class="menu-galery__link">Лада Ларгус Кросс(24)</a></li>
							<li><a href="<?php echo get_permalink(723);?>" class="menu-galery__link">AUDI TT(11)</a></li>
							<li><a href="<?php echo get_permalink(726);?>" class="menu-galery__link">JEEP Wrangler(17)</a></li>
							<li><a href="<?php echo get_permalink(728);?>" class="menu-galery__link">НИВА ВАЗ(25)</a></li>
							<li><a href="<?php echo get_permalink(730);?>" class="menu-galery__link">БАГГИ(13)</a></li>
							<li><a href="<?php echo get_permalink(732);?>" class="menu-galery__link">AUDI rs q3(16)</a></li>
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