<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="contentToGet">

	<div class="inner">
		<h2><?php the_title(); ?></h2>

		<?php the_content(); ?>
	</div>

	<?php $galeria = get_field('fotos'); if($galeria){ ?>

		<div class="galeriaWrapper">

		<span class="slick-prev"></span>
		<span class="slick-next"></span>

			<div class="galeria" id="gal-<?php echo $post->ID; ?>">
				<?php foreach ($galeria as $foto) { ?>
					<div class="gal"><a class="opengal" rel="galeria" href="<?php echo $foto['url']; ?>" data-caption="<?php echo $foto['caption']; ?>"><span class="gal_caption"><p><?php echo $foto['caption']; ?></p> <span class="ampliar"><?php echo __("Click to enlarge", "spatheme"); ?></span></span><img src="<?php echo $foto['sizes']['medium']; ?>" alt="<?php echo $foto['title']; ?>"></a></div>
				<?php } ?>
			</div>

		</div>

	<?php } ?>

</div>

<script type="text/javascript">

jQuery(function($){

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


	$('.opengal, .lightbox').iLightBox({
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
</script>

<?php endwhile; endif; ?>


<?php get_footer(); ?>

