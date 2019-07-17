<?php get_header(); ?>
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
<?php get_footer(); ?>
