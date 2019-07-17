<?php // Template Name: Category page
    get_header();
?>
<!--   Ürün Category loop begin -->
<main class="categoryPage">
  <section class="vrBlock">
    <div class="vrContent">
      <div class="vrheader">
          <h2><?php single_cat_title(); ?></h2>
          <div class="vrLine"></div>

      </div>
    </div>
    <div class="catContainer">

      <!-- cat Menu -->
      <div class="catMenu">
        <div class="catMenuHeader">
          Ürünler ve Hizmetler
        </div>
        <div class="catMenuContent">
        <?php $args = array(
          'exclude' => '1',
          'use_desc_for_title' => 1,
        ) ?>
        <?php wp_list_categories($args); ?>
        </div>
      </div>
      <!-- cat Menu -->
      <!--   Ürün Category loop end -->

      <div class="catProductList">
          <ul>
              <?php $new = new WP_Query("cat=1") ?>
            <?php if ($new -> have_posts()) : ?>
              <?php while ($new -> have_posts()) : $new -> the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail() ) {
                   the_post_thumbnail('medium',array('class' => 'catThumbnail'));
                }; ?>
                  <span class="catProductListTitle"><span><?php the_title() ?></span><img src="<?php bloginfo('template_url') ?>/images/right-arrow-new.svg" alt=""></span></a></li>

                <?php // Individual Post Styling ?>


              <?php endwhile; ?>

                <?php // Navigation ?>

              <?php else : ?>

                <?php // No Posts Found ?>

            <?php endif; ?>

          </ul>

      </div>
    <!--   cat catProductList -->
    </div>
  </section>

</main>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>
<?php get_footer(); ?>
