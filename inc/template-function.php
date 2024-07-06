<?php 

// techub site logo
function techub_site_logo(){
   $site_logo = get_theme_mod('site_logo', get_template_directory_uri().'/assets/img/logo/logo.png');
  ?>
  <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $site_logo; ?>" alt="<?php echo bloginfo(); ?>"></a>
  <?php 
}

function techub_top_header(){
    
}
  