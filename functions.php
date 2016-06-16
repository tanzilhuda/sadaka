<?php 
function final_theme_setup()
{
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// load textdomain

load_theme_textdomain('final_wp_project',get_template_directory_uri().'/language');

register_nav_menu('main_menu',__('main menu','final_wp_project'));
// =================[read_more]=========
function redmore($word){
$blog_content=explode(" ", get_the_content());
 $word_limit=array_slice($blog_content,0,$word);
//print_r($blog_content);
echo implode(" ",$word_limit);
}
}
add_action('after_setup_theme','final_theme_setup');


// slider option


function slider(){
$slider_labels=array(
	'name'	=> 'wp slider',
	'add new'	=> 'add slider',
	'add_new_item'	=> 'add new slider',
	'not_found'	=> 'noslider',
	'search'	=> 'search slider',
	);
$args=array(
	'labels'	=>$slider_labels,
	'public'	=>	true,
	'supports'	=> array(
	'title',
	'thumbnail'

		)
	);
register_post_type('slider',$args);
}
add_action('init','slider');



// function future area
function future_area(){

	$future_labels=array(

		'name'			=>	'future_area',
		'add new'		=>	'add future_area',
		'add_new_item'	=>	'add new future_area',
		'not_found'		=>	'no future_area',
		'search'		=>	'search future_area'
		);
	$arge=array(
		'labels'	=>	$future_labels,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail',
			'editor'
			)

		);
	register_post_type('future_post',$arge);
}
add_action('init','future_area');

// function body_post
function body_post(){

	$body_post=array(

		'name'			=>	'body_post',
		'add new'		=>	'add body_post',
		'add_new_item'	=>	'add new body_post',
		'not_found'		=>	'no body_post',
		'search'		=>	'search body_post'
		);
	$arge=array(
		'labels'	=>	$body_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail',
			'editor'
			)

		);
	register_post_type('body_post',$arge);
}
add_action('init','body_post');

// function body_post
function causes_post(){

	$causes_post=array(

		'name'			=>	'causes_post',
		'add new'		=>	'add causes_post',
		'add_new_item'	=>	'add new causes_post',
		'not_found'		=>	'no causes_post',
		'search'		=>	'search causes_post'
		);
	$arge=array(
		'labels'	=>	$causes_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail',
			'editor'
			)

		);
	register_post_type('causes_post',$arge);
}
add_action('init','causes_post');

// gallery page  gallery_post
function gallery_post(){

	$gallery_post=array(

		'name'			=>	'gallery_post',
		'add new'		=>	'add gallery_post',
		'add_new_item'	=>	'add new gallery_post',
		'not_found'		=>	'no gallery_post',
		'search'		=>	'search gallery_post'
		);
	$arge=array(
		'labels'	=>	$gallery_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail',
			'editor'
			)

		);
	register_post_type('gallery_post',$arge);
}
add_action('init','gallery_post');
// about page  about_post
function about_post(){

	$about_post=array(

		'name'			=>	'about_post',
		'add new'		=>	'add about_post',
		'add_new_item'	=>	'add new about_post',
		'not_found'		=>	'no about_post',
		'search'		=>	'search about_post'
		);
	$arge=array(
		'labels'	=>	$about_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail',
			'editor'
			)

		);
	register_post_type('about_post',$arge);
}
add_action('init','about_post');

// about page  ourteam_post
function ourteam_post(){

	$ourteam_post=array(

		'name'			=>	'ourteam_post',
		'add new'		=>	'add ourteam_post',
		'add_new_item'	=>	'add new ourteam_post',
		'not_found'		=>	'no ourteam_post',
		'search'		=>	'search ourteam_post'
		);
	$arge=array(
		'labels'	=>	$ourteam_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'thumbnail'
			)

		);
	register_post_type('ourteam_post',$arge);
}
add_action('init','ourteam_post');

// about page  causes_single_post
function causes_tab_post(){

	$causes_tab_post=array(

		'name'			=>	'causes_tab_post',
		'add new'		=>	'add causes_tab_post',
		'add_new_item'	=>	'add new causes_tab_post',
		'not_found'		=>	'no causes_tab_post',
		'search'		=>	'search causes_tab_post'
		);
	$arge=array(
		'labels'	=>	$causes_tab_post,
		'public'	=>	true,
		'supports'	=> array(

			'title',
			'editor'
			)

		);
	register_post_type('causes_tab_post',$arge);
}
add_action('init','causes_tab_post');

function widgets_init(){

register_sidebar(array(
'name'			=> 'foter_widget',
'description'=>'you can add footer_widget  here',
'id'			=> 'foter_widget',
'before_widget'	=> '<div class="col-md-4"><div class="footer-col">',
'after_widget'	=> '</div></div></div>',
'before_title'	=> '<h4 class="footer-title">',
'after_title'	=> '</h4><div class="footer-content">'
	));

}
add_action('widgets_init','widgets_init');

//  add subtitle to posts and pages
// function vg_subtitle($posttitle) {
//    global $post;
//    $subtitle = get_post_meta ($post->ID, 'Subtitle', true);
//    echo $posttitle;
//    if ($subtitle) echo ' - ' . $subtitle;
// }
// add_action('thematic_postheader_posttitle','vg_subtitle');


 ?>