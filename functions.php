<?php
function my_script_init() {
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css", array(), "5.8.2", "all");
    wp_enqueue_style("my", get_template_directory_uri() . "/style.css.", array(), filemtime(get_theme_file_path('/style.css')), "all");
    wp_enqueue_script("my", get_template_directory_uri(). "/js/script.js", array("jquery"), filemtime(get_theme_file_path('/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");

function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    }
    add_action("after_setup_theme", "my_setup");

// デフォルトの投稿の一覧ページリンク取得でget_post_type_archive_linkが使えるようにする
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'all';
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

?>


