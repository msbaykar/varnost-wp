<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

	<?php the_title(); ?>
  <?php the_content(); ?>

	<?php endwhile; ?>

		<?php // Navigation ?>

	<?php else : ?>

		<?php // No Posts Found ?>

<?php endif; ?>
