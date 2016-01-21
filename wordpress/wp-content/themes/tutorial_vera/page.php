<?php get_header(); ?>

<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </header>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>