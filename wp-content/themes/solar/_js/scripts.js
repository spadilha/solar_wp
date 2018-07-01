/* Author: Saulo Padilha */

jQuery(function($){

	// Rola a página para o topo ao recarregar;
	$(window).on('beforeunload', function(){
	   	$(window).scrollTop(0);
	   	$('#leftWrapper, #rightWrapper, #mapWrapper, #mapFormWrapper, .envieProjeto, .junteseNos').removeClass('isVisible');
	});

	var temp_dir = "/wp-content/themes/solar/";

	// WEBAPP
	var WebApp = {

	    // INIT
	    init: function() {

	    	var _this = this;

	    	$(window).scrollTop(0);

	    	_this.setViewport();
	    	_this.wayPoints();

	    	$('.arwdown').click(function(){
	    		$('html, body').animate({scrollTop : $('#video-1').offset().top}, 1000);
	    	});

	    	$('.mapaUp').click(function(){
	    		$('html, body').animate({scrollTop : $('#video-4-gap').offset().top}, 1000);
	    	});

	    	// Mapeia click para fechar janelas
		    $(document).on('click', function(event) {


	    		if (!$(event.target).closest('.menuIcon, #menu').length) {
					$('#menu').hide();
				}


				if(isDesk){

					if (!$(event.target).closest('#rightWrapper, .ilightbox-holder, .ilightbox-button, .ilightbox-overlay').length) {
						if($('#rightWrapper').hasClass('isVisible')){
							_this.closeRight();

						}
					}

					if (!$(event.target).closest('#leftWrapper, .ilightbox-holder, .ilightbox-button, .ilightbox-overlay').length) {
						if($('#leftWrapper').hasClass('isVisible')){
							_this.closeLeft();
						}
					}

					if (!$(event.target).closest('.icoWrapper, .icoAgindo, .ilightbox-holder, .ilightbox-button, .ilightbox-overlay').length) {
						$('.icoWrapper, .icoAgindo').removeClass('active');
					}



					if (!$(event.target).closest('.envieProjeto, #mapFormWrapper').length) {
						if($('#mapFormWrapper').hasClass('isVisible')){
							_this.closeMapForm();
						}
					}

					if (!$(event.target).closest('#googlemaps, #mapWrapper').length) {
						if($('#mapWrapper').hasClass('isVisible')){
							_this.closeMapProject();
						}
					}
				}

			});

			$('#menu a.menuScroll').click(function(e){
				e.preventDefault();
				$('#menu').hide();
				var getId = $(this).attr('href');
				$('html, body').animate({scrollTop : $(getId).offset().top}, 1000);
				return false;
			});

			// OPEN LINKS ON RIGHT WRAPPER
			$('.loadRight').click(function(e){
				e.preventDefault();
				_this.loadRight($(this));
			});

	    	$('.rightClose').click(function(){
	    		_this.closeRight();
			});

	    	// OPEN LINKS ON LEFT WRAPPER
			$('.loadLeft').click(function(e){
				e.preventDefault();
				_this.loadLeft($(this));

			});
			$('.leftClose').click(function(){
				_this.closeLeft();
			});

			$('.envieProjeto').click(function(){
				_this.openMapForm();
			});

			$('.mapFormClose').click(function(){
				_this.closeMapForm();
			});

			$('.mapClose').click(function(){
				_this.closeMapProject();
			});

			$('.uploadBtn').change(function(){
				$(this).parents('.fileUpload').find('.uploadFile').html($(this).val());
				$(this).parent().removeClass('file-not-valid');
			});

			$('.wpcf7-response-output').bind('DOMSubtreeModified', function() {
				if($('.uploadBtn').hasClass('wpcf7-not-valid')){
					$('.uploadBtn').parent().addClass('file-not-valid');
				} else {
					$('.uploadBtn').parent().removeClass('file-not-valid');
				}
			});

			// Cria um timeout para disparar o ajuste da tela apenas quando o usuário parar de redimencioná-la.
			var resizeWindow = setTimeout(function() {
				_this.setViewport();
			}, 800);
			clearTimeout(resizeWindow);

			$(window).resize(function() {

				if (resizeWindow !== false) {
					clearTimeout(resizeWindow);
				}
				resizeWindow = setTimeout(function() {
					_this.setViewport();
					Waypoint.refreshAll();
					$('.bgSlider1')[0].slick.refresh();
					$('.bgSlider2')[0].slick.refresh();
					$('.bgSlider3')[0].slick.refresh();
				}, 300);
			});

		},

		initDesktop: function(){

			var _this = this;

		    // SUN AND CLOUD ANIMATION ON PAGE SCROLL
			window.onscroll = function(){
				_this.setIconsPosition();
			};

			var intro = '<img src="'+ temp_dir +'_images/bgs/tela1.jpg" class="bgSlider media photo media-1" data-ratio="0.5625">';

			var video1 = '<video loop="loop" poster="/_videos/abertura.jpg" data-ratio="0.5625" class="media video media-2"><source src="/_videos/SeqBloco1.mp4" type="video/mp4" /><source src="/_videos/SeqBloco1.webm" type="video/webm" /></video>';

			var video2 = '<video loop="loop" poster="/_videos/raios.jpg" data-ratio="0.5625" class="media video media-4"><source src="/_videos/SeqBloco2.mp4" type="video/mp4" /><source src="/_videos/SeqBloco2.webm" type="video/webm" /></video>';

			var video3 = '<video loop="loop" poster="/_videos/abertura.jpg" data-ratio="0.5625" class="media video media-6"><source src="/_videos/SeqBloco3.mp4" type="video/mp4" /><source src="/_videos/SeqBloco3.webm" type="video/webm" /></video>';

			var video4 = '<video loop="loop" poster="/_videos/abertura.jpg" data-ratio="0.5625" class="media video media-8"><source src="/_videos/SeqBloco4.mp4" type="video/mp4" /><source src="/_videos/SeqBloco4.webm" type="video/webm" /></video>';

			var beneMedia = '<div class="bgSlider1 media photo media-3" data-ratio="0.5625"><div><img src="'+ temp_dir +'_images/bgs/bloco1_1.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco1_2.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco1_3.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco1_4.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco1_5.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco1_6.jpg"></div></div>';

			var entraveMedia = '<div class="bgSlider2 media photo media-5" data-ratio="0.5625"><div><img src="'+ temp_dir +'_images/bgs/bloco2_1.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco2_2.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco2_3.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco2_4.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco2_5.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco2_6.jpg"></div></div>';

			var agindoMedia = '<div class="bgSlider3 media photo media-7" data-ratio="0.5625"><div><img src="'+ temp_dir +'_images/bgs/bloco3_1.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco3_2.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco3_3.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco3_4.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco3_5.jpg"></div><div><img src="'+ temp_dir +'_images/bgs/bloco3_6.jpg"></div></div>';


			$('#intro').append(intro);
			$('#video-1').append(video1);
			$('#video-2').append(video2);
			$('#video-3').append(video3);
			$('#video-4').append(video4);

			$('#beneficios').append(beneMedia);
			$('#entraves').append(entraveMedia);
			$('#agindo').append(agindoMedia);

			_this.setViewport();

			$('.menuIcon').on('mouseover', function(){
				$('#menu').show();
			});
			$('#menu').on('mouseleave', function(){
				$(this).hide();
			});

			$('.mute-btn').click(function(){
				var sound = $(this).attr('data-volume');

								if(sound == 'sound'){
					sound = 'mute';
					$("video").prop('muted', true);
				}
				else {
					sound = 'sound';
					$("video").prop('muted', false);
				}

				$(this).attr('data-volume', sound);
			});

			$('.icon').on('mouseenter', function(){
				var $parent = $(this).parent();
				if($parent.hasClass('active')){
					$parent.removeClass('active');
				}
				else {
					$('.icoWrapper, .icoAgindo').removeClass('active');
					$parent.addClass('active');
				}
			});
		},

		initMobile: function(){

			var _this = this;

			$('.menuIcon').on('click', function(){
				$('#menu').toggle();
			});

			$('.icoWrapper h3').on('click', function(){
				if($(this).hasClass('opened')){
					$('.icoBox').slideUp();
					$(this).removeClass('opened');
				}
				else{
					$('.icoBox').slideUp();
					$(this).siblings('.icoBox').stop().slideDown();
					$(this).addClass('opened');
				}
				Waypoint.refreshAll();

			});

			var intro = '<img src="'+ temp_dir +'_images/bgs/res-abertura.jpg" class="bgSlider media photo media-1" data-ratio="0.5625">';

			var video1 = '<img src="'+ temp_dir +'_images/bgs/res-video1.jpg" class="bgSlider media photo media-2" data-ratio="0.5625">';

			var beneMedia = '<img src="'+ temp_dir +'_images/bgs/res-bloco1.jpg" class="bgSlider media photo media-3" data-ratio="0.5625">';

			var video2 = '<img src="'+ temp_dir +'_images/bgs/res-video2.jpg" class="bgSlider media photo media-4" data-ratio="0.5625">';

			var entraveMedia = '<img src="'+ temp_dir +'_images/bgs/res-bloco2.jpg" class="bgSlider media photo media-5" data-ratio="0.5625">';

			var video3 = '<img src="'+ temp_dir +'_images/bgs/res-video3.jpg" class="bgSlider media photo media-6" data-ratio="0.5625">';

			var agindoMedia = '<img src="'+ temp_dir +'_images/bgs/res-bloco3.jpg" class="bgSlider media photo media-7" data-ratio="0.5625">';

			var video4 = '<img src="'+ temp_dir +'_images/bgs/res-video4.jpg" class="bgSlider media photo media-8" data-ratio="0.5625">';

			$('#intro').append(intro);
			$('#video-1').append(video1);
			$('#video-2').append(video2);
			$('#video-3').append(video3);
			$('#video-4').append(video4);

			$('#beneficios').append(beneMedia);
			$('#entraves').append(entraveMedia);
			$('#agindo').append(agindoMedia);

			_this.setViewport();
		},

		setViewport : function() {
			var _this = this;

			// Get viewport
			var vwidth = document.documentElement.clientWidth,
				vheight = document.documentElement.clientHeight,
				vratio = vheight/vwidth,
				vheight = vheight;


			// Set fullbleeds to be full window
			$('.bloco').css({
				"min-height": vheight + "px"
			});

			if(isDesk){
				// Set covers to fill container and centered
				$('.media').each(function(){
					var $el = $(this),
						elratio = $el.attr('data-ratio'),
						css = {};


					// DON'T APPLY ON MAPA
					if(!$el.hasClass('mapa')){
						if(elratio < vratio) {
							css["width"] = vheight / elratio + 'px';
							css["height"] = vheight + 'px';
							css["margin-left"] = (vwidth - vheight / elratio) * 0.5;
							css["margin-top"] = 0;

						} else {
							css["width"] = vwidth + 'px';
							css["height"] = vwidth * elratio + 'px';
							css["margin-left"] = 0;
							css["margin-top"] = (vheight - vwidth * elratio) * 0.5;
						}

						$el.css(css);
					}
				});

			}

		},

		wayPoints: function(){

			var _this = this;

			// WAYPOINT PAGE NUMBERS
			var currentMedia, elId;
			var slides = $('.bloco').waypoint({

				handler: function(direction) {

					$('.icoWrapper').removeClass('active');

					// Check scroll direction to get the target Element
					thisEl = this.element.dataset.slide;
					if(direction == 'down'){
						$targetElement = $('.slide-'+thisEl);
						elId = $targetElement.attr('id');
					}
					else {
						thisEl--;
						$targetElement = $('.slide-'+thisEl);
						elId = $targetElement.attr('id');
					}

					if(isDesk){

						$('.menuWrapper').css('z-index', '-1');
						$targetElement.find('.menuWrapper').css('z-index', '60');


						/* BENEFÍCIOS */
						if(elId == 'beneficios'){
							$('.sun').addClass('beneficio');
							$('.cloud').addClass('icohide');
							$('.icoBene').removeClass('icohide');
							$('.bgSlider1').slick('slickPlay');
						}

						/* ENTRAVES */
						else if(elId == 'entraves'){
							$('.sun').addClass('icohide');
							$('.cloud').addClass('entrave');
							$('.icoEntrave').removeClass('icohide');
							$('.bgSlider2').slick('slickPlay');
						}

						/* AGINDO */
						else if(elId == 'agindo' || elId == 'agindo-texto'){
							$('.sun').addClass('agindo');
							$('.cloud').addClass('agindo');
							$('.icoAgindo').removeClass('icohide');
							$('.bgSlider3').slick('slickPlay');
						}

						else {
							$('.sun').removeClass('beneficio agindo icohide');
							$('.cloud').removeClass('entrave icohide agindo');
							$('.icoBene, .icoEntrave, .icoAgindo').addClass('icohide');
							$('.bgSlider1, .bgSlider2, .bgSlider3').slick('slickPause');
						}

						if(elId == 'mapa'){
							$('.mapaSun').fadeIn().addClass('goTop');
							$('.envieProjeto, .junteseNos').addClass('isVisible');
							$('#path').fadeOut(600);
							$('#mapaPage').css('z-index', '10');

						}
						else {
							$('.mapaSun').fadeOut().removeClass('goTop');
							$('.envieProjeto, .junteseNos').removeClass('isVisible');
							$('#path').show();
							$('#mapaPage').css('z-index', '-1');
						}
					}


					// IS MOBILE
					else {

						if(elId == 'mapa'){
							$('.envieProjeto, .junteseNos').addClass('isVisible');
							$('#mapaPage').css('z-index', '10');

						}
						else {
							$('.envieProjeto, .junteseNos').removeClass('isVisible');
							$('#mapaPage').css('z-index', '-1');
						}

					}

					var targetMedia = $targetElement.data('media');

					if(targetMedia >= 1 && targetMedia != currentMedia) {


						$('.media').removeClass('shown');

						var $targetMedia = $('.media-'+ targetMedia);

						$targetMedia.addClass('shown');


						if(isDesk){
							_this.pauseVideos();
							if($targetMedia.hasClass('video')){
								$targetMedia.get(0).play();

							}
						}
					}
					currentMedia = targetMedia;
				},
			  	offset: '50%'
			});

		},

		setIconsPosition: function(){
			var windowYOffset = window.pageYOffset;
			var windowHeight = $(window).height();

			var startBeneficios = windowHeight * 2.5;
			var endBeneficios = windowHeight * 3.5;

			var startEntraves = windowHeight * 5.5;

			var endEntraves = windowHeight * 6.5;

			var startTextoVideo3 = windowHeight * 7.5;

			var startAgindo = windowHeight * 8.5;
			var endAgindo = windowHeight * 9.5;


			var sunPosition = (windowYOffset / windowHeight) * 20;
			var cloudPosition = ((windowYOffset / windowHeight) * 20) + 180;

			var addclass = 'nada';

			if(windowYOffset > startBeneficios && windowYOffset < startEntraves){
				sunPosition = sunPosition + 85;
				cloudPosition = cloudPosition + 85;
				addclass = 'mais85';
			}
			else if(windowYOffset > startEntraves && windowYOffset < startTextoVideo3){
				sunPosition = sunPosition + 75;
				cloudPosition = cloudPosition + 75;
				addclass = 'mais75';

			}
			else if(windowYOffset > startTextoVideo3 && windowYOffset < startAgindo){
				sunPosition = sunPosition + 175;
				cloudPosition = cloudPosition + 175;
				addclass = 'mais120';

			}

			else if(windowYOffset > endAgindo){
				sunPosition = sunPosition + 195;
				cloudPosition = cloudPosition + 195;
				addclass = 'mais195';
			}

			var sunRotation = 0 - sunPosition;
			var cloudRotation = 0 - cloudPosition;

			$('.sun').css('transform', 'rotate('+sunPosition+'deg) translate(-43.4vw) rotate('+sunRotation+'deg)').attr('data-add', addclass);
			$('.cloud').css('transform', 'rotate('+cloudPosition+'deg) translate(-43.4vw) rotate('+cloudRotation+'deg)').attr('data-add', addclass);
		},



		loadRight: function($thisel){

			var _this = this;

			$('#menu').hide();

			if($thisel.hasClass('active')){
				_this.closeRight();
			}
			else {

				if(isDesk && $('.galeria').length){
					$('.galeria').slick('unslick');
				}


				pathUrl = $thisel.attr('href');
				pathUrl = pathUrl + ' #contentToGet';


				$( "#rightContent" ).load(pathUrl, function( response, status, xhr ) {
					if ( status == "error" ) {
											}
					else {
						$('body').addClass('noscroll');
						$('#rightWrapper').addClass('isVisible');
						$thisel.addClass('active');


						if(isDesk){


							$('.galeria').imagesLoaded().done( function() {

								$('.galeria').slick({
									infinite: true,
									speed: 300,
									slidesToShow: 1,
									centerMode: true,
									variableWidth: true,
									prevArrow: '.slick-prev',
	            					nextArrow: '.slick-next',
								});

								$('.fitvidz').fitVids();

								$('.opengal').iLightBox({
									skin: 'smooth',
									path: 'horizontal',
									fullAlone: 0,
									overlay: {
										opacity: 0.8
									},
									controls: {
										arrows: 1,
										thumbnail: 0,
										toolbar:0,
										fullscreen: 0
									}
								});

								$('.galeriaWrapper').animate({'opacity': 1}, 800);

							});



						}
						else {
							$('.fitvidz').fitVids();
							$('.opengal').on('click', function(e){
								e.preventDefault();
								var $alvo = $(this).find('.gal_caption');
								if($alvo.hasClass('showGal')){
									$alvo.removeClass('showGal');
								}
								else{
									$('.gal_caption').removeClass('showGal');
									$alvo.addClass('showGal');
								}
							});
							$('.galeriaWrapper').animate({'opacity': 1}, 800);
						}
					}
				});

			}

		},

		loadLeft: function($thisel){

			var _this = this;

			$('#menu').hide();

			if($thisel.hasClass('active')){
				_this.closeLeft();
			}
			else {

				if(isDesk && $('.galeria').length){
					$('.galeria').slick('unslick');
				}

				var pathUrl = $thisel.attr('href');
				pathUrl = pathUrl + ' #contentToGet';


				$( "#leftContent" ).load(pathUrl, function( response, status, xhr ) {
					if ( status == "error" ) {
											}
					else {
						$('body').addClass('noscroll');
						$('#leftWrapper').addClass('isVisible');
						$thisel.addClass('active');

						if(isDesk){

							$('.galeria').imagesLoaded().done( function() {

								$('.galeria').slick({
									infinite: true,
									speed: 300,
									slidesToShow: 1,
									centerMode: true,
									variableWidth: true,
									prevArrow: '.slick-prev',
	            					nextArrow: '.slick-next',
								});

								$('.fitvidz').fitVids();

								$('.opengal').iLightBox({
									skin: 'smooth',
									path: 'horizontal',
									fullAlone: 0,
									overlay: {
										opacity: 0.8
									},
									controls: {
										arrows: 1,
										thumbnail: 0,
										toolbar:0,
										fullscreen: 0
									}
								});

								$('.galeriaWrapper').animate({'opacity': 1}, 800);

							});

						}
						else {
							$('.fitvidz').fitVids();
							$('.opengal').on('click', function(e){
								e.preventDefault();
								var $alvo = $(this).find('.gal_caption');
								if($alvo.hasClass('showGal')){
									$alvo.removeClass('showGal');
								}
								else{
									$('.gal_caption').removeClass('showGal');
									$alvo.addClass('showGal');
								}
							});
							$('.galeriaWrapper').animate({'opacity': 1}, 800);
						}
					}
				});

			}
		},

		closeRight: function(){
			$('body').removeClass('noscroll');
			$('#rightWrapper').removeClass('isVisible');
			$('.loadRight, .loadLeft').removeClass('active');
		},
		closeLeft: function(){
			$('body').removeClass('noscroll');
			$('#leftWrapper').removeClass('isVisible');
			$('.loadRight, .loadLeft').removeClass('active');
		},

		openMapForm: function(){
			var _this = this;
			_this.closeMapProject();
			if(!$('body').hasClass('noscroll')){
				$('body').addClass('noscroll');
			}
			$('#mapFormWrapper').toggleClass('isVisible');
		},

		closeMapForm: function(){
			$('body').removeClass('noscroll');
			$('#mapFormWrapper').removeClass('isVisible');
		},

		closeMapProject: function(){
			$('body').removeClass('noscroll');
			$('#mapWrapper').removeClass('isVisible');
		},

		pauseVideos : function(){
			$('video').each(function(){
				this.pause();
			});
		}

	};

	var isDesk = true;
	// MOBILE
	enquire.register("screen and (max-width:780px)", {

	    match : function() {
	    		    	isDesk = false;
	    },
	    unmatch : function(){
	    	location.reload();
	    },
	    setup: function(){
	    	isDesk = false;
			WebApp.init();
	    	WebApp.initMobile();
	    },
	    deferSetup : true

	// DESKTOP
	}).register("screen and (min-width:781px)", {

	    match : function() {
	    		    	isDesk = true;
	    },
	    unmatch : function(){
	    	location.reload();
	    },
	    setup: function(){
	    	isDesk = true;
	    	WebApp.init();
	    	WebApp.initDesktop();
	    },
	    deferSetup : true

	});

});