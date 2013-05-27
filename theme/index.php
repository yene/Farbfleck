  <?php get_header(); ?>
  <section>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p>Posted on <time datetime="2011-04-15T16:31:24+02:00">April 15th 2011</time> by <a href="#">Writer</a> – <a href="#comments">6 comments</a></p>
        <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
      </header>
      <p> rest gibt es unter http://webworkblog.net/20-5-eigenes-wordpress-theme-template-erstellen-tutorial-howto/</p>
    </article>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  </section>
  <?php get_footer(); ?>