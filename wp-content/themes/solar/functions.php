<?php
/*
Author: Saulo Padilha
URL: htp://spadilha.com
*/

/************* OPTIONS PAGE *********************/
if( function_exists('acf_add_options_page') )
{
    acf_add_options_page(array(
        'page_title'    => 'Opções do Tema',
        'menu_title'    => 'Opções do Tema',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options'
    ));
}

/************* CALL CORE FUNCTIONS *********************/
require_once('_functions/core.php');

/************* SHORTCODES *********************/
require_once('_functions/shortcodes.php');


/************* REMOVE POSTS FROM MENU ADMIN *********************/
add_action('admin_menu', 'remove_menus', 102);
function remove_menus() {
    global $submenu;
    remove_menu_page( 'edit.php' ); // Posts
}


/************* THE_EXCERT DYNAMIC *********************/
function the_excerpt_dynamic($length) { // Outputs an excerpt of variable length (in characters)
    global $post;
    $text = $post->post_excerpt;
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]>', $text);
        $text = strip_shortcodes( $text ); // optional, recommended
        $text = strip_tags($text,'<br>'); // Keep some html code;
    }

    $output = strlen($text);
    if($output <= $length ) {
        $text = substr($text,0,$length);
    }else {
        $text = substr($text,0,$length);
    }

    echo $text;
}

/************* SANITIZE FILE NAME *********************/
function spa_sanitizefilename ($filename) {
    return remove_accents( $filename );
}
add_filter('sanitize_file_name', 'spa_sanitizefilename', 10);


/************* ADD LIGHTBOX TO ALL EDITOR IMAGES WITH LINKS ********/
// add_filter('the_content', 'my_addlightboxrel');
// function my_addlightboxrel($content) {
//        global $post;
//        $pattern ="/<a(.*?)href=('|\")(.*?).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>/i";
//        $replacement = '<a$1href=$2$3.$4$5 title="'.$post->post_title.'"$6>';
//        $content = preg_replace($pattern, $replacement, $content);
//        return $content;
// }

/************* WRAP EMBEDS *********************/
add_filter('embed_oembed_html', 'my_embed_oembed_html', 99, 4);
function my_embed_oembed_html($html, $url, $attr, $post_id) {
  return '<div class="embed-wrap fitvidz">' . $html . '</div>';
}


/************* COMENTÁRIOS TEMPLATE *********************/
function wordpressapi_comments($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>

    <li class="comentario" id="comment-<?php comment_ID(); ?>">

        <div class="cmt_txt">

            <?php comment_text() ?>

            <div class="commentInfo">
                <span class="replyIco"><?php if(function_exists("yus_reply")) yus_reply(); ?></span>

                <p>Postado por <?php $user_name_str = substr(get_comment_author(),0, 20); ?><span class="autor"><?php echo $user_name_str ?></span> |  <?php the_time('d/m/Y \à\s g:i') ?> <?php if ($comment->comment_approved == '0') : ?><span style="color:red"> (Aguardando aprovação)</span><?php endif; ?></p>
            </div>



        </div>
<?php
}

/******** Stop TinyMCE removing tags (span, etc) from editor *****/
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');

?>