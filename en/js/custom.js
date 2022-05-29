$(window).on('load', function () {
	if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
		$('body').addClass('ios');
	} else {
		$('body').addClass('web');
	};
	if ($(window).width() < 767) {
		setTimeout(function () {
			$('body').removeClass('loaded'); 
		}, 1000);
		setTimeout(function() {
			$( "head" ).append( '<link rel="stylesheet preload" href="/en/css/fonts.css" as="style">' );
		}, 1500);
	} else {
		setTimeout(function () {
			$('body').removeClass('loaded'); 
		}, 1500);
		setTimeout(function() {
			$( "head" ).append( '<link rel="stylesheet preload" href="en/css/fonts.css" as="style">' );
		}, 500);
	}
});

/* viewport width */
function viewport() {
	var e = window,
		a = 'inner';
	if (!('innerWidth' in window)) {
		a = 'client';
		e = document.documentElement || document.body;
	}
	return { width: e[a + 'Width'], height: e[a + 'Height'] }
};
/* viewport width */


$(function () {

	var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
	if (isSafari) {
		$('body').addClass('safari');
	};

	/* lazy */
	// if ($('.js-img').length) {
	// 	var jsImg = $(".js-img");
	// 	new LazyLoad(jsImg, {
	// 		root: null,
	// 		rootMargin: "0px",
	// 		threshold: 0
	// 	});
	// };
	/* lazy */

	$('.main-block__cookies .btn').on('click', function(e){
		e.preventDefault();
		$(this).parent().css('display', 'none');
	});

	/* placeholder*/
	$('input, textarea').each(function () {
		var placeholder = $(this).attr('placeholder');
		$(this).focus(function () { $(this).attr('placeholder', ''); });
		$(this).focusout(function () {
			$(this).attr('placeholder', placeholder);
		});
	});
	/* placeholder*/

	/* phone mask */
	if ($("input[type='tel']").length) {
		$("input[type='tel']").mask("+7 (999) 999-99-99");
	}
	/* phone mask */

	/* header lang toggle */
	$('.header-lang span').on('click', function () {
		$(this).parent().find('.header-lang__box').toggleClass('active');
	});
	$('.header-lang__box li').on('click', function () {
		$(this).parents('.header-lang').find('.header-lang__text').text($(this).text());
		$('.header-lang__box').removeClass('active');
	});
	$(document).on('touchstart click', function (e) {
		if ($(e.target).parents().filter('.header-lang').length != 1) {
			$('.header-lang__box').removeClass('active');
		}
	});
	/* header lang toggle */

	/* burger */
	$('.js-btn-menu').on('click', function () {
		$(this).toggleClass('active');
		$('.header-nav').toggleClass('active');
		$('html').toggleClass('scroll-off');
	});

	$('.content').on('click', function () {
		$('.js-btn-menu').removeClass('active');
		$('.header-nav').removeClass('active');
		$('html').removeClass('scroll-off');
	});

	/* burger */

	/* faq */
	$('.faq-item__head').on('click', function () {
		$(this).parent().toggleClass('active');
		$(this).parent('.faq-item').siblings('.faq-item').removeClass('active');
		$(this).next().slideToggle(500);
		$(this).parent('.faq-item').siblings('.faq-item').find('.faq-item__content').slideUp(500);
	});
	/* faq */

	/* talk slider */
	if ($('.js-talk-items').length) {
		$('.js-talk-items').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			mobileFirst: true,
			dots: true,
			arrows: false,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 480,
					settings: "unslick"
				}
			]
		});
	}
	/* talk slider */

	/* customers slider */
	if ($('.js-customers-items').length) {
		$('.js-customers-items').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			mobileFirst: true,
			dots: true,
			arrows: false,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 480,
					settings: "unslick"
				}
			]
		});
	}
	/* customers slider */

	/* achievements slider */
	if ($('.js-achievements-items').length) {
		$('.js-achievements-items').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: false,
			mobileFirst: true,
			dots: true,
			arrows: false,
			adaptiveHeight: true,
			responsive: [
				{
					breakpoint: 480,
					settings: "unslick"
				}
			]
		});
	}
	/* achievements slider */

	/* forms validation */

	if ($('.js-signup-form').length) {
		$('.js-signup-form').each(function () {
			$(this).validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true
					},
					password: {
						required: true,
						
					}
				},
				messages: {
					name: {
						required: "Error"
					},
					email: {
						required: "Incorrect email"
					},
					password: {
						required: "Incorrect password",
					}
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('signup', data, function(answer){
						if (answer.ok) {
							if (answer.data.redirect) {
								document.location.href = answer.data.redirect;
							}
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							formErrors.html(errors.join('<br/>')).show();
						}
					});
				}
			});
		})
	};

	if ($('.js-login-form').length) {
		$('.js-login-form').each(function () {
			$(this).validate({
				rules: {
					email: {
						required: true
					},
					password: {
						required: true,
						
					}
				},
				messages: {
					email: {
						required: "Incorrect email"
					},
					password: {
						required: "Incorrect password",
					}
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('login', data, function(answer){
						if (answer.ok) {
							if (answer.data.sfaEnabled) {
								$('.js-login-form').addClass('hidden');
								$('.js-login-sfa-form').removeClass('hidden');
								$(form).find('input[name=email]').val('');
								$(form).find('input[name=password]').val('');
							} else {
								document.location.href = answer.data.redirect;
							}
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							formErrors.html(errors.join('<br/>')).show();
						}
					});
				}
			});
		});

		$('.js-login-sfa-form').each(function () {
			$(this).validate({
				rules: {
					code: {
						required: true
					},
				},
				messages: {
					code: {
						required: "Code required"
					},
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('sfa', data, function(answer){
						if (answer.ok) {
							document.location.href = answer.data.redirect;
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							errors.push('logging out...');
							formErrors.html(errors.join('<br/>')).show();
							setTimeout(function () {
								$('.js-login-sfa-form').addClass('hidden');
								$('.js-login-form').removeClass('hidden');
								formErrors.hide().html('');
								$(form).find('input[name=code]').val('');
							}, 2000);
						}
					});
				}
			});
		});

	}

	if ($('.js-recovery-form').length) {
		$('.js-recovery-form').each(function () {
			$(this).validate({
				rules: {
					email: {
						required: true
					}
				},
				messages: {
					email: {
						required: "Email required"
					}
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('forgot', data, function(answer){
						if (answer.ok) {
							$('.recovery-form__restore').css('display', 'none');
							$('.recovery-form__confirm .js-confirmed-email').html(answer.data.email);
							$('.recovery-form__confirm').css('display', 'block');
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							formErrors.html(errors.join('<br/>')).show();
						}
					});
				}
			});
		})
	};

	if ($('.js-restore-form').length) {
		$('.js-restore-form').each(function () {
			$(this).validate({
				rules: {
					password: {
						required: true
					}
				},
				messages: {
					password: {
						required: "Password required"
					}
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var getParameters = parseQueryString(document.location.href);
					data = data + '&uid=' + getParameters['uid'] + '&code=' + getParameters['code'];
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('restore', data, function(answer){
						if (answer.ok) {
							$('.recovery-form__restore').css('display', 'none');
							$('.recovery-form__confirm').css('display', 'block');
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							formErrors.html(errors.join('<br/>')).show();
						}
					});
				}
			});
		})
	};

	if ($('.js-contact-form').length) {
		$('.js-contact-form').each(function () {
			$(this).validate({
				rules: {
					name: {
						required: true
					},
					email: {
						required: true
					},
					message: {
						required: true
					},
					agree: {
						required: true
					}
				},
				messages: {
					name: {
						required: "Name error"
					},
					email: {
						required: "Incorrect email"
					},
					message: {
						required: "Write a message"
					},
					agree: {
						required: "You must agree of using personal data"
					}
				},

				submitHandler: function (form) {
					var data = $(form).serialize();
					var formErrors = $(form).find('.form-errors');
					formErrors.hide().html('');
					callApi('contact', data, function(answer){
						if (answer.ok) {
							$('#form-contact').hide();
							$('#form-contact-ready').show();
						} else {
							var errors = [];
							for (var k in answer.errors)
								errors.push(answer.errors[k]);
							formErrors.html(errors.join('<br/>')).show();
						}
					});

				}
			});
		})
	};
	/* forms validation */

	/* range slider */
	function numberWithSpaces(number) {
		return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}
	if ($(".js-range-slider-amount1").length) {
		var $range = $(".js-range-slider-amount1");
		var $input = $(".range-slider-val1");
		var	instance;
		var	min = 0;
		var	max = 10000;

		$range.ionRangeSlider({
			skin: "round",
			min: min,
			max: max,
			from: 5000,
			hide_min_max: 'true',
			onStart: function(data) {
				$input.prop("value", '$ ' + numberWithSpaces(data.from));
				calcFixed(data.from);
			},
			onChange: function(data) {
				$input.prop("value", '$ ' + numberWithSpaces(data.from));
				calcFixed(data.from);
			}
		});
		instance = $range.data("ionRangeSlider");
		function calcFixed(inp) {
			var percent = $('span.js-fixed-percent').html();
			var total_return = inp / 100 * percent;
			var net_profit = total_return - inp;
			$('b.js-fixed-total-return').html('$ ' + Math.round(total_return));
			$('b.js-fixed-net-profit').html('$ ' + Math.round(net_profit));
		}
	}
	if ($(".js-range-slider-amount2").length) {
		var $range2 = $(".js-range-slider-amount2");
		var $input2 = $(".range-slider-val2");
		var	instance2;
		var	min2 = 0;
		var	max2 = 10000;

		$range2.ionRangeSlider({
			skin: "round",
			min: min2,
			max: max2,
			from: 5000,
			hide_min_max: 'true',
			onStart: function(data) {
				$input2.prop("value", '$ ' + numberWithSpaces(data.from));
				calcDaily(data.from);
			},
			onChange: function(data) {
				$input2.prop("value", '$ ' + numberWithSpaces(data.from));
				calcDaily(data.from);
			}
		});
		instance2 = $range2.data("ionRangeSlider");
		function calcDaily(inp) {
			var percent = $('span.js-daily-percent').html();
			var days = $('span.js-daily-days').html();
			var total_return = inp / 100 * percent * days;
			var net_profit = total_return - inp;
			$('b.js-daily-total-return').html('$ ' + Math.round(total_return));
			$('b.js-daily-net-profit').html('$ ' + Math.round(net_profit));
		}
	}
	/* range slider */

	/* custom select */
	if($('.styled').length) {
		setTimeout(function() {
		$('.styled').styler();
		}, 1200);
	};
	/* custom select */

	/* show pass */
	$('.box-field__password-eye').on('click', function(){
		$(this).find('i').toggleClass("icon-eye-closed icon-eye-open");
    
		var input = $(this).parent().find('input');
		input.attr('type') === 'password' ? input.attr('type','text') : input.attr('type','password');
	});
	/* show pass */

	/* scroll animation */

	$(document).on('scroll', function(){
		if($('.plan-block').length) {
			$('.plan-block__item').css('margin-left', Math.max(500 - 0.5*window.scrollY) + 'px');
			$('.plan-block__item').eq(1).css('margin-left', 'auto');
			$('.plan-block__item').eq(1).css('margin-right', Math.max(500 - 0.5*window.scrollY) + 'px');
		}
	})

	/* scroll animation */

});

var handler = function () {
	if ($('.js-talk-items').length) {
		$('.js-talk-items').slick('resize');
	}
	if ($('.js-customers-items').length) {
		$('.js-customers-items').slick('resize');
	}
	if ($('.js-achievements-items').length) {
		$('.js-achievements-items').slick('resize');
	}

	var height_footer = $('footer').height();
	var height_header = $('header').height();


	var viewport_wid = viewport().width;
	var viewport_height = viewport().height;

	if (viewport_wid > 991) {
		if ($('.refferal-program').length) {
			$('.refferal-program').parallax();
		}
		if ($('.affiliate').length) {
			$('.affiliate').parallax();
		}
	}

	
}

$(window).bind('load', handler);
$(window).bind('resize', handler);

function callApi(action, data, callback) {
	$.ajax({
		url: '/api?action='+action,
		method: 'post',
		data: data,
		dataType: 'json',
		success: callback
	});
}

function parseQueryString(url) {
	var params = {},
		parts = url.slice( url.indexOf("?") + 1 ).split("&");

	for (var i = 0; i < parts.length; i++) {
		var part = parts[i].split("=");
		params[ part[0] ] = part[1];
	}

	return params;
}
