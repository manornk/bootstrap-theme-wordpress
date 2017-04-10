<?php get_header(); ?>

<div class="col-sm-8">


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h2><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h2>
      <span class="meta-data"><span class="glyphicon glyphicon-calendar"> </span> <?php the_time('F jS, Y') ?>
      <span class="glyphicon glyphicon-folder-open"> </span> <?php echo get_the_category_list(', '); ?>
     </span>
     <img class="img-responsive" src="<?php echo $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>"/>

      <p><?php the_content('(more...)'); ?></p>
      <p><?php the_tags(); ?></p>
    </div>
    <?php endwhile; else: ?>
    <p><?php echo 'Sorry, no posts matched your criteria.'; ?></p>

  <?php endif; ?>
</div>
<div class="col-sm-3 col-sm-offset-1" id="widget">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-1') ) :

endif; ?>
</div>


<?php get_footer(); ?>
