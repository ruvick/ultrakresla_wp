<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">

	<section class="category">  
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

			<h1><?php single_cat_title( '', true );?></h1>

			<div class="prod-card d-flex">

				<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/product-elem');  
				endwhile;
				?>

			</div>

			<nav class="pagination d-flex">
				<div class="pagination__nav-links d-flex">
					<a class="pagination__back" href="#"></a>
					<span class="pagination__numbers">1</span>
					<a class="pagination__numbers current" href="#">2</a>
					<a class="pagination__numbers" href="#">3</a>
					<div class="pagination__block-dot d-flex">
						<span class="pagination__dot">.</span>
						<span class="pagination__dot">.</span>
						<span class="pagination__dot">.</span>
					</div>
					<a class="pagination__numbers" href="#">10</a>
					<a class="pagination__next" href="#"></a>
				</div>
			</nav>

			<nav class="navigation pagination" role="navigation">
			</nav>

		</div>
	</section>

	<section class="category-description"> 
		<div class="container">
			<div class="category-description__text">
				
				<p>
					Социальная интеграция в условиях модерна, лишённого традиционных и религиозных связей, представляли главный исследовательский интерес 
					Дюркгейма. Первый крупный труд социолога, «О разделении общественного труда», увидел свет в 1893 году, а через два года он опубликовал свои 
					«Правила социологического метода». Тогда же он стал первым профессором социологии первого во Франции социологического факультета[8]. В 1897 
					году он представил монографию «Суицид», где провёл сравнительный анализ статистики самоубийств в католических и протестантских обществах. 
					Данная работа, положившая начало современным социологическим исследованиям, позволила окончательно отделить социологию от психологии и 
					социальной философии. В 1898 году Дюркгейм учредил журнал L’Année Sociologique («Социологический ежегодник»). 
				</p>

			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>  