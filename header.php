<!DOCTYPE html>
<!--[if IE 8]><html <?php language_attributes(); ?> class="ie8"><![endif]-->
<!--[if lte IE 9]><html <?php language_attributes(); ?> class="ie9"><![endif]-->
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
        <link rel="dns-prefetch" href="//google-analytics.com">
        <?php wp_head(); ?>
        <!--[if lt IE 10]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script>
        <![endif]-->
        <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/livingston-css3-mediaqueries-js/1.0.0/css3-mediaqueries.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <![endif]-->

        <!-- Theme Functions JS -->
        
<script>
function setThemeMode() {
  var x = localStorage.getItem("preferredmode");
  if (x == "dark") {
    swapstylesheet('<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/nightmode.css')
  }
};
//]]>
</script>
        <script> function swapstylesheet(sheet,mode){
document.getElementById('styles-css').setAttribute('href', sheet)

}</script>

<script> function nightmode(){
localStorage.setItem("preferredmode", "dark");
swapstylesheet('<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/nightmode.css')

}</script>

<script> function daymode(){
localStorage.setItem("preferredmode", "light");
swapstylesheet('<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/style.css')

}</script>

    </head>
    <body <?php body_class(); ?>>
    <script type="text/javascript">
    setThemeMode()
  </script>
    
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v14.0&appId=2537996866335130&autoLogAppEvents=1" nonce="h7l787FA"></script>

    
        <header class="header">
        
            <div class="headcontainer">
                
            <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<a href="' . get_home_url() . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
} else {
    echo '<a href="' . get_home_url() . '"><h1>' . get_bloginfo('name') . '</h1></a>';
}?>
</div>
                <div class="navcontainer">
                   
                <nav>
                
                <?php wp_nav_menu(['theme_location' => 'header', 'menu_class' => 'nav nav--header']); ?>
                
                
                

            
</nav>


            
</div>

            

            
        </header>
