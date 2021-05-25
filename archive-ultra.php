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

			<h1><?php single_cat_title( '', true );?></h1>

			<div class="archive-prod-card galery-block__galery-row prod-card">
			<?php
				$terms = get_terms( 'ultracat' );

					if( $terms && ! is_wp_error($terms) ){
					
					foreach( $terms as $term ) {

						$term_id = $term->term_taxonomy_id;
						// получим ID картинки из метаполя термина
						$image_id = get_term_meta( $term_id, '_thumbnail_id', 1 );
						// ссылка на полный размер картинки по ID вложения
						$image_url = wp_get_attachment_image_url( $image_id, 'full' );

						echo "<a href='". get_term_link( $term->term_id, $term->taxonomy ) ."' class='galery-block__galery-img'>
						<img src = '" . $image_url . "' /> 
						<div class='galery-color-block color-t-left'>
							<p class = 'title'>". $term->name ."</p>
						</div>
					</a>";
					
					}
					
					}
			?>
			</div>

			<!-- <?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?> -->

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