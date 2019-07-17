<?php get_header(); ?>
<!-- SLider alanı  -->
  <?php  $sliders = cs_get_option('main-slider') ?>
  <?php // var_dump($sliders); ?>

<div class="sliderContainer">
  <div class="owl-carousel owl-theme bigSlider">
    <?php foreach ($sliders as $key): ?>
        <?php $img = $key["slider_image"]; ?>
        <?php var_dump($img); ?>
      <?php  $slide = wp_get_attachment_image_src($img, "full") ?>

      <div class="items">
      <img src="<?php echo $slide[0];?>" alt="">
      <div class="sliderText">
        <h1><?php echo $key['slider-header'] ?></h1>
        <p><?php echo $key['slider-content'] ?></p>
      </div>

      </div>
    <?php endforeach; ?>



  </div>
  <div class="my-next-button"><img src="<?php bloginfo('template_url') ?>/images/right-arrow-copy.svg" alt=""></div>
  <div class="my-previous-button"><img src="<?php bloginfo('template_url') ?>/images/right-arrow.svg" alt=""></div>

</div>
<!-- SLider alanı bitiş  -->
<section class="vrBlock">
  <div class="vrContent">
    <div class="vrheader">
        <?php $catBaslik = cs_get_option('categoryHeader');  ?>
        <?php if (!empty($catBaslik)): ?>
          <h1><?php echo $catBaslik ?></h1>
          <div class="vrLine"></div>
        <?php endif; ?>
        <?php $catText = cs_get_option('categoryText');  ?>
        <article>
          <p><?php echo $catText ?></p>
        </article>
    </div>
    <div class="vrRow">
      <div class="owl-carousel owl-theme categorySlider">
        <?php $catSlider = cs_get_option('main-category'); ?>
        <?php foreach ($catSlider as $cat ): ?>
          <div class="vrCol">
              <div class="Catitem">
              <div class="vrCokTek">
                <?php $catImg = $cat['cat_image'] ?>
                <?php  $img = wp_get_attachment_image_src($catImg, "full") ?>

                <img src="<?php echo $img[0] ?>" alt="">
                <span>
                  <?php  echo $cat['cat_head']; ?>
                </span>
                <?php $id = $cat['cat_id']; ?>
                <?php // var_dump($id); ?>
                <?php $link = get_category_link($id); ?>
                <a href="<?php echo $link ?>" class="vrOverlay">
                  <h4>  <?php  echo $cat['cat_head']; ?></h4>
                  <p> <?php  echo $cat['cat_text']; ?></p>
                </a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </div>

</section>
<section class="vrBlock">
  <div class="vrContent">
    <div class="vrheader">

        <h1>ÖNE ÇIKAN ÜRÜNLER</h1>
        <div class="vrLine"></div>

    </div>
    <div class="vrRow">
      <div class="vrCol">
        <?php $new = new WP_Query("cat=-1&showposts=4") ?>

        <?php if ($new -> have_posts()) : ?>

        	<?php while ($new -> have_posts()) : $new -> the_post(); ?>
          <?php  $meta_data = get_post_meta($post->ID, 'post_', true); //var_dump($meta_data)?>




            <div class="vrCokProduct col4">
              <?php if (has_post_thumbnail()) {
                 the_post_thumbnail();
              } else { ?>
                <img src="<?php bloginfo('template_url') ?>/images/gorsel.png" alt="">

            <?php  } ?>


               <a href="<?php the_permalink(); ?>"><?php the_title(); ?><img src="<?php bloginfo('template_url') ?>/images/right-arrow-new.svg" alt=""></a>

            </div>
        	<?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

        		<?php // Navigation ?>

        	<?php else : ?>

        		<?php // No Posts Found ?>

        <?php endif; ?>



        <!-- dşldşi -->



      </div>
    </div>
  </div>

</section>
<?php $abt =  cs_get_option('about-image') ?>
<?php  $abt = wp_get_attachment_image_src($abt, "full") ?>


<section class="vrBlock whColor vrBlockBg" style="background-image:url(<?php echo $abt[0] ?>">
  <div class="vrContent">
    <div class="vrheader">

        <h2><?php echo cs_get_option('about-header') ?></h2>
        <div class="vrLine"></div>
        <article>
          <p><?php echo cs_get_option('about-text') ?></p>
        </article>
    </div>
    <div class="vrRow">
      <div class="vrCol">
        <?php $abtGrup = cs_get_option('about_group') ?>
        <?php foreach ($abtGrup as $key): ?>
          <div class="vrWhy col3">
            <h3>
              <?php echo $key['group_head'] ?>
            </h3>
            <p><?php echo $key['group_text'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<section class="vrBlock vrOverflowX">
  <div class="vrContent">
    <div class="vrAbout">
      <div class="vrContentImg">
        <?php $b = cs_get_option('servis-img')  ?>
        <?php  $b = wp_get_attachment_image_src($b, "full") ?>

      <img src="<?php echo $b[0] ?>" alt="">
      </div>
      <div class="vrCotnetText">
          <h4><?php echo cs_get_option('servis-header') ?></h4>
          <p><?php echo cs_get_option('servis-text') ?></p>
          <?php $sLink = cs_get_option('servis-link');  ?>
          <?php if (!empty($sLink)): ?>
           <a href="<?php echo $sLink ?>">Bilgi al <img src="<?php bloginfo('template_url') ?>/images/small-arrow.svg" alt=""></a>

          <?php endif; ?>
      </div>
    </div>
  </div>

</section>
<section class="vrBlock vrBgPurple">
  <div class="vrContent">
    <div class="vrheader">

        <h2>Bizden Haberler</h2>
        <div class="vrLine"></div>
        <article>
          <p>Güvenlik dünyası ve Varnost ile ilgili en güncel haberleri takip edin.</p>
        </article>
    </div>

    <div class="vrBlog">

      <?php if (have_posts()) : ?>
        <?php $new = new WP_Query("cat=1&showposts=3") ?>

      	<?php while ($new ->have_posts()) :$new -> the_post(); ?>
        <!--   blog başlangıc -->
          <div class="vrBlogContent">
              <div class="vrBlogContentImg">
                <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif; ?>

              </div>
              <div class="vrBlogContentText">
                <h5><?php the_title(); ?></h5>
                <div class="date"><?php the_date(); ?></div>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">DEVAMINI OKU <img src="<?php bloginfo('template_url') ?>/images/small-arrow.svg" alt=""></a>
              </div>
          </div>
          <!--   blog bitiş -->

      		<?php // Individual Post Styling ?>

      	<?php endwhile; ?>

      		<?php // Navigation ?>

      	<?php else : ?>

      		<?php // No Posts Found ?>

      <?php endif; ?>


    </div>
  </div>

</section>
<section class="vrBlogContent">
  <div class="vrContent">
  <div class="footerSliderContainer">
    <div class="owl-carousel owl-theme footerSlider">
      <?php $ref =  cs_get_option('ref-slider'); ?>
      <?php //var_dump($ref); ?>
      <?php if (!empty($ref)): ?>


      <?php foreach ($ref as $key): ?>

        <?php  $slide = wp_get_attachment_image_src($key['Rlogo'], "full") ?>

        <img src="<?php echo $slide[0] ?>" alt="">

      <?php endforeach; ?>
<?php endif; ?>
    </div>
    <div class="footer-next-button"><img src="<?php bloginfo('template_url') ?>/images/right-arrow-footer.svg" alt=""></div>
    <div class="footer-previous-button"><img src="<?php bloginfo('template_url') ?>/images/right-arrow-footer-2.svg" alt=""></div>
  </div>
  </div>

</section>
<?php get_footer(); ?>
