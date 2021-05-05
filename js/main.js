
$ = jQuery;

$(document).ready(function () {
	var w = $(window).outerWidth();
	var h = $(window).outerHeight();
	var ua = window.navigator.userAgent;
	var msie = ua.indexOf("MSIE ");
	var isMobile = { Android: function () { return navigator.userAgent.match(/Android/i); }, BlackBerry: function () { return navigator.userAgent.match(/BlackBerry/i); }, iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, Opera: function () { return navigator.userAgent.match(/Opera Mini/i); }, Windows: function () { return navigator.userAgent.match(/IEMobile/i); }, any: function () { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
	function isIE() {
		ua = navigator.userAgent;
		var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
		return is_ie;
	}
	if (isIE()) {
		$('body').addClass('ie');
	}
	if (isMobile.any()) {
		$('body').addClass('touch');
	}

	// ===============================================================================================================================================================
	var isMobile = { Android: function () { return navigator.userAgent.match(/Android/i); }, BlackBerry: function () { return navigator.userAgent.match(/BlackBerry/i); }, iOS: function () { return navigator.userAgent.match(/iPhone|iPad|iPod/i); }, Opera: function () { return navigator.userAgent.match(/Opera Mini/i); }, Windows: function () { return navigator.userAgent.match(/IEMobile/i); }, any: function () { return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows()); } };
	if (isMobile.any()) { }

	if (location.hash) {
		var hsh = location.hash.replace('#', '');
		if ($('.popup-' + hsh).length > 0) {
			popupOpen(hsh);
		} else if ($('div.' + hsh).length > 0) {
			$('body,html').animate({ scrollTop: $('div.' + hsh).offset().top, }, 500, function () { });
		}
	}
	$('.wrapper').addClass('loaded');

	var act = "click";
	if (isMobile.iOS()) {
		var act = "touchstart";
	}


	//BURGER
	let iconMenu = document.querySelector(".icon-menu");
	let body = document.querySelector("body");
	let menuBody = document.querySelector(".mob-menu");
	if (iconMenu) {
		iconMenu.addEventListener("click", function () {
			iconMenu.classList.toggle("active");
			body.classList.toggle("lock");
			menuBody.classList.toggle("active");
		});
	}

	// Строка поиска на мобилках
	let mobsearch = document.querySelector(".mob-search");
	let headsearch = document.querySelector(".header__search");
	if (mobsearch) {
		mobsearch.addEventListener("click", function () {
			headsearch.classList.toggle("active");
		});
	}

	// Открытие ПК меню при наведении до 1024px
	if (document.body.clientWidth > 1024) {
		function hideMenu() {
			$('.mob-menu').slideUp(600);
			$('.menu__catalogy a').removeClass('active');
		}
		function showMenu() {
			$('.mob-menu').slideDown(600);
			$('.menu__catalogy a').addClass('active');
		}
		$(document).ready(function () {
			$(".menu__catalogy").on("mouseover", showMenu);
			$(".header").on("mouseleave", hideMenu);
		});
	}


	$(document).ready(function () {
		function hideMenu() {
			$('.sub-menu').slideUp(400);
			$('.header-top__menu .link__drop-down').removeClass('active');
		}
		function showMenu() {
			$('.sub-menu').slideDown(400);
			$('.header-top__menu .link__drop-down').addClass('active');
		}
		$(document).ready(function () {
			$(".header-top__menu .link__drop-down").on("mouseover", showMenu);
			$(".sub-menu").on("mouseleave", hideMenu);
		});
	});


	// Slider на главной
	$('.info-sl__slider').slick({
		arrows: true,
		dots: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 1,
		autoplay: true,
		autoplaySpeed: 1800,
		adaptiveHeight: true
	});

	$('.info__benefit').slick({
		arrows: false,
		dots: false,
		infinite: true,
		speed: 3000,
		slidesToShow: 3,
		slidesPerRow: 3,
		slidesToScroll: 1,
		variableWidth: false,
		centerMode: false,
		autoplay: true,
		autoplaySpeed: 3000,
		adaptiveHeight: true
	});

	// Slider Товара
	$('.select-prod-slider').slick({
		arrows: false,
		dots: false,
		infinite: true,
		speed: 1000,
		slidesToShow: 12,
		slidesToScroll: 1,
		centerMode: true,
		focusOnSelect: true,
		autoplaySpeed: 1800,
		asNavFor: ".select-slider-big",
		adaptiveHeight: true,
		vertical: true
	});
	$('.select-slider-big').slick({
		arrows: false,
		dots: false,
		fade: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		draggable: false,
		asNavFor: ".select-prod-slider"
	});


	// Slider Модального окна
	$('.galary-sl-small').slick({
		arrows: false,
		dots: false,
		slidesToShow: 10,
		slidesToScroll: 1,
		infinite: true,
		focusOnSelect: true,
		asNavFor: ".galary-sl-big",
		adaptiveHeight: true
	});
	$('.galary-sl-big').slick({
		arrows: false,
		dots: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		asNavFor: ".galary-sl-small"
	});




	// Выбо колличества
	$('.minus').click(function () {
		var $input = $(this).parent().find('input');
		var count = parseInt($input.val()) - 1;
		count = count < 1 ? 1 : count;
		$input.val(count);
		$input.change();
		return false;
	});
	$('.plus').click(function () {
		var $input = $(this).parent().find('input');
		$input.val(parseInt($input.val()) + 1);
		$input.change();
		return false;
	});


	// Маска телефона
	var inputmask_phone = { "mask": "+9(999)999-99-99" };
	jQuery("input[type=tel]").inputmask(inputmask_phone);



	//Валидация телефона + Отправщик
	$('.newButton').click(function (e) {

		e.preventDefault();
		var name = $("#form-question-name").val();
		var tel = $("#form-question-tel").val();

		if (jQuery("#form-question-tel").val() == "") {
			jQuery("#form-question-tel").css("border", "1px solid red");
			return;
		}

		// if (jQuery("#sig-inp-e").val() == ""){
		// 	jQuery("#sig-inp-e").css("border","1px solid red");
		// 	return;
		// }

		else {
			var jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'sendphone',
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
				}
			);

			jqXHR.done(function (responce) {
				jQuery(".headen_form_blk").hide();
				jQuery('.SendetMsg').show();
			});

			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			});

		}
	});



	$('.cashButton').click(function (e) {

		e.preventDefault();
		var name = $("#form-cashbackM-name").val();
		var tel = $("#form-cashbackM-tel").val();

		if (jQuery("#form-cashbackM-tel").val() == "") {
			jQuery("#form-cashbackM-tel").css("border", "1px solid red");
			return;
		}

		// if (jQuery("#sig-inp-e").val() == ""){
		// 	jQuery("#sig-inp-e").css("border","1px solid red");
		// 	return;
		// }

		else {
			var jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'sendcashB',
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
				}
			);

			jqXHR.done(function (responce) {
				jQuery(".cashbackM .headen_form_blk").hide();
				jQuery('.cashbackM .SendetMsg').show();
			});

			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			});

		}
	});


	$('.form__btn').click(function (e) {

		e.preventDefault();
		var name = $("#contactsName").val();
		var tel = $("#contactsTel").val();
		var msg = $("#contactsMsg").val();

		if (jQuery("#contactsTel").val() == "") {
			jQuery("#contactsTel").css("border", "1px solid red");
			return;
		}

		if (jQuery("#contactsMsg").val() == "") {
			jQuery("#contactsMsg").css("border", "1px solid red");
			return;
		}

		else {
			var jqXHR = jQuery.post(
				allAjax.ajaxurl,
				{
					action: 'sendcontacts',
					nonce: allAjax.nonce,
					name: name,
					tel: tel,
					msg: msg,
				}
			);

			jqXHR.done(function (responce) {
				jQuery(".contacts__form .headen_form_blk").hide();
				jQuery('.contacts__form .SendetMsg').show();
			});

			jqXHR.fail(function (responce) {
				alert("Произошла ошибка. Попробуйте позднее.");
			});

		}
	});


	$(".popup-quest").on('click', function (e) {
		e.preventDefault();
		jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
		jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
		jQuery("#question").arcticmodal();
	});

	$(".cashback__btn").on('click', function (e) {
		e.preventDefault();
		jQuery(".windows_form h2").html(jQuery(this).data("winheader"));
		jQuery(".windows_form .subtitle").html(jQuery(this).data("winsubheader"));
		jQuery("#cashbackM").arcticmodal();
	});

	$(".galery-block__galery-img").on('click', function (e) {
		e.preventDefault();
		jQuery("#galaryW").arcticmodal();
		$('.galary-sl-big').slick('setPosition');
		$('.galary-sl-small').slick('setPosition');
	});

	$(".fancybox").fancybox();

	$('figure img').parent('a').attr("data-lightbox", 'gallery');


	// Выключение пустых табов
	if ($(".tech-text__block-1, .block__item-descrip p, .tab__item-3 p, .tab__item-4").text() == "") {
		$(".block__tabs").hide();
	};

	if ($(".tech-text__block-1").text() == "") {
		$(".block__navitem-1").hide();
	};

	if ($(".block__item-descrip p").text() == "") {
		$(".block__navitem-2").hide();
	};

	if ($(".tab__item-3").text() == "") {
		$(".block__navitem-3").hide();
	};

	if ($(".tab__item-4").text() == "") {
		$(".block__navitem-4").hide();
	};


	//POPUP
	$('.pl').click(function (event) {
		var pl = $(this).attr('href').replace('#', '');
		var v = $(this).data('vid');
		popupOpen(pl, v);
		return false;
	});
	function popupOpen(pl, v) {
		$('.popup').removeClass('active').hide();
		if (!$('.menu__body').hasClass('active')) {
			//$('body').data('scroll',$(window).scrollTop());
		}
		if (!isMobile.any()) {
			$('body').css({ paddingRight: $(window).outerWidth() - $('.wrapper').outerWidth() }).addClass('lock');
			$('.pdb').css({ paddingRight: $(window).outerWidth() - $('.wrapper').outerWidth() });
		} else {
			setTimeout(function () {
				$('body').addClass('lock');
			}, 300);
		}
		history.pushState('', '', '#' + pl);
		if (v != '' && v != null) {
			$('.popup-' + pl + ' .popup-video__value').html('<iframe src="https://www.youtube.com/embed/' + v + '?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>');
		}
		$('.popup-' + pl).fadeIn(300).delay(300).addClass('active');

		if ($('.popup-' + pl).find('.slick-slider').length > 0) {
			$('.popup-' + pl).find('.slick-slider').slick('setPosition');
		}
	}
	function openPopupById(popup_id) {
		$('#' + popup_id).fadeIn(300).delay(300).addClass('active');
	}
	function popupClose() {
		$('.popup').removeClass('active').fadeOut(300);
		if (!$('.menu__body').hasClass('active')) {
			if (!isMobile.any()) {
				setTimeout(function () {
					$('body').css({ paddingRight: 0 });
					$('.pdb').css({ paddingRight: 0 });
				}, 200);
				setTimeout(function () {
					$('body').removeClass('lock');
					//$('body,html').scrollTop(parseInt($('body').data('scroll')));
				}, 200);
			} else {
				$('body').removeClass('lock');
				//$('body,html').scrollTop(parseInt($('body').data('scroll')));
			}
		}
		$('.popup-video__value').html('');

		history.pushState('', '', window.location.href.split('#')[0]);
	}
	$('.popup-close,.popup__close').click(function (event) {
		popupClose();
		return false;
	});
	$('.popup').click(function (e) {
		if (!$(e.target).is(".popup>.popup-table>.cell *") || $(e.target).is(".popup-close") || $(e.target).is(".popup__close")) {
			popupClose();
			return false;
		}
	});
	$(document).on('keydown', function (e) {
		if (e.which == 27) {
			popupClose();
		}
	});

	$('.goto').click(function () {
		var el = $(this).attr('href').replace('#', '');
		var offset = 0;
		$('body,html').animate({ scrollTop: $('.' + el).offset().top + offset }, 500, function () { });

		if ($('.menu__body').hasClass('active')) {
			$('.menu__body,.icon-menu').removeClass('active');
			$('body').removeClass('lock');
		}
		return false;
	});


	function ibg() {
		if (isIE()) {
			let ibg = document.querySelectorAll(".ibg");
			for (var i = 0; i < ibg.length; i++) {
				if (ibg[i].querySelector('img') && ibg[i].querySelector('img').getAttribute('src') != null) {
					ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
				}
			}
		}
	}
	ibg();


	//Клик вне области
	$(document).on('click touchstart', function (e) {
		if (!$(e.target).is(".select *")) {
			$('.select').removeClass('active');
		};
	});

	//UP
	$(window).scroll(function () {
		var w = $(window).width();
		if ($(window).scrollTop() > 50) {
			$('#up').fadeIn(300);
		} else {
			$('#up').fadeOut(300);
		}
	});
	$('#up').click(function (event) {
		$('body,html').animate({ scrollTop: 0 }, 300);
	});

	$('body').on('click', '.tab__navitem', function (event) {
		var eq = $(this).index();
		if ($(this).hasClass('parent')) {
			var eq = $(this).parent().index();
		}
		if (!$(this).hasClass('active')) {
			$(this).closest('.tabs').find('.tab__navitem').removeClass('active');
			$(this).addClass('active');
			$(this).closest('.tabs').find('.tab__item').removeClass('active').eq(eq).addClass('active');
			if ($(this).closest('.tabs').find('.slick-slider').length > 0) {
				$(this).closest('.tabs').find('.slick-slider').slick('setPosition');
			}
		}
	});
	$.each($('.spoller.active'), function (index, val) {
		$(this).next().show();
	});
	$('body').on('click', '.spoller', function (event) {
		if ($(this).hasClass('mob') && !isMobile.any()) {
			return false;
		}

		if ($(this).parents('.one').length > 0) {
			$(this).parents('.one').find('.spoller').not($(this)).removeClass('active').next().slideUp(300);
			$(this).parents('.one').find('.spoller').not($(this)).parent().removeClass('active');
		}

		if ($(this).hasClass('closeall') && !$(this).hasClass('active')) {
			$.each($(this).closest('.spollers').find('.spoller'), function (index, val) {
				$(this).removeClass('active');
				$(this).next().slideUp(300);
			});
		}
		$(this).toggleClass('active').next().slideToggle(300, function (index, val) {
			if ($(this).parent().find('.slick-slider').length > 0) {
				$(this).parent().find('.slick-slider').slick('setPosition');
			}
		});
		return false;
	});



	function scrolloptions() {
		var scs = 100;
		var mss = 50;
		var bns = false;
		if (isMobile.any()) {
			scs = 10;
			mss = 1;
			bns = true;
		}
		var opt = {
			cursorcolor: "#fff",
			cursorwidth: "4px",
			background: "",
			autohidemode: true,
			cursoropacitymax: 0.4,
			bouncescroll: bns,
			cursorborderradius: "0px",
			scrollspeed: scs,
			mousescrollstep: mss,
			directionlockdeadzone: 0,
			cursorborder: "0px solid #fff",
		};
		return opt;
	}
	function scroll() {
		$('.scroll-body').niceScroll('.scroll-list', scrolloptions());
	}
	if (navigator.appVersion.indexOf("Mac") != -1) {
	} else {
		if ($('.scroll-body').length > 0) { scroll(); }
	}


	// function scrollwhouse(){
	// 		var scs=100;
	// 		var mss=50;
	// 		var bns=false;
	// 	if(isMobile.any()){
	// 		scs=10;
	// 		mss=1;
	// 		bns=true;
	// 	}
	// 	var opt={
	// 		cursorcolor:"#afafaf",
	// 		cursorwidth: "5px",
	// 		background: "",
	// 		autohidemode:false,
	// 		railalign: 'left',
	// 		cursoropacitymax: 1,
	// 		bouncescroll:bns,
	// 		cursorborderradius: "0px",
	// 		scrollspeed:scs,
	// 		mousescrollstep:mss,
	// 		directionlockdeadzone:0,
	// 		cursorborder: "0px solid #fff",
	// 	};
	// 	return opt;
	// }
	// $('.whouse-content-body').niceScroll('.whouse-content-scroll',scrollwhouse());
	// $('.whouse-content-body').scroll(function(event) {
	// 		var s=$(this).scrollTop();
	// 		var r=Math.abs($(this).outerHeight()-$('.whouse-content-scroll').outerHeight());
	// 		var p=s/r*100;
	// 	$('.whouse-content__shadow').css({opacity:1-1/100*p});
	// });



	// if ($('.t,.tip').length > 0) {
	// 	tip();
	// }
	// function tip() {
	// 	$('.t,.tip').webuiPopover({
	// 		placement: 'top',
	// 		trigger: 'hover',
	// 		backdrop: false,
	// 		//selector:true,
	// 		animation: 'fade',
	// 		dismissible: true,
	// 		padding: false,
	// 		//hideEmpty: true
	// 		onShow: function ($element) { },
	// 		onHide: function ($element) { },
	// 	}).on('show.webui.popover hide.webui.popover', function (e) {
	// 		$(this).toggleClass('active');
	// 	});
	// }

	//scrollToFixed Фиксовая шапка
	// $(".header").scrollToFixed({
	//   marginTop: -1
	// });
});
