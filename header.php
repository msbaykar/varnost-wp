<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&amp;subset=latin-ext" rel="stylesheet">

  <?php wp_head();?>

</head>
<body>
<header id="header">
<div class="topNav">
  <div class="topMenu">
    <div class="topLeft">
      <div class="socialFooter">
        <?php $f = cs_get_option('facebook'); ?>
        <?php $t = cs_get_option('twitter'); ?>
        <?php $i = cs_get_option('instagram'); ?>
        <?php $l = cs_get_option('linkedin'); ?>
        <?php $y = cs_get_option('youtube'); ?>

        <?php if (!empty($f)): ?>
          <a href="<?php echo $f ?>"><img src="<?php bloginfo('template_url') ?>/images/facebook-logo-button.svg" alt=""></a>
        <?php endif; ?>
        <?php if (!empty($t)): ?>
        <a href="<?php echo $f ?>"><img src="<?php bloginfo('template_url') ?>/images/twitter-logo-button.svg" alt=""></a>
        <?php endif; ?>
        <?php if (!empty($l)): ?>
        <a href="#"><img src="<?php bloginfo('template_url') ?>/images/linkedin.svg" alt=""></a>
        <?php endif; ?>
        <?php if (!empty($y)): ?>
        <a href="#"><img src="<?php bloginfo('template_url') ?>/images/youtube.svg" alt=""></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="topRight">
      <div class="phones">
        <img src="<?php bloginfo('template_url') ?>/images/phone.svg" alt="">
        <a href="tel:<?php echo cs_get_option('phone') ?>"><?php echo cs_get_option('phone') ?></a> <span style="color:#fff">-</span>
        <a href="tel:<?php echo cs_get_option('phone2') ?>"><?php echo cs_get_option('phone2') ?></a>
      </div>
      <div class="search">
        <a href=""><img src="<?php bloginfo('template_url') ?>/images/search.svg" alt=""></a>
      </div>

    </div>
  </div>
  <div class="mainMenu">

      <?php wp_nav_menu( array( 'theme_location' => 'left-menu' ) ); ?>

    <div class="mainMenuCenter">
      <?php $logo = cs_get_option('logo'); ?>
      <?php $logo = wp_get_attachment_image_src($logo, "full") ?>
      <img src="<?php echo $logo[0] ?>" alt="Varnost Logo png">
    </div>

      <?php wp_nav_menu( array( 'theme_location' => 'right-menu' ) ); ?>

      <div class="megamenu">
        <div class="megaHeader">
          Ürünler ve Hizmetler
        </div>
        <div class="mmcol">
          <?php wp_nav_menu( array( 'theme_location' => 'mega-menu' ) ); ?>

        </div>
        <div class="mmcol">

        </div>
      </div>
      <style media="screen">
      .dropMouse:hover > .megamenu {
        height: auto;
      }
        .megamenu {
          display: flex;
          flex-wrap: wrap;
          max-width: 1440px;
          width: 100%;
          height: 0;
          overflow: hidden;
          background-color: #F8F8F8;

        }
        .megamenu .megaHeader {
          width: 100%;
          background-color: #000;
          color:#fff;
          padding: 5px;
          margin-bottom: 5px;

        }
        .megamenu .mmcol {
          width: 50%;
          margin-left:50px;
        }
      </style>
  </div>
</div>

</header>

<script>

</script>
