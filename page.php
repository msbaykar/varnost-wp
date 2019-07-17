<?php get_header(); ?>

  <?php if (have_posts()) : ?>

  	<?php while (have_posts()) : the_post(); ?>
      <main class="pageContainer">
        <h1><?php the_title(); ?></h1>
        <section>
          <?php the_content(); ?>
        </section>
      </main>

  	<?php endwhile; ?>

  		<?php // Navigation ?>

  	<?php else : ?>

  		<?php // No Posts Found ?>

  <?php endif; ?>
<?php get_footer(); ?>
