
<?php 
function university_files() {
wp_enqueue_script('jsc',get_theme_file_uri('/js/main.js'), NULL, '1.0', true);
wp_enqueue_script('googlemap','//maps.google.com/maps/api/js?sensor=true');  
wp_enqueue_style('google_font' , '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
wp_enqueue_style('font_awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');  
wp_enqueue_style('devuniversity_main_styles',get_stylesheet_uri());


// wp_register_script('mainjs', 'path to lib', array(), null, true);
/*wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(),  null, true );*/
/*wp_add_inline_script('script', 'alert("hello world!");', 'after');*/
}

add_action('wp_enqueue_scripts', 'university_files');

 ?>