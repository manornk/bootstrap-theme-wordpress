<?php get_header(); ?>

<div class="col-sm-8">


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <h4><span class="glyphicon glyphicon-calendar"> </span> <?php the_time('F jS, Y') ?>
    <span class="glyphicon glyphicon-folder-open"> </span> <?php echo get_the_category_list(', '); ?>


    </h4>
    <p><?php the_content(__('(more...)')); ?></p>
    <hr> <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>
</div>
<div class="col-sm-3 col-sm-offset-1">
  <?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
