<?php

function poppoetryplace_setup() {
    //Load site title on each page
    add_theme_support( 'title-tag' );

    //Load automatic feed links
    add_theme_support( 'automatic-feed-links' );

    //Load thumbnails
    add_theme_support( 'post-thumbnails' ); 
}
add_action( 'after_setup_theme', 'poppoetryplace_setup' );

function poppoetryplace_add_theme_functions() {
    //Load theme stylesheet
    wp_enqueue_style( 'poppoetryplace-style', get_stylesheet_uri() );

    //Load theme scripts
    wp_enqueue_script( 'poppoetryplace-scripts', get_template_directory_uri() . '/scripts.js', array ( 'jquery' ), 1.1, true);

    //Load Comment-reply script
    if ( is_singular( 'post' ) && comments_open() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'poppoetryplace_add_theme_functions' );

//Load menu
function poppoetryplace_menu_register() {
    register_nav_menu('header-menu', __( 'Header Menu', 'poppoetryplace' ));
}
add_action( 'init', 'poppoetryplace_menu_register' );

//Load widget sidebar
function poppoetryplace_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget Sidebar', 'poppoetryplace' ),
        'id'            => 'sidebar',
        'description'   => __( 'Main sidebar that contains widgets', 'poppoetryplace' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );
}
add_action( 'widgets_init', 'poppoetryplace_widgets_init' );


//Load comment form
function poppoetryplace_comment_form_default_fields_update( $fields ) {
    $commenter     = wp_get_current_commenter();
    $user          = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
    $req           = get_option( 'require_name_email' );
    $aria_req      = ( $req ? " aria-required='true'" : '' );
    $html_req      = ( $req ? " required='required'" : '' );
    $html5         = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : false;

    $fields = [
    	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Your comment', 'noun', 'poppoetryplace' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p>',
        'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Your name', 'poppoetryplace'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
        'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Your email', 'poppoetryplace'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' . '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
        'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Your website', 'poppoetryplace'  ) . '</label> ' . '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
    ];
    return $fields;
}
add_filter( 'comment_form_default_fields', 'poppoetryplace_comment_form_default_fields_update' );

function poppoetryplace_comment_form_defaults_update( $defaults ) {
    if ( isset( $defaults[ 'comment_field' ] ) ) {
        $defaults[ 'comment_field' ] = '';
    }
    return $defaults;
}
add_filter( 'comment_form_defaults', 'poppoetryplace_comment_form_defaults_update', 10, 1 );

//Set maximum content width
if ( ! isset( $content_width ) ) {
    $content_width = 750;
}

// Wordpress link pages
$linkPages = array(
    'before'           => '<p>' . __( 'Pages:', 'poppoetryplace' ),
    'after'            => '</p>',
    'link_before'      => '',
    'link_after'       => '',
    'next_or_number'   => 'number',
    'separator'        => ' ',
    'nextpagelink'     => __( 'Next', 'poppoetryplace'),
    'previouspagelink' => __( 'Previous', 'poppoetryplace' ),
    'pagelink'         => '%',
    'echo'             => 1
);

?>