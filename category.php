<?php get_header(); ?>
  <?php $blog = is_category('Blog')   ?>
  <?php $haberler = is_category('Haberler') ?>
  <?php if ($blog) : ?>
    <?php get_template_part('category', 'blog');  ?>
  <?php elseif ($haberler): ?>
    <?php get_template_part('category', 'blog');  ?>
  <?php else: ?>
    <?php get_template_part('category', 'products');  ?>

  <?php endif; ?>
<?php get_footer(); ?>
