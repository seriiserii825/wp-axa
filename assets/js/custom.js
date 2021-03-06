jQuery(function ($) {
	"use strict";

	$(window).on('load', function () {
		checkScreenSize();
	});

	// detect touch
	if (!("ontouchstart" in document.documentElement)) {
		document.documentElement.className += "no-touch";
	}
	$('.ts-service-overlay').on('touchstart touchend', function (e) {
		$(this).toggleClass('over');
	});


	/* ----------------------------------------------------------- */

	/*  Mobile Menu
	/* ----------------------------------------------------------- */

	function checkScreenSize() {
		var newWindowWidth = $(window).width();
		if (newWindowWidth < 991) {
			$(".nav.navbar-nav li a").on("click", function () {
				$(this).parent("li").find(".dropdown-menu").slideToggle();
				$(this).find("i").toggleClass("fa-angle-down fa-angle-up");
			});
		} else {
			$(".nav.navbar-nav li a").on("click", function () {
				console.log('do nothing');
			});
		}
	}


	/* ----------------------------------------------------------- */
	/*  Main slideshow
	/* ----------------------------------------------------------- */
	let mainSlider = function () {
		$('#main-slide .carousel-inner').slick({
			arrows: false,
			fade: true
		});

		$('#main-slide .carousel-item-left').on('click', function (e) {
			e.preventDefault();
			$('#main-slide .carousel-inner').slick('slickPrev');
			$('#main-slide .carousel-item').removeClass('active');
			$('#main-slide .slick-slide.slick-current .carousel-item').addClass('active');
		});

		$('#main-slide .carousel-item-right').on('click', function (e) {
			e.preventDefault();
			$('#main-slide .carousel-inner').slick('slickNext');
			$('#main-slide .carousel-item').removeClass('active');
			$('#main-slide .slick-slide.slick-current .carousel-item').addClass('active');
		});

	};
	mainSlider();


	/* ----------------------------------------------------------- */
	/*  Site search
	/* ----------------------------------------------------------- */

	$('.nav-search').on('click', function () {
		$('.search-block').fadeIn(350);
		$('.nav-search').addClass('hide');
	});

	$('.search-close').on('click', function () {
		$('.search-block').fadeOut(350);
		$('.nav-search').removeClass('hide');
	});


	/* ----------------------------------------------------------- */
	/*  Owl Carousel
	/* ----------------------------------------------------------- */

	//Testimonial slide

	$("#testimonial-slide").owlCarousel({

		loop: false,
		autoplay: false,
		autoplayHoverPause: true,
		nav: true,
		margin: 0,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		slideSpeed: 500,
		navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
		items: 1,
		responsive: {
			0: {
				items: 1
			},


			600: {
				items: 1
			}
		}

	});


	//Partners slide
	let partnersSlider = function(){
		$("#partners-carousel").slick({
			slidesToShow: 4,
			slidesToScroll: 2,
			arrows: false
		});

		$('.partners-button--next').on('click', function (e) {
			e.preventDefault();
			$("#partners-carousel").slick('slickNext');
		});

		$('.partners-button--prev').on('click', function (e) {
			e.preventDefault();
			$("#partners-carousel").slick('slickPrev');
		});

	};
	partnersSlider();

	$(".testimonial-carousel").owlCarousel({

		loop: true,
		autoplay: false,
		autoplayHoverPause: true,
		nav: true,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		slideSpeed: 500,
		navText: ["<i class='icon icon-chevron-left'></i>", "<i class='icon icon-chevron-right'></i>"],
		items: 1,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 1,
			}
		}

	});
	//testimonial slide

	$(".testimonial-slide").owlCarousel({

		loop: true,
		autoplay: false,
		autoplayHoverPause: true,
		margin: 30,
		mouseDrag: true,
		touchDrag: true,
		smartSpeed: 900,
		nav: false,
		dots: true,
		navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
		items: 3,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1000: {
				items: 3,
			}
		}

	});
	//testimonial slide

	$(".testimonial-classic-slider").owlCarousel({
		loop: true,
		autoplay: false,
		autoplayHoverPause: true,
		margin: 30,
		mouseDrag: true,
		touchDrag: true,
		smartSpeed: 900,
		nav: false,
		dots: false,
		navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
		items: 3,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 2
			},
			1000: {
				items: 3,
			}
		}

	});


	//Page slide

	$(".page-slider").owlCarousel({

		loop: true,
		animateOut: 'fadeOut',
		autoplay: false,
		autoplayHoverPause: true,
		nav: true,
		margin: 0,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		slideSpeed: 500,
		navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
		items: 1,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			}
		}

	});

	//Page slide
	$(".featured-cases-slide").owlCarousel({

		loop: false,
		animateOut: 'fadeOut',
		autoplay: false,
		autoplayHoverPause: true,
		nav: true,
		margin: 0,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		slideSpeed: 500,
		navText: ["<i class='icon icon-left-arrow2'></i>", "<i class='icon icon-right-arrow2'></i>"],
		items: 1,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			}
		}

	});


	//Team slide

	$("#team-slide").owlCarousel({

		loop: false,
		animateOut: 'fadeOut',
		nav: true,
		navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
		margin: 20,
		dots: false,
		mouseDrag: true,
		touchDrag: true,
		slideSpeed: 800,
		items: 4,
		responsive: {
			0: {
				items: 1
			},
			480: {
				items: 2
			},
			1000: {
				items: 4,
				loop: false
			}
		}

	});


	/* ----------------------------------------------------------- */
	/*  Counter
	/* ----------------------------------------------------------- */

	$('.counterUp').counterUp({
		delay: 10,
		time: 1000
	});


	/* ----------------------------------------------------------- */
	/*  Contact form
	/* ----------------------------------------------------------- */

	$('#contact-form').submit(function () {

		var $form = $(this),
			$error = $form.find('.error-container'),
			action = $form.attr('action');

		$error.slideUp(750, function () {
			$error.hide();

			var $name = $form.find('.form-control-name'),
				$email = $form.find('.form-control-email'),
				$subject = $form.find('.form-control-subject'),
				$message = $form.find('.form-control-message');

			$.post(action, {
					name: $name.val(),
					email: $email.val(),
					subject: $subject.val(),
					message: $message.val()
				},
				function (data) {
					$error.html(data);
					$error.slideDown('slow');

					if (data.match('success') != null) {
						$name.val('');
						$email.val('');
						$subject.val('');
						$message.val('');
					}
				}
			);

		});

		return false;

	});

	/* ----------------------------------------------------------- */
	/*  Back to top
	/* ----------------------------------------------------------- */

	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#back-to-top').click(function () {
		$('#back-to-top').tooltip('hide');
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	$('#back-to-top').tooltip('hide');


	let testimonialEgualHeight = function () {
		let itemHeight = 0;

		$('#ts-testimonial-static .testimonial-item-single').each(function () {
			if ($(this).height() > itemHeight) {
				itemHeight = $(this).height();
			}
		});

		$('#ts-testimonial-static .testimonial-item-single').each(function () {
			$(this).height(itemHeight);
		});
	};
	testimonialEgualHeight();

	let fizicPageEqualHeight = function () {
		let itemHeight = 0;
		$('.fizic-page .ts-case-content').each(function () {
			if ($(this).height() > itemHeight) {
				itemHeight = $(this).height();
			}
		});

		$('.fizic-page .ts-case-content').each(function () {
			$(this).height(itemHeight);
		});
	};
	fizicPageEqualHeight();

	let scrollToRca = function () {
		$('.rca .anchors a').on('click', function (e) {
			e.preventDefault();
			let href = $(this).attr('href');
			let hrefOffset = $(href).offset().top - 100;

			$('html, body').animate({
				scrollTop: hrefOffset
			}, 1000);
		});
	};
	scrollToRca();
});
