
<footer id="footer" class="footer">
	<div class='container'>
		<div class="footer__row d-flex">
			
			<div class="footer__logo-block d-flex">
				<a href="#" class="header__logo logo-icon"></a>
				<p>
					Все права защищены 
					Ultra©
				</p>
			</div>

			<div class="footer-menu">
				<?php wp_nav_menu( array('theme_location' => 'menu_corp','menu_class' => 'footer__menu','container_class' => 'footer__menu','container' => false )); ?>
			</div>

			<div class="footer-menu">
					<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'footer__menu-r','container_class' => 'footer__menu-r','container' => false )); ?>
			</div>

			<div class="footer-menu">
				<div class="header__callback callback d-flex">
					<a href="#" class="callback__address">Адрес: <? echo carbon_get_theme_option("as_address_head"); ?></a>
					<p><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="callback__phone"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a></p>
					<a href="#" class="callback__popup popup-quest">Заказать звонок</a>
				</div>
				<a href="tel:88007005667" class="mob-callback__phone"></a> 
			</div>

		</div>
	</div>
</footer> 

</div>

<?php wp_footer(); ?>
</body>
</html>