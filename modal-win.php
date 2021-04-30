<!-- 
    В этом файле описываем все  всплывающие окна
-->

<div style="display: none;">
  <div class="box-modal" id="messgeModal">
    <div class="box-modal_close arcticmodal-close"><?_e("закрыть","rubex");?></div>
        
    <div class = "modalline" id = "lineIcon">
    </div>
    
    <div class = "modalline" id = "lineMsg">
    </div>
</div>  

	<div style="display: none;">
		<div class="box-modal box-modal-new box-modal-new__cust" id="question">
			<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
			<img src = "<?php bloginfo("template_url")?>/img/similar-01.jpg" loading="lazy"/>
			<div class = "formArctikBlk mod-zagr-tur">
				<h2>Заказать звонок <span class = 'tkName'></span></h2>
				<p>Наши специалисты свяжутся с Вами в течение 15 минут</p>  

				<form action="#" class="form-question">
					<div class = "SendetMsg" style = "display:none"> 
						Ваше сообщение успешно отправлено.
					</div>
					<div class="headen_form_blk">
						<input type = "text" name = "name" placeholder = "Имя*" id="form-question-name" class = "form-question__input input">
						<input type = "tel" name = "tel" placeholder = "Телефон*" id="form-question-tel" class = "form-question__input input">
					</div>
					<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312);?>">условиями обработки персональных данных</a>.</div>
					<button type="submit" class="newButton btn">Отправить</button>
				</form>

			</div>
		</div>
	</div>

	<div style="display: none;">
		<div class="box-modal box-modal-new box-modal-new__cust" id="cashbackM">
			<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
			<img src = "<?php bloginfo("template_url")?>/img/cashbackm.jpg" loading="lazy"/>
			<div class = "formArctikBlk mod-zagr-tur">
				<h2>Получить кешбек <span class = 'tkName'></span></h2>
				<p>Наши специалисты свяжутся с Вами в течение 15 минут</p> 

				<form action="#" class="form-question cashbackM">
					<div class = "SendetMsg" style = "display:none"> 
						Ваше сообщение успешно отправлено.
					</div>
					<div class="headen_form_blk">
						<input type = "text" name = "name" placeholder = "Имя*" id="form-cashbackM-name" class = "form-question__input input">
						<input type = "tel" name = "tel" placeholder = "Телефон*" id="form-cashbackM-tel" class = "form-question__input input">
					</div>
					<div class="callback-note mod-zagr-tur__note">Нажимая на кнопку "Отправить", вы соглашаетесь с <a class="tdu" href="<?php echo get_permalink(1312);?>">условиями обработки персональных данных</a>.</div>
					<button type="submit" class="cashButton btn">Отправить</button>
				</form>

			</div>
		</div>
	</div>


<div style="display: none;">
	<div class="box-modal box-modal-new box-modal-new__cust galaryw" id="galaryW">
		<div class="box-modal_close box-modal_close_new arcticmodal-close">X</div>
			<div class="galaryw__flex">

				<div class="select-prod-sl">
					<!-- Большой слайдер -->
					<div class="select-slider-big">
						<?
						$pictw = carbon_get_the_post_meta('galery_works');
						if($pictw) {
							$pictwIndex = 0;
							foreach($pictw as $itemw) {
								?>
								<div class="select-slider-big__item">
										<img
										id = "pict-<? echo empty($itemw['galery_works_img_sku'])?$pictwIndex:$itew['galery_works_img_sku']; ?>" 
										alt = "<? echo $itemw['galery_works_img_alt']; ?>"
										title = "<? echo $itemw['galery_works_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($itemw['galery_works_img'], 'full')[0];?>" />
								</div>
								<?
								$pictwIndex++;
							}
						}
						?>
					</div>

					<!-- Маленький слайдер  -->
					<div class="select-prod-slider">
						<?
						$pictw = carbon_get_the_post_meta('galery_works');
						if($pictw) {
							$pictwIndex = 0;
							foreach($pictw as $itemw) {
								?>
								<div class="select-prod-slider__item">
									<img 
									data-indexelem = "<?echo $i;?>"
									id = "<? echo $itemw['galery_works_img_sku']; ?>" 
									alt = "<? echo $itemw['galery_works_img_alt']; ?>"
									title = "<? echo $itemw['galery_works_img_alt']; ?>"
									src = "<?php echo wp_get_attachment_image_src($itemw['galery_works_img'], 'large')[0];?>" />
								</div>
							<?
								$pictwIndex++;
									}
								}
						?>
					</div>
				</div>

				<div class="galaryw__product">
				<?
						$galPRod = carbon_get_the_post_meta('galery_prod_complex');
						if($galPRod) {
							$galPRodIndex = 0;
							foreach($galPRod as $itemprod) {
								?>
							<a href="<? echo $itemprod['galery_prod_link']; ?>" class="galaryw__product-body">
								<div class="galaryw__product-img">
									<img src = "<?php echo wp_get_attachment_image_src($itemprod['galery_works_img'], 'large')[0];?>" loading="lazy"/>
								</div>
								<div class="galaryw__info-block">
									<div class="galaryw__product-title"><? echo $itemprod['galery_prod_title']; ?></div>
									<div class="galaryw__product-price"><? echo $itemprod['galery_prod_price']; ?> руб.</div>
								</div>
							</a>
							<?
								$galPRodIndex++;
									}
								}
						?>
				</div>

			</div>		
		</div>
	</div>
</div>