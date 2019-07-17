<?php get_header(); ?>
<?php $blog = in_category('Blog')   ?>
<?php $haberler = in_category('Haberler') ?>
<?php if ($blog) : ?>

     <?php get_template_part( 'content', 'blog' );  ?>
<?php elseif( $haberler): ?>
lşsşldlşsdlş
  <?php else: ?>
    <?php get_template_part( 'content', 'product' );  ?>

<?php endif; ?>
<?php get_footer(); ?>
