		<header class="header-top">
			<div class="container">

<!-- 				<ul class="header-top__menu d-flex">
					<li><a href="#">Каталог</a></li>
					<li class="link__drop-down"><a href="#">О компании</a>
						<ul class="menu-drop-down">
							<li ><a href="#">Реквизиты</a></li>
							<li><a href="#">Сотрудничество</a>
							</ul>
						</li>
						<li><a href="#">Оплата и доставка</a></li>
						<li><a href="#">Сотрудничество</a></li>
						<li><a href="contacts.html">Контакты</a></li>
					</ul> -->
					<?php wp_nav_menu( array('theme_location' => 'menu_corp','menu_class' => 'header-top__menu','container_class' => 'header-top__menu','container' => false )); ?>
				</div>
			</header>  

			<header id="header" class="header">  
				<div class="container">
					<div class="header__row d-flex">
						<div class="header__logo-block d-flex">
							<a href="http://broczo.ru" class="header__logo logo-icon"></a> 
							<div class="header__tagline">
								<h3>ULTRAKRESLA</h3>
								<div class="header__tagline-tag d-flex">
									<p>СПОРТ<p>КОМФОРТ</p><p>БЕЗОПАСНОСТЬ</p>  
								</div>
							</div>
						</div>

						<div class="header__info d-flex"> 

							<div class="header__search search">
								<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
									<input type="text" placeholder="Поиск" class="search__input input" value="<?php echo get_search_query() ?>" name="s" id="s">
									<button type="submit" tabindex="2" class="sub-search" id="searchsubmit" value="найти"></button>
								</form>
							</div>
							<button class="mob-search"></button>

							<div class="header__callback callback d-flex">
								<a href="#" class="callback__address">Адрес: <? echo carbon_get_theme_option("as_address_head"); ?></a>
								<p><a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="callback__phone"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a></p>
								<a href="#" class="callback__popup popup-quest">Заказать звонок</a>
							</div>
							<a href="tel:88007005667" class="mob-callback__phone"></a>
							<div class="menu__icon icon-menu">  
								<span></span>
								<span></span>
								<span></span>  
							</div>
						</div>

						<nav class="mob-menu">
							<div class="mob-menu__df d-flex">
								<?php wp_nav_menu( array('theme_location' => 'menu_cat','menu_class' => 'mob-menu__list','container_class' => 'mob-menu__list','container' => false )); ?>
<!-- 								<ul class="mob-menu__list">
									<li><a href="#">Спортивные сидения</a></li>
									<li><a href="#">Анатомические сидения</a></li>
									<li><a href="#">Компьютерные сидения</a></li>
									<li><a href="#">Игровые кресла для автосимуляторов</a></li>
									<li><a href="#">Кресла для аттракционов</a></li>
								</ul> -->
<!-- 								<ul>
									<li><a href="#">Спортивные сидения</a></li>
									<li><a href="#">Анатомические сидения</a></li>
									<li><a href="#">Компьютерные сидения</a></li>
									<li><a href="#">Игровые кресла для автосимуляторов</a></li>
									<li><a href="#">Кресла для аттракционов</a></li>
								</ul>
								<ul class="mob-menu__list">
									<li><a href="#">Спортивные сидения</a></li>
									<li><a href="#">Анатомические сидения</a></li>
									<li><a href="#">Компьютерные сидения</a></li>
									<li><a href="#">Игровые кресла для автосимуляторов</a></li>
									<li><a href="#">Кресла для аттракционов</a></li>
								</ul>
								<ul>
									<li><a href="#">Спортивные сидения</a></li>
									<li><a href="#">Анатомические сидения</a></li>
									<li><a href="#">Компьютерные сидения</a></li>
									<li><a href="#">Игровые кресла для автосимуляторов</a></li>
									<li><a href="#">Кресла для аттракционов</a></li>
								</ul>
								<ul class="mob-menu__addit">
									<li><a href="#">Каталог</a></li>
									<li><a href="#">О компании</a></li>
									<li><a href="#">Оплата и доставка</a></li>
									<li><a href="#">Сотрудничество</a></li>
									<li><a href="#">Контакты</a></li>
								</ul> -->
							</div>
						</nav>
					</div>

				</div>
			</header>

			<header class="header-bottom">
				<div class="container">
					<div class="menu__body">

<!-- 						<ul class="menu__list d-flex">
							<li class="menu__catalogy"><a href="#" class="menu__link menu__link-cat">Каталог</a></li>
							<li><a href="category.html" class="menu__link">Спортивные сидения</a></li>
							<li><a href="product.html" class="menu__link">Анатомические сидения</a></li>
							<li><a href="#" class="menu__link">Компьютерные сидения</a></li>
							<li><a href="#" class="menu__link">Игровые кресла для автосимуляторов</a></li> 
							<li><a href="#" class="menu__link">Кресла для аттракционов</a></li>
						</ul> -->
						<?php wp_nav_menu( array('theme_location' => 'menu_main','menu_class' => 'menu__list','container_class' => 'menu__list','container' => false )); ?>
					</div>

				</div>
			</header> 