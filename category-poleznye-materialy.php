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

			<h1><?php single_cat_title( '', true );?></h1>

			<div class="useful__row d-flex">
			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<a href="<?php echo get_permalink();?>" class="useful__item-img-item useful__item-img_01">
					<!-- <img src="img/useful/useful-01.jpg" alt=""> -->
					<p>
						<?php 
						$maxchar = 200;
						$text = strip_tags( get_the_excerpt() );
						echo mb_substr( $text, 0, $maxchar );
						?>
					</p>
				</a>
				<div class="useful__item-img d-flex">
					<a href="<?php echo get_permalink();?>" class="useful__item-img-item useful__item-img_02">
						<!-- <img src="img/useful/useful-02.jpg" alt=""> -->
						<p>
							<?php 
							$maxchar = 200;
							$text = strip_tags( get_the_excerpt() );
							echo mb_substr( $text, 0, $maxchar );
							?>
						</p>
					</a>
					<a href="<?php echo get_permalink();?>" class="useful__item-img-item useful__item-img_03">
						<!-- <img src="img/useful/useful-03.jpg" alt=""> -->
						<p>
							<?php 
							$maxchar = 200;
							$text = strip_tags( get_the_excerpt() );
							echo mb_substr( $text, 0, $maxchar );
							?>
						</p>
					</a>
				</div>
				<div class="useful__item-img d-flex">
					<a href="<?php echo get_permalink();?>" class="useful__item-img-item useful__item-img_04">
						<!-- <img src="img/useful/useful-04.jpg" alt=""> -->
						<p>
							<?php 
							$maxchar = 200;
							$text = strip_tags( get_the_excerpt() );
							echo mb_substr( $text, 0, $maxchar );
							?>
						</p>
					</a>
					<a href="<?php echo get_permalink();?>" class="useful__item-img-item useful__item-img_05">
						<!-- <img src="img/useful/useful-05.jpg" alt=""> -->
						<p>
							<?php 
							$maxchar = 200;
							$text = strip_tags( get_the_excerpt() );
							echo mb_substr( $text, 0, $maxchar );
							?>
						</p>
					</a>
				</div>
			<?php 	} //конец while
		} //конец if ?>
			</div>

			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

		</div>
	</section>

	<section class="category-description"> 
		<div class="container">
			<div class="category-description__text">
				
				<p>
					<?php echo category_description(); ?>
				</p>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>  