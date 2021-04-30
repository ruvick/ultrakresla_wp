<div class="info__benefit benefit d-flex">
	<?	$picts = carbon_get_theme_option('complex_benefit');
			if($picts) {
				$pictsIndex = 0;
					foreach($picts as $items) {
	?>
			<a href="<? echo $items['link_benefit']; ?>" class="benefit__item benefit__item_l" style="background-image: url(<?php echo wp_get_attachment_image_src($items['img_benefit'], 'full')[0];?>);"> 
				<p><? echo $items['text_benefit']; ?></p>
			</a>
	<?
		$pictIndex++; 
	  	}
  	}
	?>
</div>