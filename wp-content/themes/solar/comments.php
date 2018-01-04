
<div id="comentarios">
	<a id="comments"></a>

<?php
// Do not delete these lines
    if ( post_password_required() ) { ?>
        <p class="nocomments">Este artigo está protegido por senha. Insira-a para ver os comentários.</p>
    <?php
        return;
    }
?>

<?php if ( have_comments() ) : ?>

	<h3>Comente Aqui</h3>

    <ul>
    	<?php wp_list_comments('callback=wordpressapi_comments'); ?>
    </ul>

    <?php if ($wp_query->max_num_pages > 1) : ?>
	<div class="pagination">
		<ul>
			<li class="older"><?php previous_comments_link('Anteriores'); ?></li>
			<li class="newer"><?php next_comments_link('Novos'); ?></li>
		</ul>
	</div>
	<?php endif; ?>

<?php endif; ?>



	<div id="formComentarios">

		<?php if ( comments_open() ) : ?>

			<h3><a name="comments"></a>Deixe um comentário</h3>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="formulario">

				<?php if ( $user_ID ) : ?>

		            <p class="autentificado">Autentificado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>

		        <?php else : ?>

					<div class="wpcf7-form-control-wrap">
						<input type="text" class="wpcf7-text" name="author" id="author" class="cttText " placeholder="Nome: (obrigatório)" value="<?php echo $comment_author; ?>" />
					</div>

					<div class="wpcf7-form-control-wrap">
						<input type="text" class="wpcf7-text" name="email" id="email" class="cttText " placeholder="Email: (obrigatório)"  value="<?php echo $comment_author_email; ?>" />
					</div>

				<?php endif; ?>

				<div class="wpcf7-form-control-wrap">
					<textarea class="wpcf7-textarea" name="comment" id="comment" placeholder="Mensagem:" ></textarea>
				</div>

				<div class="wpcf7-form-control-wrap">
					<input type="submit" class="wpcf7-submit" value="Enviar" />
				</div>

				<?php comment_id_fields(); ?>

		        <?php do_action('comment_form', $post->ID); ?>

			</form>

	 <?php else : ?>
	    <h2>Os comentários estão fechados.</h2>

	 <?php endif; ?>

	</div>

</div>


