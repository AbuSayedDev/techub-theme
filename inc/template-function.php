<?php 

// Site logo
function techub_site_logo(){
   $site_logo = get_theme_mod('site_logo', get_template_directory_uri().'/assets/img/logo/logo.png');  ?>
   
  <a href="<?php echo home_url('/'); ?>"><img src="<?php echo $site_logo; ?>" alt="<?php echo bloginfo(); ?>"></a>
  <?php }

// Header Top social
function techub_social(){ 
  
    $facebook_url = get_theme_mod( 'facebook_url', '#' );
    $linkedin_url = get_theme_mod( 'linkedin_url', '#' );
    $twitter_url = get_theme_mod( 'twitter_url', '#' );
    $instagram_url = get_theme_mod( 'instagram_url', '#' );
    $pinterest_url = get_theme_mod( 'pinterest_url', '#' );
    $tiktok_url = get_theme_mod( 'tiktok_url', '#' );
    $youtube_url = get_theme_mod( 'youtube_url', '#' );
  ?>

<?php if(!empty($facebook_url)) : ?>
  <a href="<?php echo $facebook_url; ?>" target="_blink"><i class="fa-brands fa-facebook"></i></a>
<?php endif ?>

<?php if(!empty($linkedin_url)) : ?>
  <a href="<?php echo $linkedin_url; ?>" target="_blink"><i class="fa-brands fa-linkedin"></i></a>
<?php endif ?>

<?php if(!empty($twitter_url)) : ?>
  <a href="<?php echo $twitter_url; ?>" target="_blink"><i class="fa-brands fa-twitter"></i></a>
<?php endif ?>

<?php if(!empty($instagram_url)) : ?>
  <a href="<?php echo $instagram_url; ?>" target="_blink"><i class="fa-brands fa-instagram"></i></a>
<?php endif ?>

<?php if(!empty($pinterest_url)) : ?>
  <a href="<?php echo $pinterest_url; ?>" target="_blink"><i class="fa-brands fa-pinterest"></i></a>
<?php endif ?>

<?php if(!empty($tiktok_url)) : ?>
  <a href="<?php echo $tiktok_url; ?>" target="_blink"><i class="fa-brands fa-tiktok"></i></a>
<?php endif ?>

<?php if(!empty($youtube_url)) : ?>
  <a href="<?php echo $youtube_url; ?>" target="_blink"><i class="fa-brands fa-youtube"></i></a>
<?php endif ?>

<?php }
  