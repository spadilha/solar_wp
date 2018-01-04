<?php

	if(ICL_LANGUAGE_CODE == 'en'){
		$donate = 'logo_donatenow.png';
		$about = 'btn_about.png';
	} else {
		$donate = 'logo_junteseanos.png';
		$about = 'btn_sobre.png';
	}

	$aboutpageid = icl_object_id(5, 'page', true);

?>



<div id="escondido"></div>
<footer id="footer">

	<div class="ftr_left">
		<span class="menuIcon">Menu</span>
		<ul id="menu">
			<li><a class="menuScroll" href="#beneficios"><?php echo __("Advantages", "spatheme"); ?></a></li>
			<li><a class="menuScroll" href="#entraves"><?php echo __("Barriers", "spatheme"); ?></a></li>
			<li><a class="menuScroll" href="#agindo"><?php echo __("Actions", "spatheme"); ?></a></li>
			<li><a class="menuScroll" href="#mapa"><?php echo __("Map", "spatheme"); ?></a></li>
			<li><a class="loadRight" href="<?php echo post_permalink($aboutpageid); ?>"><?php echo __("About the Project", "spatheme"); ?></a></li>
		</ul>

		<a href="http://www.greenpeace.org/brasil/pt/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/_images/logo_greenpeace.png" alt="Greenpeace" class="logoGreenpeace"></a>

		<a href="http://doe.greenpeace.org.br/clima-e-energia/?appeal=14334&utm_source=referral&utm_medium=internal_website&utm_campaign=soldenorteasul" target="_blank" class="junteseanos"><img src="<?php bloginfo('template_directory'); ?>/_images/<?php echo $donate; ?>" alt="<?php echo __("Donate now", "spatheme"); ?>"></a>
	</div>

	<div class="ftr_right">

		<a href="http://www.greenpeace.org/brasil/pt/quemsomos/politica-de-privacidade/" target="_blank" id="politicaPrivacidade"><?php echo __("Privacy<br> Policy", "spatheme"); ?></a>

		<span data-volume="sound" class="btn mute-btn">
			<img src="<?php bloginfo('template_directory'); ?>/_images/ico_off.png" alt="" class="mute">
			<img src="<?php bloginfo('template_directory'); ?>/_images/ico_on.png" alt="" class="sound">
		</span>



		<?php

			global $languages;

			if(!empty($languages)){

				$numLang = count($languages);
				$langIndex = 1;

			    echo '<nav id="language">';

			    foreach($languages as $l){

			        $idioma = $l['tag'];

			        if($idioma == 'en-US'){
			        	$idioma = 'ENG';
			        }
			        else {
			        	$idioma = 'POR';
			        }

			        if(!$l['active']) {
			        	echo '<span><a class="link-lgg link-'.$idioma.'" href="'.$l['url'].'">'.$idioma.'</a></span>';
			        }
			        else {
			        	echo '<span class="active">'.$idioma.'</span>';
			        }

			        if($langIndex < $numLang){
			        	echo ' - ';
			        }
			        $langIndex++;
			    }
			    echo '</nav>';
			}

		?>




		<div class="socialmedia">
			<a target="_blank" href="<?php the_field('facebook', 'option'); ?>" class="btn_facebook">Facebook</a>
			<a target="_blank" href="<?php the_field('instagram', 'option'); ?>" class="btn_instagram">Instagram</a>
			<a target="_blank" href="<?php the_field('twitter', 'option'); ?>" class="btn_twitter">Twitter</a>
		</div>

		<a href="<?php echo post_permalink($aboutpageid); ?>" class="loadRight"><img src="<?php bloginfo('template_directory'); ?>/_images/<?php echo $about; ?>" alt="<?php echo __("About the Project", "spatheme"); ?>" id="btnSobre"></a>
	</div>

</footer>


<?php wp_footer(); ?>




</body>

</html> <!-- This is the end. Beautiful friend.  -->
