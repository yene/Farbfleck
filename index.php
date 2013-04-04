  <?php get_header(); ?>
  
  <header>
    <div class="logo">
      <h1>Atelier Farbfleck</h1>
      <h2>Über uns</h2>
    </div>
    <nav>
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>
  <br style="clear: both;">
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


    <article>
      <header>
        <h2>Article title</h2>
        <p>Posted on <time datetime="2011-04-15T16:31:24+02:00">April 15th 2011</time> by <a href="#">Writer</a> – <a href="#comments">6 comments</a></p>
      </header>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>
    <article>
      <header>
        <h2>Article title</h2>
        <p>Posted on <time datetime="2011-04-15T16:31:24+02:00">April 15th 2011</time>  by <a href="#">Writer</a> – <a href="#comments">6 comments</a></p>
      </header>
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>
  </section>
  <?php get_footer(); ?>
  <footer>
    <p>Copyright 2011 Your name</p>
  </footer>
</body>
</html>