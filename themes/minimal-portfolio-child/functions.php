
<?php
function my_theme_enqueue_styles() {

    $parent_style = 'minimal-portfolio-style'; 

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<a href="https://www.linkedin.com/in/jessodonnell23/" class="fa fa-linkedin"></a>
<a href="https://www.instagram.com/holyjesssus/" class="fa fa-instagram"></a>
<a href="https://twitter.com/holyjesssus" class="fa fa-twitter"></a>
