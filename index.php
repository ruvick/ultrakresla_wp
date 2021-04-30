<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page"> 

	<section class="info">
		<div class="container">

			<div class="info__benefit benefit d-flex">
				<?	$picts = carbon_get_theme_option('complex_benefit');
				if($picts) {
					$pictsIndex = 0;
					foreach($picts as $items) {
						?>

						<a href="<? echo $items['link_benefit']; ?>" class="benefit__item benefit__item_l" style="background-image: url(<?php echo wp_get_attachment_image_src($items['img_benefit'], 'full')[0];?>);"> 
							<p>
								<? echo $items['text_benefit']; ?>  
							</p>
						</a>
						<?
						$pictIndex++; 
					}
				}
				?>
			</div>

			<div class="info-img d-flex">

				<div class="info-img__col">

					<div class="info-img__three three-img d-flex">
						<a href="<?php echo get_category_link(9);?>" class="three-img__one position">
							<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-01.jpg" alt="">
							<div class="info-img__text color-t-01">
								<p>
									Спортивные <br> 
									сидения
								</p>
							</div>
						</a>
						<div class="three-img__two d-flex">
							<a href="<?php echo get_template_directory_uri();?>/img/ultra-video.mp4" data-rel="media" class="fancybox three-img__item position">
								<video class="info-img__video" controls="controls" loop autoplay muted poster="<?php echo get_template_directory_uri();?>/img/info-card/card-02.jpg">
									<source src="<?php echo get_template_directory_uri();?>/img/ultra-video.mp4" type='video/ogg; codecs="theora, vorbis"'> 
									</video>
								</a>
								<a href="<?php echo get_category_link(12);?>" class="three-img__item position">
									<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-03.jpg" alt="">
									<div class="info-img__text color-t-03">
										<p>
											Игровые <br>
											кресла
										</p>
									</div>
								</a>
							</div>
						</div>
					

						<a href="<?php echo get_category_link(17);?>" class="info-img__one position">
							<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-04.jpg" alt="">
							<div class="info-img__text color-t-04">
								<p>
									Кресла и диваны для <br>
									микроавтобусов
								</p>
							</div>
						</a>

					</div>

					<div class="info-img__col">

						<a href="<?php echo get_category_link(12);?>" class="info-img__one position">
							<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-05.jpg" alt="">
							<div class="info-img__text color-t-05">
								<p>
									Кресла для <br>
									автосимуляторов 
								</p>
							</div>
						</a>

						<div class="info-img__three three-img d-flex">
							<div class="three-img__two d-flex">
								<a href="<?php echo get_category_link(15);?>" class="three-img__item position">
									<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-06.jpg" alt="">
									<div class="info-img__text color-t-06">
										<p>
											Сидения для <br>
											спецтехники
										</p>
									</div>
								</a>
								<a href="<?php echo get_category_link(19);?>" class="three-img__item position">
									<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-07.jpg" alt="">
									<div class="info-img__text color-t-07">
										<p>
											Сидения для <br>
											катеров и лодок
										</p>
									</div>
								</a>
							</div>
							<a href="<?php echo get_category_link(14);?>" class="three-img__one position">
								<img src="<?php echo get_template_directory_uri();?>/img/info-card/card-08.jpg" alt="">
								<div class="info-img__text color-t-08">
									<p>
										Компьютерные <br>
										кресла
									</p>
								</div>
							</a>
						</div>

					</div>

				</div>

			</div>
		</section>

		<section class="cashback">
			<div class="container">
				<h2>Получите кешбек при совершении заказа</h2>
				<p>Возвращаем 10% от стоимости приобретенного кресла!</p>
				<a href="#" class="cashback__btn btn">Получить кешбек</a>
			</div>
		</section>

		<section class="stages">
			<div class="container">
				<h2>Как мы работаем</h2>

				<div class="advant__row d-flex">
					<div class="advant__line"></div>

					<div class="advant__item advant-icon-01">
						<p>
							Вы оставляете заявку
							на изготовление кресла,
							мы выставляем счет на оплату
						</p>
					</div>

					<div class="advant__item advant-icon-02">
						<p>
							Вы вносите предоплату от 50%,
							мы запускаем заказ в работу
						</p>
					</div>

					<div class="advant__item advant-icon-03">
						<p>
							После производства
							досконально осматриваем
							и проверяем все кресла
						</p>
					</div>

					<div class="advant__item advant-icon-04">
						<p>
							Доставляем заказ по указанному
							адресу, принимаем оставшуюся
							часть оплаты
						</p>
					</div>

				</div>

			</div>
		</section>

		<section id="newprod" class="newprod">
			<div class="container">
				<h2>Новинки</h2>

				<div class="prod-card d-flex"> 

					<?
					$args = array(
						'posts_per_page' => 4,
						'post_type' => 'ultra',
						'tax_query' => array(
							array(
								'taxonomy' => 'ultracat',
								'field' => 'id',
								'terms' => array(7)
							)
						)
					);
					$query = new WP_Query($args);

					foreach( $query->posts as $post ){
						$query->the_post();
						get_template_part('template-parts/product-elem');
					}  
					wp_reset_postdata();
					?>

				</div>
			</section>

			<section id="useful" class="useful">
				<div class="container">
					<h2>Полезные материалы</h2>

					<?php 
					$posts = get_posts( array(
						'numberposts' => 5,
						'category'    => 20,
						'orderby'     => 'date',
						'order'       => 'DESC',
						'post_type'   => 'post',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					
					?>
					<div class="useful__row d-flex">

						<a href="<?php echo get_permalink($posts[0]->ID);?>" class="useful__item-img-item useful__item-img_01" 
							style="background-image: url(<?php echo get_the_post_thumbnail_url( $posts[0]->ID, 'full' );?>);">
							<!-- <img src="img/useful/useful-01.jpg" alt=""> -->
							<p>
								<?php
								echo get_the_title( $posts[0]->ID );
								?>
							</p> 
							<div class="nuar_blk"></div>
						</a>

						<div class="useful__item-img d-flex">
							<a href="<?php echo get_permalink($posts[1]->ID);?>" class="useful__item-img-item useful__item-img_02"
								style="background-image: url(<?php echo get_the_post_thumbnail_url( $posts[1]->ID, 'full' );?>);">
								<!-- <img src="img/useful/useful-02.jpg" alt=""> -->
								<p>
									<?php
									echo get_the_title( $posts[1]->ID );
									?>
								</p> 
								<div class="nuar_blk"></div>
							</a>
							<a href="<?php echo get_permalink($posts[2]->ID);?>" class="useful__item-img-item useful__item-img_03" 
								style="background-image: url(<?php echo get_the_post_thumbnail_url( $posts[2]->ID, 'full' );?>);">
								<!-- <img src="img/useful/useful-03.jpg" alt=""> -->
								<p>
									<?php
									echo get_the_title( $posts[2]->ID );
									?>
								</p> 
								<div class="nuar_blk"></div>
							</a>
						</div>

						<div class="useful__item-img d-flex">

							<a href="<?php echo get_permalink($posts[3]->ID);?>" class="useful__item-img-item useful__item-img_04" 
								style="background-image: url(<?php echo get_the_post_thumbnail_url( $posts[3]->ID, 'full' );?>);">
								<!-- <img src="img/useful/useful-04.jpg" alt=""> -->
								<p>
									<?php
									echo get_the_title( $posts[3]->ID );
									?>
								</p> 
								<div class="nuar_blk"></div>
							</a>

							<a href="<?php echo get_permalink($posts[4]->ID);?>" class="useful__item-img-item useful__item-img_05" 
								style="background-image: url(<?php echo get_the_post_thumbnail_url( $posts[4]->ID, 'full' );?>);">
								<!-- <img src="img/useful/useful-05.jpg" alt=""> -->
								<p>
									<?php
									echo get_the_title( $posts[4]->ID );
									?>
								</p> 
								<div class="nuar_blk"></div>
							</a>
						</div>

					</div>

					<a href="<?php echo get_category_link(20);?>" class="useful__btn btn">Смотреть все материалы</a>

				</div>
			</section>

			<section id="questions" class="questions">
				<div class="container">
					<h2>Часто задаваемые вопросы</h2>

					<div class="block__spollers spollers">
						<?	$quest = carbon_get_theme_option('questions_complex');
						if($quest) {
							$questIndex = 0;
							foreach($quest as $itemQ) {
								?>
								<div class="spollers__item">
									<div class="spollers__title spoller closeall"><? echo $itemQ['questions_spoiler']; ?></div>
									<div class="spollers__text">
										<? echo $itemQ['questions_answer']; ?>
									</div>
								</div>
								<?
								$questIndex++;
							}
						}
						?>
					</div>
				</div>
			</section>
		</main>

<?php get_footer(); ?> 