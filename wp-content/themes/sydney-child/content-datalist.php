<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Sydney
 */

?>

<?php
  $args = [
    'post_type' => 'datalist',
    'posts_per_page' => 5,
  ];
  $my_query = new WP_Query($args); ?>
 
<?php if ($my_query->have_posts()): ?>
 
  <div>
 
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
 
    <div>
      <h3><a href="<?php echo get_permalink();?>"><?php the_title(); ?></a></h3>
      <?php the_excerpt();?>
      <p><?php the_time(get_option('date_format')); ?></p>
    </div>
 
    <?php endwhile; ?>
 
  </div>
 
<?php else:?>
 
  <p>まだ案件はありません。</p>
 
<?php endif; wp_reset_postdata(); ?>

<?php get_footer();?>
