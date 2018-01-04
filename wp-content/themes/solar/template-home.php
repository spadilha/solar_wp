<?php
/*
Template Name: Home Page
*/
?>


<?php get_header(); ?>


<?php

	if(ICL_LANGUAGE_CODE == 'en'){
		$formProjeto = '[contact-form-7 id="294" title="Submit your project"]';
		$introImg = 'hdr_here_comes_the_sun.svg';
		$joinus = 'btn_joinus.png';
	} else {
		$formProjeto = '[contact-form-7 id="81" title="Envie seu projeto"]';
		$introImg = 'hdr_sol-de-norte-ao-sul.svg';
		$joinus = 'btn_juntese.png';
	}

 ?>

<div id="leftWrapper" class="boxContent">
	<span class="btnClose leftClose"></span>
	<div id="leftContent"></div>
</div>


<div id="rightWrapper" class="boxContent">
	<span class="btnClose rightClose"></span>
	<div id="rightContent"></div>
</div>

<div id="mapWrapper">
	<span class="btnClose mapClose"></span>
	<div class="mapContent" id="mapProjeto"></div>
</div>

<div id="mapFormWrapper">
	<span class="btnClose mapFormClose"></span>
	<div class="mapContent" id="mapForm">

		<h2><?php echo __("Submit your project", "spatheme"); ?></h2>

		<?php echo do_shortcode($formProjeto); ?>

	</div>
</div>



<div id="path">
	<div class="mainIcons sun"></div>
	<div class="mainIcons cloud"></div>
</div>


<div id="main" class="page-<?php echo ICL_LANGUAGE_CODE; ?>">


	<!-- SLIDE 1 -->
	<div id="intro" class="bloco slide-1" data-slide="1" data-media="1">

		<div class="content-wrapper">
			<div class="text-container">

				<img src="<?php bloginfo('template_directory'); ?>/_images/<?php echo $introImg; ?>" alt="<?php echo __("Here comes the sun", "spatheme"); ?>" class="intro-logo">
			</div>
		</div>

		<img src="<?php bloginfo('template_directory'); ?>/_images/arw_down.png" class="arwdown">
	</div>


	<!-- SLIDE 2 -->
	<div id="video-1" class="bloco slide-2" data-slide="2" data-media="2">

		<div class="content-wrapper">
			<div class="text-container">
				<?php the_field('texto_1', 'option'); ?>
			</div>

		</div>
	</div>

	<!-- SLIDE 3 -->
	<div id="video-texto" class="bloco slide-3" data-slide="3" data-media="2">

		<div class="content-wrapper">
			<div class="text-container">
				<?php the_field('texto_2', 'option'); ?>
			</div>
		</div>

	</div>

	<!-- SLIDE 4 -->
	<div id="beneficios" class="bloco menu-bloco slide-4" data-slide="4" data-media="3">

		<div class="menuWrapper">

			<?php
				$salas = new WP_Query(array('post_type' => 'page', 'page_id' => 36));
				if ($salas->have_posts()) : while ($salas->have_posts()) : $salas->the_post();
			?>
			<div class="icoWrapper icoBene icoRight ico-180 salas icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>


			<?php
				$emprego = new WP_Query(array('post_type' => 'page', 'page_id' => 13));
				if ($emprego->have_posts()) : while ($emprego->have_posts()) : $emprego->the_post();
			?>
			<div class="icoWrapper icoBene icoRight ico-155 emprego icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>




			<?php
				$agua = new WP_Query(array('post_type' => 'page', 'page_id' => 116));
				if ($agua->have_posts()) : while ($agua->have_posts()) : $agua->the_post();
			?>
			<div class="icoWrapper icoBene icoLeft icoTop ico25 agua icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadRight" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>


			<?php
				$contaluz = new WP_Query(array('post_type' => 'page', 'page_id' => 87));
				if ($contaluz->have_posts()) : while ($contaluz->have_posts()) : $contaluz->the_post();
			?>

			<div class="icoWrapper icoBene icoLeft ico0 contaluz icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadRight" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>

				</div>
			</div>

			<?php endwhile; endif; ?>




			<?php
				$gelo = new WP_Query(array('post_type' => 'page', 'page_id' => 98));
				if ($gelo->have_posts()) : while ($gelo->have_posts()) : $gelo->the_post();
			?>

			<div class="icoWrapper icoBene icoLeft ico-25 gelo icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadRight" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>




		</div>
	</div>


	<!-- SLIDE 5 -->
	<div id="video-2" class="bloco slide-5" data-slide="5" data-media="4">
	</div>


	<!-- SLIDE 6 -->
	<div id="video-2-gap" class="bloco slide-6" data-slide="6" data-media="4">
		<div class="content-wrapper">
			<div class="text-container">
				<?php the_field('texto_3', 'option'); ?>
			</div>

		</div>
	</div>


	<!-- SLIDE 7 -->
	<div id="entraves" class="bloco menu-bloco slide-7" data-slide="7" data-media="5">

		<div class="menuWrapper">

			<?php
				$conhecer = new WP_Query(array('post_type' => 'page', 'page_id' => 147));
				if ($conhecer->have_posts()) : while ($conhecer->have_posts()) : $conhecer->the_post();
			?>

			<div class="icoWrapper icoEntrave icoRight ico-180 conhecer icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>



			<?php
				$financiamento = new WP_Query(array('post_type' => 'page', 'page_id' => 149));
				if ($financiamento->have_posts()) : while ($financiamento->have_posts()) : $financiamento->the_post();
			?>

			<div class="icoWrapper icoEntrave icoRight ico-155 financiamento icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>



			<?php
				$tributos = new WP_Query(array('post_type' => 'page', 'page_id' => 151));
				if ($tributos->have_posts()) : while ($tributos->have_posts()) : $tributos->the_post();
			?>
			<div class="icoWrapper icoEntrave icoLeft ico0 tributos icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadRight" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>




		</div>
	</div>

	<!-- SLIDE 8 -->
	<div id="video-3" class="bloco slide-8" data-slide="8" data-media="6">
	</div>


	<!-- SLIDE 9 -->
	<div id="video-3-gap" class="bloco slide-9" data-slide="9" data-media="6">
		<div class="content-wrapper">
			<div class="text-container">
				<?php the_field('texto_4', 'option'); ?>
			</div>

		</div>
	</div>


	<!-- SLIDE 10 -->
	<div id="agindo" class="bloco menu-bloco slide-10" data-slide="10" data-media="7">

		<div class="menuWrapper">


			<?php
				$maodeobra = new WP_Query(array('post_type' => 'page', 'page_id' => 153));
				if ($maodeobra->have_posts()) : while ($maodeobra->have_posts()) : $maodeobra->the_post();
			?>
			<div class="icoWrapper icoAgindo icoLeft ico0 maodeobra icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadRight" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>



			<?php
				$conhecimento = new WP_Query(array('post_type' => 'page', 'page_id' => 155));
				if ($conhecimento->have_posts()) : while ($conhecimento->have_posts()) : $conhecimento->the_post();
			?>
			<div class="icoWrapper icoAgindo icoRight ico-180 conhecimento icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>



			<?php
				$derrubaricm = new WP_Query(array('post_type' => 'page', 'page_id' => 157));
				if ($derrubaricm->have_posts()) : while ($derrubaricm->have_posts()) : $derrubaricm->the_post();
			?>
			<div class="icoWrapper icoAgindo icoRight ico-155 derrubaricm icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>

					<a class="inlineBtn leiaMais loadLeft" href="<?php the_permalink(); ?>"><?php echo __("Read more", "spatheme"); ?></a>
				</div>
			</div>

			<?php endwhile; endif; ?>


			<?php
				$creditosolar = new WP_Query(array('post_type' => 'page', 'page_id' => 159));
				if ($creditosolar->have_posts()) : while ($creditosolar->have_posts()) : $creditosolar->the_post();
			?>
			<div class="icoWrapper icoAgindo icoLeft ico-25 creditosolar icohide">
				<span class="icon"></span>
				<h3><span><?php the_field('popup_titulo'); ?></span></h3>
				<div class="icoBox">
					<h4><?php the_field('popup_titulo'); ?></h4>

					<?php the_field('popup_chamada'); ?>

					<?php $videocode = get_field('popup_video'); if($videocode){ ?>
						<a class="inlineBtn playVideo" data-type="iframe" data-options="width: 1280, height: 720" href="http://www.youtube.com/embed/<?php echo $videocode; ?>?autoplay=1&autohide=1&border=0&egm=0&showinfo=0"><?php echo __("Watch the video", "spatheme"); ?></a>
					<?php } ?>


				</div>
			</div>

			<?php endwhile; endif; ?>

		</div>

	</div>

	<!-- SLIDE 11 -->
	<div id="video-4" class="bloco slide-11" data-slide="11" data-media="8">
	</div>


	<!-- SLIDE 12 -->
	<div id="video-4-gap" class="bloco slide-12" data-slide="12" data-media="8">
		<div class="content-wrapper">
			<div class="text-container">
				<?php the_field('texto_5', 'option'); ?>
			</div>

		</div>
	</div>


	<!-- SLIDE 13 -->
	<div id="mapa" class="bloco slide-13" data-slide="13" data-media="9">
		<div id="mapaPage" class="media mapa media-9" data-ratio="1">
			<div class="mapaSun"></div>
			<div class="envieProjeto"><span><?php echo __("Submit your project", "spatheme"); ?></span></div>

			<div class="junteseNos">
				<p><?php echo __("Solar energy is changing lives. Be part of this revolution!", "spatheme"); ?></p>
				<a href="http://doe.greenpeace.org.br/clima-e-energia/?appeal=14334&utm_source=referral&utm_medium=internal_website&utm_campaign=soldenorteasul" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/_images/<?php echo $joinus; ?>" alt="<?php echo __("Join us!", "spatheme"); ?>"></a>
			</div>
			<div class="mapaUp"></div>
			<div id="googlemaps"></div>
		</div>
	</div>


</div>

<script type="text/javascript">

jQuery(function($){

	$('.bgSlider1, .bgSlider2, .bgSlider3').slick({
		autoplay: true,
		fade: true,
		arrows: false,
		pauseOnHover: false,
		slidesToShow: 1,
        slidesToScroll: 1,
        speed: 3000,
        autoplaySpeed: 5000,
    });

	$('.playVideo').each(function(){
		$(this).iLightBox({
			skin: 'smooth',
			path: 'horizontal',
			fullAlone: 0,
			overlay: {
				opacity: 0.8
			},
			controls: {
				arrows: 0,
				thumbnail: 0,
				toolbar:0,
			}
		});
	});

});

// Init Google Maps
// initMap is the callback when google maps is ready.
function initMap(){

	// Create a map object and specify the DOM element for display.
	var map = new google.maps.Map(document.getElementById('googlemaps'), {
		center: {lat: 20, lng: -10},
		zoom: 3,
		scrollwheel: false,
		streetViewControl: false,
		mapTypeControl: false,
		rotateControl: true,
		rotateControlOptions: {
			position: google.maps.ControlPosition.RIGHT_CENTER
		},
		zoomControl: true,
		zoomControlOptions: {
		    position: google.maps.ControlPosition.RIGHT_CENTER
		},

	});

	map.set('styles',[{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e0efef"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"hue":"#1900ff"},{"color":"#c0e8e8"}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit.line","elementType":"geometry","stylers":[{"visibility":"on"},{"lightness":700}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7dcdcd"}]}]);

	// Click on the map hide the infoBox
	map.addListener('click', function() {
		jQuery('body').removeClass('noscroll');
		jQuery('#mapWrapper, #mapFormWrapper').removeClass('isVisible');
	});


<?php

$latz = '';
$index = 1;
$projetos = new WP_Query(array('post_type' => 'projeto', 'posts_per_page' => -1));

$quantidade = $projetos->post_count;

if ($projetos->have_posts()) : while ($projetos->have_posts()) : $projetos->the_post();

	$prj_cidade = get_field('cidade');
	$prj_gmap = get_field('local');
	$get_content = get_the_content();

	$get_pin_color = get_field('pincolor');
	$pin_color = str_replace('#', '', $get_pin_color);

	//remove new lines otherwise it will break the JavaScript
	$prj_content = trim(preg_replace('/\s+/', ' ', $get_content));
	$prj_content = str_replace("'", "\'",$prj_content);

	$prj_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );

	$latz .= 'new google.maps.LatLng(' . $prj_gmap['lat'] .', ' . $prj_gmap['lng'] . ')';
	if ($index < $quantidade) $latz .= ', ';
?>


	// Create a marker
 	var image = {
		url: '<?php echo get_template_directory_uri(); ?>/_images/ico_pin.php?svgcor=<?php echo $pin_color; ?>',
		size: new google.maps.Size(28, 41),
		// The origin for this image is (0, 0).
		// The anchor for this image is the base of the flagpole at (0, 32).
		anchor: new google.maps.Point(14,41)
	};

	var marker<?php echo $index; ?> = new google.maps.Marker({
		map: map,
		icon: image,
		animation: google.maps.Animation.DROP,
		position: {lat: <?php echo $prj_gmap['lat']; ?>, lng: <?php echo $prj_gmap['lng']; ?>},
		infowindow: myinfowindow<?php echo $index; ?>
	});

	// Get title, address and timing for Marker Infobox
	var content<?php echo $index; ?> = '<img src="<?php echo $prj_image[0]; ?>" class="mapImage" /><h2><?php the_title(); ?></h2><h3><?php echo $prj_cidade; ?></h3><?php echo $prj_content; ?>';



	// Marker Infobox
	var myinfowindow<?php echo $index; ?> = new google.maps.InfoWindow({
		content: content<?php echo $index; ?>,
		maxWidth: 360
	});

	// Markker ClickEvent
	marker<?php echo $index; ?>.addListener('click', function() {
		jQuery('#mapFormWrapper').removeClass('isVisible');

		if(jQuery('#mapWrapper').hasClass('isVisible')){
			jQuery('#mapWrapper').removeClass('isVisible');
			jQuery('#escondido').animate({'left': '130px'}, 400, function(){
				jQuery('#mapProjeto').html(content<?php echo $index; ?>);

				jQuery('#escondido').animate({'left': '200px'}, 200, function(){
					jQuery('#mapWrapper').addClass('isVisible');
				});
			});
		}
		else {
			jQuery('body').addClass('noscroll');
			jQuery('#mapProjeto').html(content<?php echo $index; ?>);
			jQuery('#mapWrapper').addClass('isVisible');
		}

	});

	<?php $index++; ?>


<?php endwhile; endif; ?>

	//fitbounds();

	// Cria um timeout para disparar o ajuste da tela apenas quando o usuário parar de redimencioná-la.
	// var resizeIndex = setTimeout(function() {
	// 	fitbounds();
	// }, 800);
	// clearTimeout(resizeIndex);
	// jQuery(window).resize(function() {

	// 	if (resizeIndex !== false) {
	// 		clearTimeout(resizeIndex);
	// 	}
	// 	resizeIndex = setTimeout(function() {
	// 		fitbounds();
	// 	}, 300);
	// });

	function fitbounds(){

		// CENTER MAP BASED ON THE MARKERS POSITION
		// Make an array of the LatLng's of the markers you want to show
		var LatLngList = new Array (<?php echo $latz; ?>);
		//  Create a new viewpoint bound
		var bounds = new google.maps.LatLngBounds ();
		//  Go through each...
		for (var i = 0, LtLgLen = LatLngList.length; i < LtLgLen; i++) {
		  //  And increase the bounds to take this point
		  bounds.extend(LatLngList[i]);
		}
		//  Fit these bounds to the map
		map.fitBounds(bounds);

	}



}




</script>


<?php

	if(ICL_LANGUAGE_CODE == 'en'){ ?>

	<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&language=en-US&callback=initMap"></script>

<?php } else { ?>

	<script async defer src="https://maps.googleapis.com/maps/api/js?v=3&language=pt-BR&callback=initMap"></script>

<?php } ?>




<?php get_footer(); ?>