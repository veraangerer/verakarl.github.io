<?php get_header(); ?>
  <div class="row">
    <main class="small-12 medium-8 columns">

      <!--<?php print_r($wp_query); ?>-->

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <time class="updated">published: <?php echo get_the_date(); ?></time>
            <p class="author">by <?php the_author(); ?></p>
          </header>
          <div class="content">
            <?php the_content(); ?>
          </div>
          <hr>
        </article>
      <?php endwhile; endif; ?>

      <div class="pagination">
        <?php posts_nav_link(); ?>
      </div>
    </main>

    <?php get_sidebar(); ?>

  </div>
<?php get_footer(); ?>
