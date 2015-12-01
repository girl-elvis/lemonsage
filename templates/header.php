<header class="banner navbar navbar-default navbar-static-top">
  <?php echo do_shortcode('[google-translator]'); ?>
  <div class="container">

<?php 
$string = get_bloginfo('name'); 

function replace_first_word($str, $format) {
    return preg_replace('/(?:^|\b)(\p{L})(\p{L}*)/u', str_replace('{L}', '$1', $format).'$2', $str);
}
$site = replace_first_word($string, '<span>$1</span>')
?>
  <h2 class="sitedesc"><?php echo get_bloginfo('description') ?></h2>

    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><h1 class="site-name"><?php echo $site; ?></h1></a>


    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
