
<footer>
  <div class="footerRow">
    <div class="footerCol">
      <?php $logo = cs_get_option('logo-footer'); ?>
      <?php $logo = wp_get_attachment_image_src($logo, "full") ?>
      <?php //var_dump($logo) ?>
      <?php if (!empty($logo)): ?>
        <img src="<?php echo $logo[0] ?>" alt="Varnost Logo">
      <?php endif; ?>
    </div>
    <div class="footerCol">
        <h6>Varnost</h6>
        <?php wp_nav_menu(array( 'theme_location' => 'footer-menu')) ?>
    </div>
    <div class="footerCol">
      <h6>Sosyal Medya</h6>
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
    <div class="footerCol">
      <h6>İletişim</h6>
      <div class="socialFooter">
        <?php $phone  =cs_get_option('phone') ?>
        <?php $phone2 =cs_get_option('phone2') ?>
        <?php $phone3 =cs_get_option('phone3') ?>
        <?php $mail   =cs_get_option('email') ?>


        <?php if (!empty($phone)): ?>
          <a href="tel:<?php echo $phone ?>"><?php echo $phone ?> </a>
        <?php endif; ?>
        <?php if (!empty($phone2)): ?>
          <a href="tel:<?php echo $phone2 ?>"><?php echo $phone2 ?> </a>
        <?php endif; ?>
        <?php if (!empty($phone3)): ?>
          <a href="tel:<?php echo $phone3 ?>"><?php echo $phone3 ?> </a>
        <?php endif; ?>
        <?php if (!empty($mail)): ?>
          <a href="tel:<?php echo $phone ?>"><?php echo $mail?> </a>
        <?php endif; ?>

      </div>
    </div>
  </div>

</footer>
<script src="js/jquery.min.js" charset="utf-8"></script>
<script src="js/owl.carousel.min.js" charset="utf-8"></script>
<script src="js/isotope.pkgd.min.js" charset="utf-8"></script>
<script src="js/custom.js" charset="utf-8"></script>
<?php wp_footer(); ?>
</body>

</html>
