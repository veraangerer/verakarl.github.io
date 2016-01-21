<sidebar class="medium-4 hide-for-small columns">
  <h5>Pages</h5>
  <ul class="side-nav">
  <?php query_posts( 'post_type=page&posts_per_page=-1' ); ?>
  <?php // query_posts( array( 'post_type' => 'page', 'posts_per_page'= > -1' ); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
  </ul>

  <h5>All Posts (A-Z)</h5>
  <?php // $custom_query = new WP_Query( array( 'post_type' => 'post', 'orderby' => 'title' ) ); ?>
  <?php $cq = new WP_Query( 'post_type=post&orderby=title&order=ASC&posts_per_page=-1' ); ?>

  <ul class="side-nav">
  <?php if ( $cq->have_posts() ) : while ( $cq->have_posts() ) : $cq->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; endif; ?>
  </ul>

</sidebar>